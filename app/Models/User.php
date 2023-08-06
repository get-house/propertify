<?php

namespace App\Models;

use App\Enums\RolesEnum;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'phone_number',
        'address',
        'city',
        'state',
        'profile_type',
        'profile_id',
        'zip_code',
        'country',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public  function getFullNameAttribute()
    {
        return  $this->first_name . ' ' . $this->last_name;
    }

    public function isAdmin(): bool
    {
        return $this->hasRole(RolesEnum::ADMIN->value);
    }

    public function isLandlord(): bool
    {
        return $this->hasRole(RolesEnum::LANDLORD->value);
    }

    public function isTenant(): bool
    {
        return $this->hasRole(RolesEnum::TENANT->value);
    }

    public function isUser(): bool
    {
        return $this->hasRole(RolesEnum::USER->value);
    }

    /**
     * Model Relationships
     *
     * @return RELATIONSHIPS
     */

    public function profile() : MorphTo
    {
        return $this->morphTo();
    }

}
