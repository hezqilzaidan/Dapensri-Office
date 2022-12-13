<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\UserMob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class UserMobileController extends Controller
{
    public function index()
    {
        return view('userMob');
    }

    public function getData(Request $request)
    {
        $data =  DB::table('users')->get();
        return DataTables::of($data)->make(true);
    }

    public function Register(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'badge' =>'required|unique:users',
            'password' =>'required|min:6'
        ]);
        $id = $request->id;
       $data =  UserMob::updateOrcreate(['id'=>$id],[
            'name' => $request->name,
            'badge' => $request->badge,
            'password' => md5($request->password)
        ]);

        return response()->json($data);
    }
    public function destroy(Request $request, $id)
    {
        $data = UserMob::where('id',$id)->first();
        $data->delete();
        return response()->json($data);
    }
    public function getItem($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        return response()->json($data);
    }

}
