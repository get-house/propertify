<?php

namespace App\Domain\Property\Models;

use App\Models\Landlord;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'address',
        'city',
        'state',
        'size',
        'landlord_id',
    ];

    /**
     * Model Relationships
     *
     * @return RELATIONSHIPS
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class);
    }

    public function tenant(): BelongsToMany
    {
        return $this->belongsToMany(Tenant::class, 'tenant_property', 'property_id', 'tenant_id')
            ->withPivot('rent_start_date', 'rent_end_date', 'rent_amount', 'rent_frequency', 'rent_payment_method', 'rent_payment_day', 'rent_payment_reference', 'rent_payment_status', 'rent_payment_status_date', 'rent_payment_status_reason', 'rent_payment_status_description', 'rent_pay');
    }
}
