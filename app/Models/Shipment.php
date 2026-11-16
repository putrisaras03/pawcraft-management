<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{
    protected $fillable = [
        'order_id',
        'courier',
        'tracking_number',
        'shipping_date',
        'delivered_at',
        'shipping_status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'shipping_date' => 'date',
            'delivered_at' => 'date',
        ];
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
