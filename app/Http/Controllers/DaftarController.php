<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaftarRequest;
use App\Daftar;
use PDF;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daftar.index', [
            'daftar' => Daftar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create', [
            'daftar' => Daftar::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaftarRequest $request)
    {
        Daftar::create($request->all());

        session()->flash('simpan', 'Selamat, Anda sudah terdaftar di SMK Merdeka Belajar');
        return redirect('/daftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar = Daftar::find($id);
        return view('daftar.edit', compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DaftarRequest $request, $id)
    {
        $daftar = Daftar::find($id);
        $daftar->update($request->all());

        session()->flash('update', 'Data berhasil diubah!');

        return redirect('/daftar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = Daftar::find($id);
        $daftar->delete($daftar);

        session()->flash('hapus', 'Data sudah dihapus');
        return redirect('/daftar');
    }
    public function print($id)
    {
        $daftar = Daftar::findorFail($id);
        $pdf = PDF::loadview('daftar.print', compact('daftar'))->setPaper('A4','portrait');
        return $pdf->stream();
    }
}
