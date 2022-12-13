<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Illuminate\Support\Facades\Auth;

class DatadiriController extends Controller
{

    public function index()
    {
        $data = Data::where('user_id', Auth::user()->id)->first();
        return view('datadiri', compact('data'));
    }

    public function store(Request $request)
    {
        // dd(Auth::user());

        $data = Data::where('user_id', Auth::user()->id);

        if ($data->first() == NULL) {
            Data::create([
                'name' => $request->name,
                'badge' => $request->badge,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'st_pernikahan' => $request->st_pernikahan,
                'tgl_cerai' => $request->tgl_cerai,
                'st_pensiun' => $request->st_pensiun,
                'alamat' => $request->alamat,
                'kel' => explode('-', $request->kel)[1],
                'kec' => explode('-', $request->kec)[1],
                'kab_kot' => explode('-', $request->kab_kot)[1],
                'provinsi' => explode('-', $request->provinsi)[1],
                'kode_pos' => $request->kode_pos,
                'no_hp' => $request->no_hp,
                'npwp' => $request->npwp,
                'no_rek' => $request->no_rek,
                'bank' => $request->bank,
                'atas_nama' => $request->atas_nama,
                'user_id' => Auth::user()->id,
            ]);
        } else {
            $data->update([
                'name' => $request->name,
                'badge' => $request->badge,
                'tmpt_lahir' => $request->tmpt_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'nik' => ($request->nik == '' ? '-' : $request->nik),
                'no_kk' => ($request->no_kk == '' ? '-' : $request->no_kk),
                'st_pernikahan' => ($request->st_pernikahan == '' ? '-' : $request->st_pernikahan),
                'tgl_cerai' => $request->tgl_cerai,
                'st_pensiun' => $request->st_pensiun,
                'alamat' => $request->alamat,
                'kel' => explode('-', $request->kel)[1],
                'kec' => explode('-', $request->kec)[1],
                'kab_kot' => explode('-', $request->kab_kot)[1],
                'provinsi' => explode('-', $request->provinsi)[1],
                'kode_pos' => $request->kode_pos,
                'no_hp' => $request->no_hp,
                'npwp' => $request->npwp,
                'no_rek' => $request->no_rek,
                'bank' => $request->bank,
                'atas_nama' => $request->atas_nama,
                'user_id' => Auth::user()->id,
            ]);
        }

        return back();
    }
}
