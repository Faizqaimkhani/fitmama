<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileQuestion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['package_id' , 'question' , 'type' , 'options' , 'sort_num'];

    protected $casts = [
        'options' => 'array',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function answers()
    {
        return $this->hasMany(ProfileAnswer::class);
    }

}
