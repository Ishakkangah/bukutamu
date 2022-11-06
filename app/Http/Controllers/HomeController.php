<?php

namespace App\Http\Controllers;

use App\Models\bukutamu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bukutamus = bukutamu::latest()->select('id', 'thumbnail', 'name', 'instansi', 'perihal', 'created_at')->paginate(20);
        return view('bukutamu.index', compact('bukutamus'));
    }
}
