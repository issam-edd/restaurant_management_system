<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'quantity',
        'supplier_order_id',
        'supplier_id',
        'ingredient_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function supplierbills()
    {
        return $this->hasMany(SupplierBill::class);
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'supplier_order_ingredient')->withtimestamps()->withPivot('quantity','price');
    }
}
