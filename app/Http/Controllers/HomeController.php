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

        $bukutamus = bukutamu::latest()->paginate(5);
        return view('bukutamu.index', compact('bukutamus'));
    }
}
