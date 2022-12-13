<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Imports\SptImport;
use Excel;
use Session;
use App\Spt;

class SptController extends Controller
{
    public function index(Request $request)
    {
        return view('spt');
    }
    public function getData(Request $request)
    {
        $data =  DB::table('tbl_spt')->get();
        return DataTables::of($data)->make(true);
    }

    public function import(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_spt',$nama_file);

		// import data
		Excel::import(new SptImport, public_path('/file_spt/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data SPT Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('spt');
	}

    public function destroy(Request $request, $id)
    {
        $data = Spt::where('id',$id)->first();
        $data->delete();
        return response()->json($data);
    }

    public function getItem($id)
    {
        $data = DB::table('tbl_spt')->where('id', $id)->first();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $post = Spt::updateOrcreate(['id'=>$id],
                    [
                        'kode_form' => $request->kode_pajak,
                        'tahun_pajak'=> $request->tahun_pajak,
                        'pembetulan'=>$request->pembetulan,
                        'no_urut'=>$request->no_urut,
                        'masa_perolehan_1'=>$request->masa_perolehan_1,
                        'masa_perolehan_2'=>$request->masa_perolehan_2,
                        'npwp'=>$request->npwp,
                        'nik'=>$request->nik,
                        'nama'=>$request->nama,
                        'alamat'=>$request->alamat,
                        'jk'=>$request->jk,
                        'jlh_tanggungan'=>$request->jlh_tanggungan,
                        'jabatan' =>$request->jabatan,
                        'flag_asing'=>$request->flag_asing,
                        'flag_status'=>$request->flag_status,
                        'kp'=>$request->kp,
                        'st_pindah'=>$request->st_pindah,
                        'npwppemungut' => $request->npwppemungut,
                        'namapemungut' =>$request->namapemungut,
                        'tgl_bukti' =>$request->tgl_bukti,
                        'sts_ptkp'=>$request->sts_ptkp,
                        'A1'=>$request->A1,
                        'A2'=>$request->A2,
                        'A3'=>$request->A3,
                        'A4'=>$request->A4,
                        'A5'=>$request->A5,
                        'A6'=>$request->A6,
                        'A7'=>$request->A7,
                        'A8'=>$request->A8,
                        'A9'=>$request->A9,
                        'A10'=>$request->A10,
                        'A11'=>$request->A11,
                        'A12'=>$request->A12,
                        'A13'=>$request->A13,
                        'A14'=>$request->A14,
                        'A15'=>$request->A15,
                        'A16'=>$request->A16,
                        'A17'=>$request->A17,
                        'A18'=>$request->A18,
                        'A19'=>$request->A19,
                        'A20'=>$request->A20,
                        'A21'=>$request->A21,
                        'A22'=>$request->A22,
                        'A23'=>$request->A23,
                        'A24'=>$request->A24,
                        'flag_A24' => $request->flag_A24,
                        'bln_24' =>$request->bln_24,
                        'flag_A2'=>$request->flag_A2,
                        'sts_kepegawaian'=>$request->sts_kepegawaian,
                        'sts_kawin'=>$request->sts_kawin,
                ]);
        return response()->json($post);
    }


}
