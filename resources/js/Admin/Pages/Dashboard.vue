<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700">Dashboard</h1>

        <div
            class="flex flex-col flex-grow border-4 border-gray-400 border-dashed bg-white rounded mt-4"
        ></div>
    </BreezeAuthenticatedLayout>
</template>
