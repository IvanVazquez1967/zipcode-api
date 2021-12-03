<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id','name'];

    public function getStateName($id)
   {
       return State::find($id)->name;
   }
}
