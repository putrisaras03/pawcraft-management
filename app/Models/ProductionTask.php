<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductionTask extends Model
{
    protected $fillable = [
        'order_item_id',
        'start_date',
        'estimated_days',
        'deadline',
        'started_at',
        'completed_at',
        'production_status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'start_date' => 'date',
            'estimated_days' => 'integer',
            'deadline' => 'date',
            'started_at' => 'datetime',
            'completed_at' => 'datetime',
        ];
    }

    public function orderItem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}
