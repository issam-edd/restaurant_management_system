<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_table_id',
        'client_id',
        'table_id',
        'places_number',
        'state',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function tableorders()
    {
        return $this->hasMany(TableOrder::class);
    }
    public function clients()
    {
        return $this->belongsToMany(Client::class,'client_table')->withTimestamps();
    }
}
