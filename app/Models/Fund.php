<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fund extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'image',
        'description',
        'amount',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    final public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    final public function users(): BelongsTo
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    final public function orders(): hasMany
    {
        return $this->hasMany(Order::class);
    }

    final public function scopeNearYou(Builder $query): Builder
    {
        return $this->inRandomOrder()->take(6);
    }
}
