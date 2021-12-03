<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['type'];

    public function getZoneType($id)
    {
        return Zone::find($id)->type;
    }
}
