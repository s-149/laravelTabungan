<?php

namespace App\Http\Controllers;

use App\Models\tabunganmasuk;
use App\Models\siswa;

use Illuminate\Http\Request;
class TabunganmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.tabunganmasuk.index', [
            'title' => 'All',
            'tabunganmasuk' => tabunganmasuk::all(),
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
        return view('page.tabunganmasuk.create', [
            'title' => 'Create New',
            'siswa' => siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoretabunganmasukRequest $request)
    // {
    //     //
    // }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'siswa_id' => 'required',
            'masuk' => 'required',
            'status' => 'required'
        ]);
        tabunganmasuk::create($validate);
        return redirect('/tabunganmasuk'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('page.tabunganmasuk.show', [
            'title' => 'Read',
            'tabunganmasuk' => tabunganmasuk::find($id)
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
        return view('page.tabunganmasuk.edit', [
            'title' => 'Edit',
            'tabunganmasuk' => tabunganmasuk::find($id)
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
            'siswa_id' => 'required',
            'masuk' => 'required',
            'status' => 'required'
        ]);
        tabunganmasuk::where('id', $id)
        ->update($validate);

        return redirect('/tabunganmasuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tabunganmasuk::destroy($id);

        return redirect('/tabunganmasuk');
    }
}