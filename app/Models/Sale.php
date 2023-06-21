<?php

namespace App\Models;

use App\Enums\status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'client_id',
        'status',
        'total_amount',
        'sold_at'
    ];

    protected $casts = [
        'status' => status::class
    ];


    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function seller(): BelongsTo
    {
        return $this->belongsTo(Seller::class);
    }

}
