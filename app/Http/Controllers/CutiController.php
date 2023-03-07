<?php

namespace App\Http\Controllers;

use App\cuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CutiController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dari' => 'required|',
            'sampai' => 'required|'
        ]);

        if ($validator->fails()) {
            return $validator->getMessageBag();
        }


        $cuti = new cuti;
        $cuti->user_id = Auth::id();
        $cuti->keterangan = $request->keterangan;
        $cuti->dari = $request->dari;
        $cuti->sampai = $request->sampai;
        $cuti->save();

        return $cuti;
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
