<?php

namespace App\Http\Controllers;

use App\Models\bukutamu;
use App\Http\Requests\UpdatebukutamuRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class BukutamuController extends Controller
{
    // INDEX
    public function index()
    {
        $bukutamus = bukutamu::latest()->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')->paginate(20);
        return view('bukutamu.index', compact('bukutamus'));
    }

    // CARI TAMU
    public function cari(Request $request)
    {
        $cariTamu =  $request->cari;
        $bukutamus = bukutamu::latest()
            ->where('name', 'like', "%" . $cariTamu . "%")
            ->orWhere('instansi', 'like', '%' . $cariTamu . '%')
            ->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')
            ->paginate(20);

        return view('bukutamu.index', compact('bukutamus'));
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
            'keterangan' => 'required|present'
        ]);

        $attr["name"] = strtoupper($request->name);
        $attr["instansi"] = strtoupper($request->instansi);
        $attr["perihal"] = strtoupper($request->perihal);
        $attr["tujuan"] = strtoupper($request->tujuan);
        $attr["keterangan"] = strtoupper($request->keterangan);
        $attr['thumbnail'] = $request->thumbnail;

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
        Alert::success('OK. ', 'Data berhasil disimpan!');

        return redirect('/')->with('success', 'Data berhasil di simpan');
    }

    // DETAIL DATA TAMU
    public function detailsTamu(bukutamu $bukutamu)
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
            'keterangan' => 'required|present'
        ]);

        $attr["name"] = $request->name;
        $attr["instansi"] = $request->instansi;
        $attr["perihal"] = $request->perihal;
        $attr["tujuan"] = $request->tujuan;
        $attr["keterangan"] = $request->keterangan;

        $bukutamu->update($attr);
        Alert::success('OK. ', 'Data berhasil di ubah.');

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
    function totalTamuHariIni(Request $request)
    {
        $data = bukutamu::select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')->whereDate('created_at', Carbon::now())->latest()->paginate(120);
        return view('bukutamu.totalTamuHariIni', compact('data'));
    }

    // CETAK BUKU TAMU HARI INI PDF
    function cetakDaftarTamuHariIni_PDF()
    {
        $data = bukutamu::select('id',  'name', 'instansi', 'perihal', 'tujuan', 'keterangan', 'created_at')->whereDate('created_at', Carbon::now())->latest()->get();
        $pdf =  PDF::loadview('bukutamu.cetakTamuHariIni', ['data' => $data]);
        return $pdf->download('laporan-buku-tamu-pdf');
    }



    // TOTAL TAMU MINGGU INI
    function totalTamuBulanIni(Request $request)
    {
        $data = bukutamu::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->latest()->select('id', 'name', 'thumbnail', 'instansi', 'perihal', 'created_at')->paginate(120);
        $hariPertama = Carbon::now()->startOfWeek();
        $hariTerakhir = Carbon::now()->endOfWeek();
        return view('bukutamu.totalTamuBulanIni', compact('data', 'hariPertama', 'hariTerakhir'));
    }


    // CETAK BUKU TAMU MINGGU INI PDF
    function cetakBukuTamuMingguIni()
    {
        $data = bukutamu::whereBetween(
            'created_at',
            [
                Carbon::now()->startOfWeek(),
                Carbon::now()->endOfWeek()
            ]
        )
            ->latest()->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')->get();
        $pdf =  PDF::loadview('bukutamu.cetakBukuTamuMingguIni', ['data' => $data]);

        return $pdf->download('laporan-buku-tamu pdf');
    }


    // CETAK BUKU TAMU BERDASARKAN PILIHAN 
    function cetakBukuTamuBerdasarkanPilihan(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'sampai_tanggal' => 'required|date'
        ]);

        $data = bukutamu::whereBetween('created_at', [$request->tanggal_mulai, $request->sampai_tanggal])->latest()->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')->paginate(20);
        $tanggal_mulai = $request->tanggal_mulai;
        $sampai_tanggal = $request->sampai_tanggal;
        $pdf = PDF::loadview('bukutamu.cetakBukuTamuBerdasarkanPilihan', compact('data'));

        return $pdf->download('tamuBerdasarkanPilihan');
    }
}
