<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $fillable = [
        "rental_id",
        "date",
        "due_date",

        "subtotal_car",
        "subtotal_driver",

        "tax",
        "total",

        "remarks",
    ];

    protected $casts = [
        "date" => "date:Y-m-d",
        "due_date" => "date:Y-m-d",
        "subtotal_car" => "float",
        "subtotal_driver" => "float",
        "tax" => "float",
        "total" => "float",
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
