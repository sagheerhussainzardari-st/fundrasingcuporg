<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Order;

class Payment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'order_id',
        'stripe_id',
        'amount',
        'balance_transaction',
        'currency',
        'description',
        'payment_id',
        'country',
        'exp_month',
        'exp_year',
        'fingerprint',
        'card_number',
        'receipt_url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    final public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class,'order_id','id');
    }

    final public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
