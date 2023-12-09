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
    <Head title="Menus list" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Menus list
            <Link :href="route('admin.menu.create')"
                  class="text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center">
                Create new menu
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
                            Group
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item, itemIndex) in items.data"
                        :key="'table-item-' + itemIndex"
                        class="bg-white border-b"
                    >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ item.group }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ item.lang.title }}
                        </th>
                        <td class="px-6 py-4 text-right">
                            <Link :href="route('admin.menu.edit', {menu: item.id})"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Edit
                            </Link>
                            <Link :href="route('admin.menu.destroy', {menu: item.id})"
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

                <Pagination :links="items.links"/>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
