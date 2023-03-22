<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierBill extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function supplierorders()
    {
        return $this->belongsTo(SupplierOrder::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
