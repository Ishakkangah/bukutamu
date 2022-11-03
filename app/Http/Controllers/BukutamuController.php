<?php

namespace App\Http\Controllers;

use App\Models\bukutamu;
use App\Http\Requests\UpdatebukutamuRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
use PhpParser\Node\Stmt\TryCatch;

class BukutamuController extends Controller
{
    // INDEX
    public function index()
    {
        $bukutamus = bukutamu::latest()->select(['name', 'instansi', 'perihal', 'created_at'])->paginate(5);
        return view('bukutamu.index', compact('bukutamus'));
    }

    // CARI TAMU
    public function cari(Request $request)
    {
        $cariTamu =  $request->cari;
        $bukutamus = bukutamu::latest()
            ->where('name', 'like', "%" . $cariTamu . "%")->paginate(5);

        return view('bukutamu.index', compact('bukutamus'));
    }

    // CREATE TAMU
    public function create()
    {
        return view('bukutamu.create');
    }

    // KIRIM KE DATABASE
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'instansi' => 'required|max:200',
            'perihal' => 'required|max:200',
            'tujuan' => 'required|max:200',
            'keterangan' => 'required|present'
        ]);
        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store('images/bukutamu') : null; // 2
        $attr['thumbnail'] = $thumbnail;
        $attr["name"] = strtoupper($request->name);
        $attr["instansi"] = strtoupper($request->instansi);
        $attr["perihal"] = strtoupper($request->perihal);
        $attr["tujuan"] = strtoupper($request->tujuan);
        $attr["keterangan"] = strtoupper($request->keterangan);

        bukutamu::create($attr);
        return redirect('/')->with('success', 'Data berhasil di tambahkan');
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
        $datatamus = bukutamu::where('id', $bukutamu->id)->first();
        return view('bukutamu.edit', compact('datatamus'));
    }

    // UPDATE DATA TAMU
    public function update(Request $request, bukutamu $bukutamu)
    {
        $request->validate([
            'name' => 'required|max:200',
            'thumbnail' => 'image|mimes:jpeg,jpg,png|max:2048',
            'instansi' => 'required|max:200',
            'perihal' => 'required|max:200',
            'tujuan' => 'required|max:200',
            'keterangan' => 'required|present'
        ]);

        if ($request->file('thumbnail')) {
            Storage::delete($bukutamu->thumbnail);
            $attr['thumbnail'] = $request->file('thumbnail')->store('images/bukutamu');
        } else {
            $attr["thumbnail"] = $bukutamu->thumbnail;
        }

        $attr["name"] = $request->name;
        $attr["instansi"] = $request->instansi;
        $attr["perihal"] = $request->perihal;
        $attr["tujuan"] = $request->tujuan;
        $attr["keterangan"] = $request->keterangan;

        $bukutamu->update($attr);
        return back()->with('success', 'Tamu berhasil di ubah!');
    }

    // DESTROY
    public function destroy(bukutamu $bukutamu)
    {
        Storage::delete($bukutamu->thumbnail);
        $bukutamu->delete();
        session()->flash('success', 'Data tamu atas nama ' . $bukutamu->name . ' berhasil dihapus !');
        return redirect()->to('/');
    }


    // TOTAL TAMU HARI INI
    function totalTamuHariIni(Request $request)
    {
        $data = bukutamu::select('id', 'name', 'instansi', 'perihal', 'tujuan', 'keterangan', 'created_at')->whereDate('created_at', Carbon::now())->paginate(20);
        return view('bukutamu.totalTamuHariIni', compact('data'));
    }

    // CETAK BUKU TAMU HARI INI PDF
    function cetakDaftarTamuHariIni_PDF()
    {
        $data = bukutamu::select('id', 'name', 'instansi', 'perihal', 'tujuan', 'keterangan', 'created_at')->whereDate('created_at', Carbon::now())->get();
        $pdf =  PDF::loadview('bukutamu.cetakTamuHariIni', ['data' => $data]);
        return $pdf->download('laporan-buku-tamu-pdf');
    }



    // TOTAL TAMU BULAN INI
    function totalTamuBulanIni(Request $request)
    {
        $data = bukutamu::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $hariPertama = Carbon::now()->startOfWeek();
        $hariTerakhir = Carbon::now()->endOfWeek();
        return view('bukutamu.totalTamuBulanIni', compact('data', 'hariPertama', 'hariTerakhir'));
    }


    // CETAK BUKU TAMU BULAN INI PDF
    function cetakBukuTamuMingguIni()
    {
        $data = bukutamu::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
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

        $data = bukutamu::whereBetween('created_at', [$request->tanggal_mulai, $request->sampai_tanggal])->paginate(20);
        $tanggal_mulai = $request->tanggal_mulai;
        $sampai_tanggal = $request->sampai_tanggal;
        $pdf = PDF::loadview('bukutamu.cetakBukuTamuBerdasarkanPilihan', compact('data'));

        return $pdf->download('tamuBerdasarkanPilihan');
    }
}