<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettlementType extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id','type'];

    public function getSettlementTypeName($id)
    {
        return State::find($id)->type;
    }
}
