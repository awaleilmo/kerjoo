<?php

namespace App\Http\Controllers;

use App\cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CutiController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'dari' => 'required',
            'sampai' => 'required'
        ]);

        $cuti = new cuti;
        $cuti->user_id = $request->user_id;
        $cuti->keterangan = $request->keterangan;
        $cuti->dari = $request->dari;
        $cuti->sampai = $request->sampai;
        $cuti->save();

        return $cuti->toJson();
    }

    public function get() {
        $cuti = cuti::query()->where('user_id','=',Auth::id())->get();

        return $cuti->toJson();
    }

    public function find($id) {
        $cuti = cuti::query()->where('user_id','=',Auth::id())->where('id','=',$id)->get();

        return $cuti->toJson();
    }
}
