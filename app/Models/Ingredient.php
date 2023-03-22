<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class,'supplier_ingredient');
    }
    public function meals()
    {
        return $this->belongsToMany(Model::class,'meal_ingredient');
    }

    public function supplierorders()
    {
        return $this->belongsToMany(SupplierOrder::class,'supplier_order_ingredient');
    }
}
