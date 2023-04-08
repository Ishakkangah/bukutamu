<?php

namespace App\Http\Controllers;

use App\Exports\cetakPengunjungBerdasakanFilter;
use App\Exports\cetakPengunjungBerdasakanHariIni;
use App\Exports\cetakPengunjungBerdasakanMinggu;
use App\Models\{bukutamu, User};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;

class BukutamuController extends Controller
{
    // INDEX
    public function index()
    {
        $alert =  'Harap di isi dengan sebenar-benar nya dikolom yang sudah disediakan.';
        $totalTamuHariIni = bukutamu::whereDate('created_at', carbon::now())->count();
        $totalTamuMingguIni = bukutamu::whereBetween('created_at', [
            Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()
        ])->count();
        $totalTamuBulanIni = bukutamu::whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->count();
        $totalAdmin = User::where('role_id', 3)->count();
        $bukutamus = bukutamu::latest()->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')->paginate(20);
        return view('bukutamu.index', [
            'bukutamus' => $bukutamus,
            'alert' => $alert,
            'totalTamuHariIni' => $totalTamuHariIni,
            'totalTamuMingguIni' => $totalTamuMingguIni,
            'totalTamuBulanIni' => $totalTamuBulanIni,
            'totalAdmin' => $totalAdmin,
        ]);
    }

    // CARI TAMU
    public function cari(Request $request)
    {
        $totalTamuHariIni = bukutamu::whereDate('created_at', carbon::now())->count();
        $totalTamuMingguIni = bukutamu::whereBetween('created_at', [
            Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()
        ])->count();
        $totalTamuBulanIni = bukutamu::whereBetween('created_at', [
            Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()
        ])->count();
        $totalAdmin = User::where('role_id', 3)->count();
        $alert =  'Harap di isi dengan sebenar-benar nya dikolom yang sudah disediakan.';
        $cariTamu =  $request->cari;
        $bukutamus = bukutamu::latest()
            ->where('name', 'like', "%" . $cariTamu . "%")
            ->orWhere('instansi', 'like', '%' . $cariTamu . '%')
            ->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')
            ->paginate(20);

        return view('bukutamu.index', compact('bukutamus', 'alert', 'totalTamuHariIni', 'totalTamuMingguIni', 'totalTamuBulanIni', 'totalAdmin'));
    }

    // CREATE TAMU
    public function create()
    {
        $alert =  'Harap di isi dengan sebenar-benar nya dikolom yang sudah disediakan.';
        return view('bukutamu.create', compact('alert'));
    }

