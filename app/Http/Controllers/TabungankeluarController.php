<?php

namespace App\Http\Controllers;

use App\Models\tabungankeluar;
use App\Models\siswa;

use Illuminate\Http\Request;

class TabungankeluarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.tabungankeluar.index', [
            'title' => 'All',
            'tabungankeluar' => tabungankeluar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.tabungankeluar.create', [
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
    // public function store(StoretabungankeluarRequest $request)
    // {
    //     //
    // }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'siswa_id' => 'required',
            'keluar' => 'required',
            'status' => 'required'
        ]);
        tabungankeluar::create($validate);
        return redirect('/tabungankeluar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('page.tabungankeluar.show', [
            'title' => 'Read',
            'tabungankeluar' => tabungankeluar::find($id)
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
        return view('page.tabungankeluar.edit', [
            'title' => 'Edit',
            'tabungankeluar' => tabungankeluar::find($id)
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
            'keluar' => 'required',
            'status' => 'required'
        ]);
        tabungankeluar::where('id', $id)
        ->update($validate);

        return redirect('/tabungankeluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tabungankeluar::destroy($id);

        return redirect('/tabungankeluar');
    }
}