<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from "@/Admin/Components/Pagination";
import {ref} from "vue";

const props = defineProps({
    items: Object,
    filters: Object
});

const proxyFilters = ref(props.filters);
</script>

<template>
    <Head title="Список банері" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Список банері
            <a :href="route('admin.banners.download')" class="text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center">Скачати</a>
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Назва
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Телефон
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Картинка
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item, itemIndex) in items.data"
                        :key="'table-item-' + itemIndex"
                        class="bg-white border-b"
                    >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ item.name }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ item.email }}
                        </th>
                        <td class="px-6 py-4 text-gray-500">
                            {{ item.phone }}
                        </td>
                        <td class="px-6 py-4 text-gray-500">
                            <img :src="'/storage/' + item.image.replace('/stickers', '')" width="200" height="200">
                        </td>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            <Link :href="route('admin.banners.destroy', {banner: item.id})"
                                  method="delete"
                                  as="button"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Видалити
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
