<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/vue3';
import Pagination from "@/Admin/Components/Pagination";
import {ref} from "vue";
import CustomInput from "@/Admin/Components/Form/CustomInput.vue";

const props = defineProps({
    items: Object,
    filters: Object
});

const proxyFilters = ref(props.filters);
</script>

<template>
    <Head title="Додаткові налаштування" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Додаткові налаштування
            <Link :href="route('admin.settings.create')"
                  class="text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center">
                Створити
            </Link>
        </h1>

        <div class="flex flex-col bg-white rounded mt-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                <p class="font-bold text-2xl mb-2 text-gray-700">Філтри</p>
                <form class="flex flex-col w-full" :action="route('admin.settings.index', {filters: filters.value})">
                    <div class="flex">
                        <CustomInput class="mr-3 w-1/4"
                                     name="key"
                                     type="text"
                                     label="Ключ"
                                     v-model="proxyFilters.key"
                        />
                    </div>
                    <div class="mt-5">
                        <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600" value="Filter">
                    </div>
                </form>
            </div>
        </div>

        <div
            class="flex flex-col flex-grow bg-white rounded mt-4"
        >
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Ключ
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Значення
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Тип
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Дії</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item, itemIndex) in items.data"
                        :key="'table-item-' + itemIndex"
                        class="bg-white border-b"
                    >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ item.key }}
                        </th>
                        <td class="px-6 py-4 text-gray-500">
                            {{ item.val }}
                        </td>
                        <td class="px-6 py-4 text-gray-500">
                            {{ item.type }}
                        </td>
                        <td class="px-6 py-4 text-right whitespace-nowrap">
                            <Link :href="route('admin.settings.edit', {setting: item.id})"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Редагувати
                            </Link>
                            <Link :href="route('admin.settings.destroy', {setting: item.id})"
                                  method="delete"
                                  as="button"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Створити
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
