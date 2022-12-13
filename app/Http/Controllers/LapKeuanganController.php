<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Storage;
use App\lapKeu;
use File;
use Illuminate\Support\Facades\Redirect;

class LapKeuanganController extends Controller
{
    public function index(Request $request)
    {


        return view('lapKeu');
    }
    public function getData()
    {
        $data = DB::select('select * from tbl_keuangan');
        return DataTables::of($data)->make(true);
    }

    public function uploadData(Request $request)
    {
        $this->validate($request,[
            'periode' => 'required',
            'ket' => 'required',
            'namaFile' => 'required',
        ]);

        $file = $request ->file('namaFile');
        $namaFile = time()."_".$file->getClientOriginalName();

		$tujuan_upload = 'dataFile';
		$file->move($tujuan_upload,$namaFile);

        // Storage::put("a.".$ext, file_get_contents($file->getRealPath()));

        $id = $request->id;
        $post = lapKeu::updateOrCreate(['id'=>$id],
        [
			'namaFile' => $namaFile,
            'ket' =>  $request->ket,
            'periode' =>  $request->periode,
		]);

        return Redirect()->back();
    }

    public function getItem($id)
    {
        $data = DB::table('tbl_keuangan')->where('id', $id)->first();
        return response()->json($data);
    }

    public function hapus($id)
    {
        $namaFile = lapKeu::where('id',$id)->first();
        File::delete('dataFile/'.$namaFile->file);

        // hapus data
        lapKeu::where('id',$id)->delete();

        return redirect()->back();
    }
}
