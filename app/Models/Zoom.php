<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoom extends Model
{
    /** @use HasFactory<\Database\Factories\ZoomFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'api_key',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
