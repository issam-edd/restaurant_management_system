<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientBill extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function clientorders()
    {
        return $this->belongsTo(ClientOrder::class);
    }
}
