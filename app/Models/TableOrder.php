<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOrder extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function tables()
    {
        return $this->belongsTo(Table::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
    public function tablebills()
    {
        return $this->hasMany(TableBill::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'table_order_meal')->withtimestamps()->withPivot('quantity','price');
    }
}
