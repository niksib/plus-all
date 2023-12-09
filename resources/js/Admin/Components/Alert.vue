<script setup>
import {computed} from "vue";
import {usePage} from "@inertiajs/vue3";

const message = computed(() => usePage().props.flash.message);
</script>

<template>
    <div v-if="message.text" class="flex p-4 mb-4 rounded-lg" :class="`text-${message.status}-800 bg-${message.status}-50`" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ message.text }}
        </div>
        <span class="text-green-800 text-red-800 text-yellow-800 bg-green-50 bg-yellow-50 bg-red-50"></span>
    </div>
</template>
