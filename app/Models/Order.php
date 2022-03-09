<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