    // KIRIM KE DATABASE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'thumbnail' => 'required',
            'instansi' => 'required|max:200',
            'perihal' => 'required|max:200',
            'tujuan' => 'required|max:200',
            'keterangan' => 'required|present',
            'usia' => 'required|numeric',
            'jenis_kelamin' => 'required|string',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string'
        ]);


        $attr["name"] = strtoupper($request->name);
        $attr["instansi"] = strtoupper($request->instansi);
        $attr["perihal"] = strtoupper($request->perihal);
        $attr["tujuan"] = strtoupper($request->tujuan);
        $attr["keterangan"] = strtoupper($request->keterangan);
        $attr['thumbnail'] = $request->thumbnail;
        $attr['usia'] = $request->usia;
        $attr['jenis_kelamin'] = strtoupper($request->jenis_kelamin);
        $attr['pendidikan'] = strtoupper($request->pendidikan);
        $attr['pekerjaan'] = strtoupper($request->pekerjaan);

        if ($request->name) {
            $attr['name'] = $request->name;
        }
        if ($request->instansi) {
            $attr['instansi'] = $request->instansi;
        }
        if ($request->perihal) {
            $attr['perihal'] = $request->perihal;
        }
        if ($request->tujuan) {
            $attr['tujuan'] = $request->tujuan;
        }
        if ($request->keterangan) {
            $attr['keterangan'] = $request->keterangan;
        }
        if ($request->usia) {
            $attr['usia'] = $request->usia;
        }
        if ($request->jenis_kelamain) {
            $attr['jenis_kelamin'] = $request->jenis_kelamin;
        }
        if ($request->pendidikan) {
            $attr['pendidikan'] = $request->pendidikan;
        }
        if ($request->pekerjaan) {
            $attr['pekerjaan'] = $request->pekerjaan;
        }
        if ($request->thumbnail) {
            $img = $request->thumbnail;
            $img_parts = explode(';base64,', $img);
            $img_type_aux = explode('image/', $img_parts[0]);
            $image_type = $img_type_aux[1];

            $img_base64 = base64_decode($img_parts[1]);
            $fileName = uniqid() . '.png'; //Nilai uniq => contoh : "63667e0f0d877.png"

            $folderPath = 'images/bukutamu/';
            $file = $folderPath . $fileName;
            Storage::put($file, $img_base64);
            // $attr['thumbnail'] = $fileName ? $fileName->store('images/bukutamu') : null;

            $attr['thumbnail'] = $file;
        }

        bukutamu::create($attr);
        Alert::success('Data berhasil disimpan!', 'Silahkan Masuk!');

        return redirect('/')->with('success', 'Data berhasil di simpan');
    }

    // DETAIL DATA TAMU
    public function detail(bukutamu $bukutamu)
    {
        $dataTamu = bukutamu::where('id', $bukutamu->id)->first();
        return view('bukutamu.detailsTamu', compact('dataTamu'));
    }

    // EDIT DATA TAMU
    public function edit(bukutamu $bukutamu)
    {
        $alert = 'Harap di edit dengan sebenar-benar nya dikolom yang sudah disediakan.';
        $datatamus = bukutamu::where('id', $bukutamu->id)->first();
        return view('bukutamu.edit', compact('datatamus', 'alert'));
    }

    // UPDATE DATA TAMU
    public function update(Request $request, bukutamu $bukutamu)
    {
        $request->validate([
            'name' => 'required|max:200',
            'instansi' => 'required|max:200',
            'perihal' => 'required|max:200',
            'tujuan' => 'required|max:200',
            'keterangan' => 'required|present',
            'usia' => 'required|numeric',
            'jenis_kelamin' => 'required|string',
            'pendidikan' => 'required|string',
            'pekerjaan' => 'required|string'
        ]);

        $attr["name"] = $request->name;
        $attr["instansi"] = $request->instansi;
        $attr["perihal"] = $request->perihal;
        $attr["tujuan"] = $request->tujuan;
        $attr["keterangan"] = $request->keterangan;
        $attr["usia"] = $request->usia;
        $attr["jenis_kelamin"] = $request->jenis_kelamin;
        $attr["pendidikan"] = $request->pendidikan;
        $attr["pekerjaan"] = $request->pekerjaan;

        $bukutamu->update($attr);
        Alert::success('Data berhasil di ubah.');

        return redirect('/')->with('success', 'Tamu berhasil di ubah!');
    }

    // HAPUS
    public function destroy(bukutamu $bukutamu)
    {
        Storage::delete($bukutamu->thumbnail);
        $bukutamu->delete();
        session()->flash('success', 'Data tamu atas nama ' . $bukutamu->name . ' berhasil dihapus !');
        Alert::success('Sukses',  'Berhasil dihapus');
        return redirect()->to('/');
    }


    // TOTAL TAMU HARI INI
    function tamu_hari(Request $request)
    {
        $data = bukutamu::select(
            'id',
            'thumbnail',
            'name',
            'usia',
            'jenis_kelamin',
            'pendidikan',
            'pekerjaan',
            'instansi',
            'perihal',
            'created_at',
            'tujuan',
            'keterangan',
        )->whereDate('created_at', Carbon::now())->latest()->paginate(120);
        return view('bukutamu.totalTamuHariIni', compact('data'));
    }

    // CETAK BUKU TAMU HARI INI PDF
    function pdf_hari()
    {
        $data = bukutamu::select(
            'id',
            'thumbnail',
            'name',
            'usia',
            'jenis_kelamin',
            'pendidikan',
            'pekerjaan',
            'instansi',
            'perihal',
            'created_at',
            'tujuan',
            'keterangan',
        )->whereDate('created_at', Carbon::now())->latest()->get();
        // view('bukutamu.cetakTamuHariIni', ['data' => $data]);
        $pdf =  PDF::loadview('bukutamu.cetakTamuHariIni', ['data' => $data])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-buku-tamu.pdf');
    }



    // TOTAL TAMU MINGGU INI
    function tamu_minggu(Request $request)
    {
        $data = bukutamu::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->latest()->select(
            'id',
            'thumbnail',
            'name',
            'usia',
            'jenis_kelamin',
            'pendidikan',
            'pekerjaan',
            'instansi',
            'perihal',
            'created_at',
            'tujuan',
            'keterangan',
        )->paginate(120);
        $hariPertama = Carbon::now()->startOfWeek();
        $hariTerakhir = Carbon::now()->endOfWeek();
        return view('bukutamu.totalTamuBulanIni', compact('data', 'hariPertama', 'hariTerakhir'));
    }


    // CETAK BUKU TAMU MINGGU INI PDF
    function pdf_minggu()
    {
        $data = bukutamu::whereBetween(
            'created_at',
            [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ]
        )
            ->latest()->select(
                'id',
                'thumbnail',
                'name',
                'usia',
                'jenis_kelamin',
                'pendidikan',
                'pekerjaan',
                'instansi',
                'perihal',
                'created_at',
                'tujuan',
                'keterangan',
            )->get();
        $hariPertama = Carbon::now()->startOfWeek();
        $hariTerakhir = Carbon::now()->endOfWeek();
        $pdf =  PDF::loadview('bukutamu.cetakBukuTamuMingguIni', [
            'data' => $data,
            'hariPertama' => $hariPertama,
            'hariTerakhir' => $hariTerakhir
        ])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-buku-tamu.pdf');
    }

    // FILTER BUKU TAMU
    function filter(Request $request)
    {
        $data = bukutamu::latest()
            ->select(
                'id',
                'thumbnail',
                'name',
                'usia',
                'jenis_kelamin',
                'pendidikan',
                'pekerjaan',
                'instansi',
                'perihal',
                'tujuan',
                'keterangan',
                'created_at'
            )
            ->paginate(20);
        return view('bukutamu.filter', [
            'data' => $data,
            'tanggal_mulai' => '',
            'sampai_tanggal' => '',
        ]);
    }

    function by_filter(Request $request)
    {
        $tanggal_mulai =  $request->tanggal_mulai;
        $sampai_tanggal =  $request->sampai_tanggal;
        $data = bukutamu::whereBetween('created_at', [
            $tanggal_mulai,
            $sampai_tanggal
        ])->latest()->paginate(20);
        $alert = '';
        return view('bukutamu.filter', [
            'data' => $data,
            'alert' => $alert,
            'tanggal_mulai' => $tanggal_mulai,
            'sampai_tanggal' => $sampai_tanggal,
        ]);
    }

    // CETAK BUKU TAMU BERDASARKAN PILIHAN 
    function pdf_pilihan(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'sampai_tanggal' => 'required|date',
            'name' => 'required|string',
            'nip' => 'required|numeric',
            'jabatan' => 'nullable|string'
        ]);

        $data = bukutamu::whereBetween('created_at',  [$request->tanggal_mulai, $request->sampai_tanggal])->latest()->select(
            'id',
            'thumbnail',
            'name',
            'usia',
            'jenis_kelamin',
            'pendidikan',
            'pekerjaan',
            'instansi',
            'perihal',
            'tujuan',
            'keterangan',
            'created_at',
            'tujuan',
            'keterangan',
        )->paginate(10);
        $tanggal_mulai = $request->tanggal_mulai;
        $sampai_tanggal = $request->sampai_tanggal;
        $name = $request->name;
        $nip = $request->nip;
        $jabatan = $request->jabatan;
        $pdf = PDF::loadview('bukutamu.cetakBukuTamuBerdasarkanPilihan', [
            'data' => $data,
            'tanggal_mulai' => $tanggal_mulai,
            'sampai_tanggal' => $sampai_tanggal,
            'name' => $name,
            'nip' => $nip,
            'jabatan' => $jabatan,
        ])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-buku-tamu.pdf');
    }


    // CETAK EXCEL BERDASARKAN HARI INI
    public function excel_hari()
    {
        return Excel::download(new cetakPengunjungBerdasakanHariIni, 'tamuHariIni.xlsx');
    }

    // CETAK EXCEL BERDASARKAN MINGGU INI
    public function excel_minggu()
    {
        return Excel::download(new cetakPengunjungBerdasakanMinggu, 'tamuMingguIni.xlsx');
    }

    // CETAK EXCEL BY FILTER
    public function excel_filter()
    {
        return Excel::download(new cetakPengunjungBerdasakanFilter, 'filter.xlsx');
    }
}
