<?php

namespace App\Http\Controllers;

use App\Data;
use App\Keluarga;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Illuminate\Support\Facades\Auth;

class DatakeluargaController extends Controller
{

    public function index()
    {
        $data = Keluarga::where('user_id', Auth::user()->id)->first();
        return view('datakeluarga', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Keluarga::where('user_id', Auth::user()->id);


        if ($data->first() == NULL) {
            Keluarga::create([
                'nama' => $request->nama,
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'ket' => $request->ket,
                'tgl_lahir' => $request->tgl_lahir,
                'user_id' => Auth::user()->id,
            ]);

            Data::where('user_id', Auth::user()->id)->update([
                'name' => $request->nama,
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'tgl_lahir' => $request->tgl_lahir,
                'user_id' => Auth::user()->id,
            ]);
        } else {
            $data->update([
                'nama' => $request->nama,
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'ket' => $request->ket,
                'tgl_lahir' => $request->tgl_lahir,
                'user_id' => Auth::user()->id,
            ]);

            Data::where('user_id', Auth::user()->id)->update([
                'name' => $request->nama,
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'tgl_lahir' => $request->tgl_lahir,
                'user_id' => Auth::user()->id,
            ]);
        }


        return back();
    }
}
