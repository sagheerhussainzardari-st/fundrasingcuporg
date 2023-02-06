<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;
use Stripe\Product;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'image',
        'heading',
        'description',
        'section_heading1',
        'section_left_text1',
        'section_left_text2',
        'section_right_text1',
        'section_right_text2',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    final public function funds(): hasMany
    {
        return $this->hasMany(Fund::class);
    }

    final public function orders(): hasManyThrough
    {
        return $this->hasManyThrough(Order::class,Fund::class);
    }
}
