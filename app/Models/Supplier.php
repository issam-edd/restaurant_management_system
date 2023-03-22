<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function supplierorders()
    {
        //this employee having relation with many users
        return $this->hasMany(SupplierOrder::class);
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class,'supplier_ingredient');
    }
}
