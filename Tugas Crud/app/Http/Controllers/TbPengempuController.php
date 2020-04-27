    <?php

    namespace App\Http\Controllers;
    use App\tb_pengempu;
    use App\tb_dosen;
    use App\tb_penawaranmk;
    use Illuminate\Http\Request;

    class TbPengempuController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $all_pengempu = tb_pengempu::get();
            return view('Pengempu.pengempu',compact('all_pengempu'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            $dosen = tb_dosen::all();
            $penawaranmk = tb_penawaranmk::all();
            return view('Pengempu.tambah',compact('dosen','penawaranmk'));
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
                $mk = new tb_pengempu();
                $mk->id_penawaran_mk = $request->id_penawaran_mk;
                $mk->id_dosen = $request->id_dosen;
                $mk->order = $request->order;
                $mk->save();
                return redirect('/pengempu');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\tb_pengempu  $tb_pengempu
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $tb_pengempu = tb_pengempu::find($id);
             return view('pengempu\tampilkan',compact('tb_pengempu'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\tb_pengempu  $tb_pengempu
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $tb_pengempu = tb_pengempu::find($id);
            return view('Pengempu.editmk',compact('tb_pengempu'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\tb_pengempu  $tb_pengempu
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, tb_pengempu $tb_pengempu,$id)

        {            
                    $pengempu = tb_pengempu::find($id);
                    $pengempu->id = $request->id;
                    $pengempu->id_penawaran_mk = $request->id_penawaran_mk;
                    $pengempu->id_dosen = $request->id_dosen;
                    $pengempu->order = $request->order;
                    $pengempu->save();
                    return redirect('pengempu');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\tb_pengempu  $tb_pengempu
         * @return \Illuminate\Http\Response
         */
        public function destroy(tb_pengempu $tb_pengempu,$id)
        {
                 $pengempu = tb_pengempu::find($id);
                 $pengempu->delete();
                return redirect('/pengempu');
        }
    }
