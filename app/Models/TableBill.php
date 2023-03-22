<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableBill extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tableorders()
    {
        return $this->belongsTo(TableOrder::class);
    }
}
