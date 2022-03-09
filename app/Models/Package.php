<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['title' , 'description' , 'image' , 'intro_video' , '  splitable' , 'onetime_payment_amount' , 'per_month_payment_amount'];

    public function profilequestion()
    {
        return $this->hasMany(ProfileQuestion::class);
    }
}
