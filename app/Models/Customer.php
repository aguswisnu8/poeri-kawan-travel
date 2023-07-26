<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        "user_id",
        "name",
        "mobile",
        "address",
        "remarks",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
