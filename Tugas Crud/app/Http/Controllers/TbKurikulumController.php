<?php

namespace App\Http\Controllers;
use App\tb_prodi;
use App\tb_kurikulum;
use Illuminate\Http\Request;

class TbKurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_kurikulum = tb_kurikulum::with('tb_prodi')->get();
        return view('Kurikulum.mahasiswa', compact('all_kurikulum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = tb_prodi::all();
        return view('Kurikulum.tambah',compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kurikulum = new tb_kurikulum;
        $kurikulum->nama_kurikulum = $request->nama_kurikulum;
        $kurikulum->id_prodi=$request->id_prodi;
        $kurikulum->tahun = $request->tahun;
        $kurikulum->save();
        return redirect('/kurikulum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function show(tb_kurikulum $kurikulum)
    {

        $prodi = tb_prodi::all();
        return view('Kurikulum.tampilkan',compact('kurikulum','prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tb_kurikulum = tb_kurikulum::find($id);
        $tb_prodi = tb_prodi::all();
        return view('Kurikulum.editmk', compact('tb_kurikulum', 'tb_prodi'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kurikulum = tb_kurikulum::find($id);
        $kurikulum->id_prodi = $request->id_prodi;
        $kurikulum->nama_kurikulum = $request->nama_kurikulum;
        $kurikulum->tahun = $request->tahun;
        $kurikulum->save();
        return redirect('/kurikulum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kurikulum  $kurikulum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kurikulum = tb_kurikulum::find($id);
        $kurikulum->delete();
        return redirect('/kurikulum');
    }
}
