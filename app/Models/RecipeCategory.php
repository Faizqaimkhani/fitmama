<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function recipes()
    {
        return $this->hasMany(FoodRecipe::class);
    }
}
