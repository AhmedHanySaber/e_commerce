<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'status', 'amount', 'created_at'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
