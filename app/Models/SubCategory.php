<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category ()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function product (){
        return $this->hasMany(Product::class, 'sub_cat_id', 'id');
    }
}

// SubCategory <=> Category

// SubCategory belongsTo Category


// belongsTo => Under
// hasMany
