<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Queue;

class Offer extends Model
{
    //
    public $fillable = ['name','email'];

    public function queue()
    {
        return $this->belongsToMany(Queue::class);
    }
}
