<?php

namespace App\Http\Controllers;

use App\Keluarga;
use App\Verifikasi;
use DataTables;
use Illuminate\Http\Request;

class verifikasiController extends Controller
{
    public function index()
    {
        return view('verifikasi');
    }
    public function getData()
    {
        $data = Verifikasi::get();
        return DataTables::of($data)->make(true);
    }
    public function destroy(Request $request, $id)
    {
        $data = Verifikasi::where('id',$id)->first();
        $data->delete();
        return response()->json($data);
    }
    public function getItem($id)
    {
        $data = Verifikasi::where('id', $id)->first();
        return response()->json($data);
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'badge' => 'required',
        ]);
        $badge = $request->badge;
        $data =  Verifikasi::updateOrcreate(['badge'=>$badge],[
            'status' => $request->status,

        ]);

        return response()->json($data);
    }
}
