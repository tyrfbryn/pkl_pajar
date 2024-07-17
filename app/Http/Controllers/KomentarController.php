<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\User;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $komentar = Komentar::all();
         return view('admin.komentar.index', compact('komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.komentar.create', compact('users'));

        // Comment::create([
        //     'user_id' => auth()->id(),
        //     'comment' => $request->comment,
        // ]);

        // auth()->logout();

        // return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'nama_komentar' => 'required',
        //     'id_user' => 'required'
        // ]);

            $komentar = new Komentar;
            $komentar->komentar = $request->komentar;
            $komentar->id_user = $request->id_user;
            $komentar->save();
            return redirect()->route('komentar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function show(Komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komentar = Komentar::findOrFail($id);
        $users = User::all();
        return view('admin.komentar.edit', compact('komentar','users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'nama_komentar' => 'required',
        //     'id_user' => 'required',
        // ]);

            $komentar = Komentar::findOrFail($id);
            $komentar->komentar = $request->komentar;
            $komentar->id_user = $request->id_user;
            $komentar->save();
            return redirect()->route('komentar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komentar  $komentar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $komentar = Komentar::findOrFail($id);
        $komentar->delete();
        return redirect()->route('komentar.index');
    }

    
}
