<?php

namespace App\Models;

use App\Domain\Property\Models\Property;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tenant extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => \App\Enums\TenantStatusEnum::class,
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

	public function rentedProperties(): BelongsToMany
	{
		return $this->belongsToMany(Property::class, 'tenant_property', 'tenant_id', 'property_id')
			->withPivot('rent_start_date', 'rent_end_date', 'rent_amount', 'rent_frequency', 'rent_payment_method', 'rent_payment_day', 'rent_payment_reference', 'rent_payment_status', 'rent_payment_status_date', 'rent_payment_status_reason', 'rent_payment_status_description', 'rent_pay');
	}

}
