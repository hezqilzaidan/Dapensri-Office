<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataExport;
use App\Data;

class DataExController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('list_ex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $data = DB::select('select * from tbl_data');
        return DataTables::of($data)->make(true);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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


    public function export_excel()
	{
		return Excel::download(new DataExport, 'data.xlsx');
	}

    public function store(Request $request)
    {
        $id = $request->id;
        $post = Data::updateOrcreate(['id'=>$id],
                    [
                    'badge' => $request->badge,
                    'name'=> $request->name,
                    'tmpt_lahir'=>$request->tmpt_lahir,
                    'tgl_lahir'=>$request->tgl_lahir,
                    'alamat'=>$request->alamat,
                    'kel'=>$request->kel,
                    'kec'=>$request->kec,
                    'kab_kot'=>$request->kab_kot,
                    'provinsi'=>$request->provinsi,
                    'kode_pos'=>$request->kode_pos,
                    'no_hp'=>$request->no_hp,
                    'user_id'=>$request->user_id,
                    'atas_nama' =>$request->atas_nama,
                    'no_rek'=>$request->no_rek,
                    'bank'=>$request->bank,
                    'npwp'=>$request->npwp,
                    'st_pensiun'=>$request->st_pensiun,
                    'st_pernikahan' => $request->st_pernikahan,
                    'tgl_mnkh' =>$request->tgl_mnkh,
                    'tgl_cerai' =>$request->tgl_cerai,
                    'mniggal'=>$request->mniggal,
                ]);
        return response()->json($post);
    }

    public function destroy(Request $request, $id)
    {
        $data = Data::where('id',$id)->first();
        $data->delete();
        return response()->json($data);
    }

    public function getItem($id)
    {
        $data = DB::table('tbl_data')->where('id', $id)->first();
        return response()->json($data);
    }
}
