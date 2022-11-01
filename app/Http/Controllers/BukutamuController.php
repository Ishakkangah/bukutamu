<?php

namespace App\Http\Controllers;

use App\Models\bukutamu;
use App\Http\Requests\UpdatebukutamuRequest;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    // INDEX
    public function index()
    {
        $bukutamus = bukutamu::latest()->paginate(5);
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

        bukutamu::create($attr);
        return redirect('/')->with('success', 'Tamu berhasil di tambahkan');
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
        return redirect('/')->with('success', 'Tamu berhasil di ubah!');
    }

    public function destroy(bukutamu $bukutamu)
    {
        $bukutamu->delete();
        session()->flash('success', 'Data tamu atas nama' . $bukutamu->name . 'berhasil dihapus !');
        return redirect()->to('/');
    }
}
