<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientOrder extends Model
{
    use HasFactory;

   /* protected $guarded = [];*/

    protected $fillable = [
        'quantity',
        'price',
        'client_order_id',
        'client_id',
        'meal_id',
        'user_id',
        'employee_id',
    ];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function clientbills()
    {
        return $this->hasMany(ClientBill::class);
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class,'client_order_meal')->withTimestamps()->withPivot(['quantity','price']);
    }
}