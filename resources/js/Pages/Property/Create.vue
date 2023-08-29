<script setup>

import InputError from "@/Components/InputError.vue";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import {Head, Link, useForm} from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Checkbox from "@/Components/Checkbox.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import TextInput from "@/Components/TextInput.vue";


const form = useForm({
name: '',
price: '',
description: '',

});

const submit = () => {
  console.log(form);
  form.post(route('properties.store'), {
    onFinish: () => form.reset(),
  });
};

</script>

<template>
  <Head title="Register" />

  <AuthenticationCard>
    <template #logo>
      <AuthenticationCardLogo />
    </template>

    <div>
      <h3 class="text-lg font-medium text-gray-900">Create Property</h3>
      <p class="mt-1 text-sm text-gray-600">
        Create a new property
      </p>
      <div v-if="$page.props.errors">
        <p v-for="error in $page.props.errors" :key="error" class="text-sm text-red-600">{{ error }}</p>
      </div>
    </div>
    <form @submit.prevent="submit" >
      <div>
        <InputLabel for="name" value="Name" />
        <TextInput
            id="name"
            v-model="form.name"
            type="text"
            class="mt-1 block w-full"
            required
            autofocus
            autocomplete="Name"
            placeholder=""
        />
        <InputError class="mt-2" :message="form.errors.name" />
      </div>
      <div>
        <InputLabel for="price" value="Price" />
        <TextInput
            id="price"
            v-model="form.price"
            type="text"
            class="mt-1 block w-full"
            required
            autofocus
            autocomplete="price"
            placeholder="Doe"
        />
        <InputError class="mt-2" :message="form.errors.price" />
      </div>
      <div>
        <InputLabel for="description" value="Description" />
        <TextInput
            id="description"
            v-model="form.description"
            type="text"
            class="mt-1 block w-full"
            required
            autofocus
            autocomplete="description"
            placeholder="janedoe4real"
        />
        <InputError class="mt-2" :message="form.errors.description" />
      </div>

      <div class="flex items-center justify-end mt-4">
        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
          Create
        </PrimaryButton>
      </div>
    </form>

  </AuthenticationCard>
</template>


<style scoped>

</style>
