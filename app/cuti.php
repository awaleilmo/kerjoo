<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuti extends Model
{
    protected $fillable= [
        'user_id','keterangan','dari','sampai'
    ];
}
