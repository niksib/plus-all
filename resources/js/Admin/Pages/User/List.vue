<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from "@/Admin/Components/Pagination";
import { usePage } from '@inertiajs/vue3'
import {computed} from "vue";
import {useConfirmModal} from "@/Admin/Composables/confirmModal";

const user = computed(() => usePage().props.auth.user);
defineProps({
    users: Object
});
const { showConfirmModal } = useConfirmModal();
</script>

<template>
    <Head title="Users list" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Users list
            <Link :href="route('admin.users.create')"
                  class="text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center">
                Add new user
            </Link>
        </h1>

        <div
            class="flex flex-col flex-grow bg-white rounded mt-4"
        >
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item, itemIndex) in users.data"
                        :key="'table-item-' + itemIndex"
                        class="bg-white border-b"
                    >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ item.name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ item.email }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <Link :href="route('admin.users.edit', {user: item.id})"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Edit
                            </Link>
                            <Link v-if="user.id !== item.id"
                                  :href="route('admin.users.destroy', {user: item.id})"
                                  method="delete"
                                  as="button"
                                  :onBefore="showConfirmModal"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Delete
                            </Link>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <Pagination :links="users.links"/>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
