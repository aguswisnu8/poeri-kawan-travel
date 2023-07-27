<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, HasUlids, SoftDeletes;

    public const STATUS_AVAILABLE = "available";

    protected $fillable = [
        "name",
        "brand",
        "model",
        "seats",
        "year",
        "color",
        "type",
        "transmission",
        "fuel_type",
        // "status",
        "price_per_hour",
        "features",
        "remarks",
    ];
}
