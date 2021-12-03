<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $fillable = ['code','city_id','municipality_id','settlement_id','state_id','zone_id'];

    public function getZipcodeId($zipcode)
    {
        return Zipcode::find($zipcode)->id;
    }

}
