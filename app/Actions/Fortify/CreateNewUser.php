<?php

namespace App\Actions\Fortify;

use App\Data\UserData;
use App\Enums\RolesEnum;
use App\Models\Agent;
use App\Models\Landlord;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'unique:users', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'zone' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'address' => $input['address'],
            'phone' => $input['phone'],
            'zone' => $input['zone'],
            'city' => $input['city'],
            'state' => $input['state'],
            'password' => Hash::make($input['password']),
        ]);

        if ($input['profile_type']=== 'landlord') {
            $landlord = Landlord::create();
            $user->update(['profile_id' => $landlord->id, 'profile_type' => Landlord::class]);
            $user->profile()->associate($landlord);
            $user->assignRole(RolesEnum::LANDLORD->value);
        }elseif ($input['profile_type']=== 'agent') {
            $agent = Agent::create();
            $user->update(['profile_id' => $agent->id, 'profile_type' => Agent::class]);
            $user->profile()->associate($agent);
            $user->assignRole(RolesEnum::AGENT->value);
        }else{
            $user->assignRole(RolesEnum::USER->value);
        }

        return $user;

    }
}
