<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Offer;

class Queue extends Model
{
    //
    public $fillable = ['name','type'];

    public function offer(){
        return $this->belongsToMany(Offer::class);
    }
}
