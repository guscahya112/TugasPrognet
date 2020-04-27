<?php

namespace App\Http\Controllers;

use App\tb_prodi;
use App\tb_dosen;
use Illuminate\Http\Request;

class TbProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $all_prodi = tb_prodi::all();
        return view('Prodi.home', compact('all_prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Prodi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodi = new tb_prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect('/prodi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodi = tb_prodi::find($id);
        return view('Prodi.tampilkan',compact('prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = tb_prodi::find($id);
        return view('Prodi.editmk', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_prodi $tb_prodi, $id)
    {
        $prodi = tb_prodi::find($id);
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->save();
        return redirect('/prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_prodi  $tb_prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodi = tb_prodi::find($id);
        $prodi->delete();
        return redirect('/prodi');
    }
}
