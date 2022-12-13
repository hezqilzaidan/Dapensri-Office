<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Keluarga;
use Illuminate\Http\Request;
use DB;
use DataTables;

class keluargaController extends Controller
{
    public function index()
    {
        return view('keluarga');
    }
    public function getData()
    {
        $data = DB::select('select * from tbl_keluarga');
        return DataTables::of($data)->make(true);
    }
    public function destroy(Request $request, $id)
    {
        $data = Keluarga::where('id',$id)->first();
        $data->delete();
        return response()->json($data);
    }
    public function getItem($id)
    {
        $data = Keluarga::where('id', $id)->first();
        return response()->json($data);
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'no_kk' =>'required',
            'nik' =>'required',
            'tgl_lahir' =>'required',
            'ket' =>'required',
            'badge' =>'required',
        ]);
        $id = $request->id;
       $data =  Keluarga::updateOrcreate(['id'=>$id],[
            'nama' => $request->nama,
            'no_kk' => $request->no_kk,
            'nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'ket' => $request->ket,
            'badge' => $request->badge,

        ]);
        

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $post = Keluarga::updateOrcreate(['id'=>$id],
                    [
                        'nama'=>$request->nama,
                        'tmpt_lahir'=>$request->tmpt_lahir,
                        'no_kk'=>$request->no_kk,
                        'nik'=>$request->nik,
                        'ket'=>$request->ket,
                        'tgl_lahir'=>$request->tgl_lahir,
                        'user_id'=>$request->user_id,
                        'badge' => $request->badge,

                ]);
        return response()->json($post);
    }

}
