<script setup>
import {computed, ref, watch} from "vue";
import {usePage} from "@inertiajs/vue3";

const visible = ref(false);
const page = usePage();
const flash = computed(() => page.props.flash);

//create a watch for flash
watch(flash, (value) => {
    if (value.message) {
        visible.value = true;
        setTimeout(() => {
            visible.value = false;
        }, 3000);
    }
});
</script>

<template>
  <div
      v-if="flash && visible"
      class="bg-slate-100 text-rose-600 p-4 shadow-lg rounded-lg"
  >
    {{ flash.message }}
  </div>
</template>

<style scoped>

</style>
