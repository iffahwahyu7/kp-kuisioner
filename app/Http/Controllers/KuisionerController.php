<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kuisioner;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function tryadd(){
        return view('tryadd');
    }

    public function admin()
    {
        $models = Kuisioner::oldest()->paginate(10);
        // $counts = DB::table('kuisioners')->count();
        $avg_u1 = DB::table('kuisioners')->avg('u1') / 9;
        $avg_u2 = DB::table('kuisioners')->avg('u2') / 9;
        $avg_u3 = DB::table('kuisioners')->avg('u3') / 9;
        $avg_u4 = DB::table('kuisioners')->avg('u4') / 9;
        $avg_u5 = DB::table('kuisioners')->avg('u5') / 9;
        $avg_u6 = DB::table('kuisioners')->avg('u6') / 9;
        $avg_u7 = DB::table('kuisioners')->avg('u7') / 9;
        $avg_u8 = DB::table('kuisioners')->avg('u8') / 9;
        $avg_u9 = DB::table('kuisioners')->avg('u9') / 9;
        $ikm = $avg_u1 + $avg_u2 + $avg_u3 + $avg_u4 + $avg_u5 
                + $avg_u6 + $avg_u7 + $avg_u8 + $avg_u9;

        if($ikm > 88.31){
            $mutu = 'A';
        }
        elseif($ikm <= 88.31 && $ikm > 76.61){
            $mutu = 'B';
        }
        elseif($ikm <= 76.61 && $ikm > 65){
            $mutu = 'C';
        }
        else{
            $mutu = 'D';
        }

        if($ikm > 88.31){
            $kinerja = 'Sangat Baik';
        }
        elseif($ikm <= 88.31 && $ikm > 76.61){
            $kinerja = 'Baik';
        }
        elseif($ikm <= 76.61 && $ikm > 65){
            $kinerja = 'Kurang Baik';
        }
        else{
            $kinerja = 'Tidak Baik';
        }

        $ikm = round($ikm,2);

        return view('admin', compact('models','ikm','mutu','kinerja'));
    }
    
    public function index()
    {
        // $kuisioner = Kuisioner::all();
        return view('kuisioner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuisioner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $model = new Kuisioner;
        // $model->nama = $request->nama;
        // $model->save();
        $umur = $request->umur;
        if($umur < 20){
            $k_umur = 1;
        }
        elseif($umur >= 20 && $umur < 30){
            $k_umur = 2;
        }
        elseif($umur >= 30 && $umur < 40){
            $k_umur = 3;
        }
        elseif($umur >= 40 && $umur < 50){
            $k_umur = 4;
        }
        else{
            $k_umur = 5;
        }
        // Kuisioner::create($request->all());

        Kuisioner::create([
            'nama_responden'        => $request->nama_responden,
            'no_hp'                 => $request->no_hp,
            'jenis_pelayanan'       => $request->jenis_pelayanan,
            'umur'                  => $request->umur,
            'kelompok_umur'         => $k_umur,
            'jenis_kelamin'         => $request->jenis_kelamin,
            'pendidikan_terakhir'   => $request->pendidikan_terakhir,
            'pekerjaan_utama'       => $request->pekerjaan_utama,
            'suku_bangsa'           => $request->suku_bangsa,
            'u1'                    => $request->u1,
            'u2'                    => $request->u2,
            'u3'                    => $request->u3,
            'u4'                    => $request->u4,
            'u5'                    => $request->u5,
            'u6'                    => $request->u6,
            'u7'                    => $request->u7,
            'u8'                    => $request->u8,
            'u9'                    => $request->u9,
            'saran'                 => $request->saran
        ]);

        return redirect('kuisioner')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function tambah(Request $request)
    {
        $model = Kuisioner::create([
            'nama'   => $request->nama
        ]);
        // return redirect()->route('kuisioner.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // dd($request->all());
        // // $model = new Kuisioner;
        // // $model->nama = $request->nama;
        // // $model->save();
        
        // Kuisioner::create($request->all());

        // return redirect('kuisioner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show()
    {
        // return view('kuisioner.submit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
