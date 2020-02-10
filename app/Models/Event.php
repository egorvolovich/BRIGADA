<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    public $table = 'events';

    public function place(){
        return $this->hasOne(Place::class,'id','place_id');
    }

    public function concert(){
        return $this->hasOne(Concert::class,'id','concert_id');
    }

    public static function getFull($id){

        return Event::query()
            ->with(['place','concert'])
            ->where('id',$id)
            ->first();
    }
}
