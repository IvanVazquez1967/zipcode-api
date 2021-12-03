<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id','name'];

    public function getMunicipalityName($id)
    {
        return Municipality::find($id)->name;
    }
}
