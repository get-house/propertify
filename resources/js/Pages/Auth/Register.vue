<script setup >
import {Head, Link, useForm} from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';


const form = useForm({
    first_name: '',
    last_name: '',
    username: '',
    email: '',
    address: '',
    phone: '',
    zone: '',
    city: '',
    state: '',
    password: '',
    password_confirmation: '',
    profile_type: '',
    terms: false,
});

const submit = () => {
    console.log(form.profile_type);
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />

    <AuthenticationCard>
        <template #logo>
            <AuthenticationCardLogo />
        </template>

        <form @submit.prevent="submit" >
            <div>
                <InputLabel for="first_name" value="First Name" />
                <TextInput
                    id="first_name"
                    v-model="form.first_name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="First name"
                    placeholder="Jane"
                />
                <InputError class="mt-2" :message="form.errors.first_name" />
            </div>
            <div>
                <InputLabel for="last_name" value="Last Name" />
                <TextInput
                    id="last_name"
                    v-model="form.last_name"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="last_name"
                    placeholder="Doe"
                />
                <InputError class="mt-2" :message="form.errors.last_name" />
            </div>
            <div>
                <InputLabel for="username" value="Username" />
                <TextInput
                    id="username"
                    v-model="form.username"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="janedoe4real"
                />
                <InputError class="mt-2" :message="form.errors.username" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autocomplete="username"
                    placeholder="jane@doe.com"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="address" value="Address" />
                <TextInput
                    id="address"
                    v-model="form.address"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="Address"
                    placeholder="14 Street, 12 Avenue, 12th Floor"
                />
                <InputError class="mt-2" :message="form.errors.address" />
            </div>

            <div>
                <InputLabel for="phone" value="Phone" />
                <TextInput
                    id="phone"
                    v-model="form.phone"
                    type="tel"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="Phone"
                    placeholder="08012345678"
                />
                <InputError class="mt-2" :message="form.errors.phone" />
            </div>

            <div>
                <InputLabel for="zone" value="Zone" />
                <TextInput
                    id="zone"
                    v-model="form.zone"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="Zone"
                    placeholder="Zone 1"
                />
                <InputError class="mt-2" :message="form.errors.zone" />
            </div>

            <div>
                <InputLabel for="city" value="City" />
                <TextInput
                    id="city"
                    v-model="form.city"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="City"
                    placeholder="Abuja"
                />
                <InputError class="mt-2" :message="form.errors.city" />
            </div>

            <div>
                <InputLabel for="state" value="State" />
                <TextInput
                    id="state"
                    v-model="form.state"
                    type="text"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="State"
                    placeholder="FCT"
                />
                <InputError class="mt-2" :message="form.errors.state" />
            </div>

            <div>
                <InputLabel for="profile_type" value="Account Type" />
                <select v-model="form.profile_type" id="profile_type" name="profile_type" required class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                    <option value="" disabled selected hidden>Select Account Type</option>
                    <option value="user">User</option>
                    <option value="landlord">Landlord</option>
                    <option value="agent">Agent</option>
                </select>
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="new-password"
                />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">
                <InputLabel for="terms">
                    <div class="flex items-center">
                        <Checkbox id="terms" v-model:checked="form.terms" name="terms" required />

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">Privacy Policy</a>
                        </div>
                    </div>
                    <InputError class="mt-2" :message="form.errors.terms" />
                </InputLabel>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
