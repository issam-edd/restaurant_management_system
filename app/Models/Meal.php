<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'name',
        'description',
        'price',
        'category_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function category()
    {
        //this user having relation with employee
        return $this->belongsTo(Category::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class,'meal_ingredient')->withtimestamps()->withPivot('quantity');
    }

    public function tableorders()
    {
        return $this->belongsToMany(TableOrder::class, 'table_order_meal')->withtimestamps()->withPivot('quantity','price');
    }

    public function clientorders()
    {
        return $this->belongsToMany(ClientOrder::class);
    }

    public function photoUrl() {
        return Storage::disk('local')->url($this->photo);
    }
}
