<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Agent extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => \App\Enums\AgentStatusEnum::class,
        'is_paused' => 'boolean',
    ];

    protected $fillable = [
        'user_id',
        'status',
        'is_paused',
    ];

    /**
     * Model Relationships
     *
     * @return RELATIONSHIPS
     */

    // relationship with user
    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'profile');
    }
}
