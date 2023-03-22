<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'address',
        'name',
        'table_id',
        'client_id'
    ];


    public function clientorders()
    {
        return $this->hasMany(ClientOrder::class);
    }
    public function tables()
    {
        return $this->belongsToMany(Table::class)->withTimestamps()->withPivot(['hour'],['reservation_date']);
    }
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
