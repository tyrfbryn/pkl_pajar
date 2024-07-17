<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;

class FrontController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->limit(1)->get();
        $list = Artikel::latest()->limit(5)->get();
        $kategori = Kategori::all();
        return view('index', compact('artikel', 'kategori', 'list'));
    }

    public function detail($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        return view('detail', compact('artikel', 'kategori'));
    }

    public function komentar()
    {

    }
}
