<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\tabunganmasuk;
use App\Models\tabungankeluar;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()              
    {
        return view('page.siswa.index', [
            'title' => 'All',
            'siswa' => siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.siswa.create', [
            'title' => 'Create New'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoresiswaRequest $request)
    // {
    //     //
    // }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required'
        ]);
        siswa::create($validate);
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('page.siswa.show', [
            'title' => 'Read',
            'siswa' => siswa::find($id),
            'tabunganmasuk' => tabunganmasuk::where('siswa_id', $id)->get(),
            'totaltabunganmasuk' => tabunganmasuk::where('siswa_id', $id)->sum('masuk'),
            'tabungankeluar' => tabungankeluar::where('siswa_id', $id)->get(),
            'totaltabungankeluar' => tabungankeluar::where('siswa_id', $id)->sum('keluar')
        ]);
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('page.siswa.edit', [
            'title' => 'Edit',
            'siswa' => siswa::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request;
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required'
        ]);
        siswa::where('id', $id)
        ->update($validate);

        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::destroy($id);

        return redirect('/siswa');
    }
}
