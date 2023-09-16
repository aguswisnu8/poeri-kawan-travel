<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    protected $fillable = [
        "invoice_id",
        "date",
        "amount",
        "payment_method",
        "remarks",
    ];

    protected $casts = [
        "date" => "date:Y-m-d",
        "amount" => "float",
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
