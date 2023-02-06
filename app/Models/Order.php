<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'user_id',
        'fund_id',
        'name',
        'email',
        'country',
        'zipcode',
        'description',
        'amount',
        'payment_status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const ORDER_STATUS = ['Paid', 'Unpaid'];

    final public function funds(): BelongsTo
    {
        return $this->belongsTo('App\Models\Fund','fund_id','id');
    }

    final public function users(): BelongsTo
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    /*public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->order_id = IdGenerator::generate(['table' => $this->table, 'length' => 6, 'prefix' => 'DON-']);
        });
    }*/


}
