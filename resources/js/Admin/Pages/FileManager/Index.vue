<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from "@/Admin/Components/Pagination";
import {useConfirmModal} from "@/Admin/Composables/confirmModal";

defineProps({
    items: Object
});
const { showConfirmModal } = useConfirmModal();
</script>

<template>
    <Head title="Файловий менеджер" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Файловий менеджер
        </h1>

        <div>
            <iframe src="/elfinder" style="width: 100%; height: 800px;"></iframe>
        </div>
    </BreezeAuthenticatedLayout>
</template>
