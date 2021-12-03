<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SettlementType;

class Settlement extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['id','name'];

    public function getSettlementName($id)
    {
        return Settlement::find($id)->name;
    }

    public function getSettlementTypeName($id)
    {
        return SettlementType::find(Settlement::find($id)->settlement_type_id)->type;
    }
}
