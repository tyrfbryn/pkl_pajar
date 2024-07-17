<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Komentar;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index', compact('artikel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $kategori = Kategori::all();
        $komentar = Komentar::all();
        return view('admin.artikel.create', compact('users','kategori','komentar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->tgl_publikasi = $request->tgl_publikasi;
        $artikel->id_user = $request->id_user;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->id_komentar = $request->id_komentar;


        if ($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/artikel', $name);
            $artikel->cover = $name;
        }

        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $users = User::all();
        $kategori = Kategori::all();
        $komentar = Komentar::all();
        return view('admin.artikel.edit', compact('artikel','users','kategori','komentar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->tgl_publikasi = $request->tgl_publikasi;
        $artikel->id_user = $request->id_user;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->id_komentar = $request->id_komentar;

        if ($request->hasFile('cover')){
            $artikel->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/artikel', $name);
            $artikel->cover = $name;
        }
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
