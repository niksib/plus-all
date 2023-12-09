<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head, Link, router} from '@inertiajs/vue3';
import Pagination from "@/Admin/Components/Pagination";
import {ref, watch} from "vue";
import CustomInput from "@/Admin/Components/Form/CustomInput";
import {useConfirmModal} from "@/Admin/Composables/confirmModal";

const props = defineProps({
    entities: Object,
    filters: Object
});

const proxyFilters = ref(props.filters);
const { showConfirmModal } = useConfirmModal();
</script>

<template>
    <Head title="Translations list" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Translations list
            <Link :href="route('admin.translations.create')"
                  class="text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center">
                Add new translation
            </Link>
            <Link :href="route('admin.translations.sync')"
                  class="text-white bg-slate-500 hover:bg-slate-600 focus:outline-none focus:ring-4 focus:ring-slate-300 font-medium rounded-full text-sm px-3 py-1 ml-3 text-center">
                Sync translation with google sheet
            </Link>
        </h1>
        <p>Link to <a href="#" class="font-bold text-blue underline" target="_blank">translation sheet</a></p>

        <div class="flex flex-col bg-white rounded mt-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                <p class="font-bold text-2xl mb-2 text-gray-700">Filters</p>
                <form class="flex flex-col w-full" :action="route('admin.translations.index', {filters: filters.value})">
                    <div class="flex">
                        <CustomInput class="mr-3 w-1/4"
                                     name="group"
                                     type="text"
                                     label="Group"
                                     v-model="proxyFilters.group"
                        />

                        <CustomInput class="mr-3 w-1/4"
                                     name="key"
                                     type="text"
                                     label="Key"
                                     v-model="proxyFilters.key"
                        />
                        <CustomInput class="mr-3 w-1/4"
                                     name="value"
                                     type="text"
                                     label="Value"
                                     v-model="proxyFilters.value"
                        />
                    </div>
                    <div class="mt-5">
                        <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600" value="Filter">
                    </div>
                </form>
            </div>
        </div>

        <div
            class="flex flex-col bg-white rounded mt-4"
        >
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Group
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Key
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(entity, entityIndex) in entities.data"
                        :key="'table-item-' + entityIndex"
                        class="bg-white border-b"
                    >
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ entity.group }}
                        </th>
                        <td class="px-6 py-4">
                            {{ entity.key }}
                        </td>
                        <td class="px-6 py-4">
                            {{ entity.text }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <Link :href="route('admin.translations.edit', {translation: entity.id})"
                                  class="py-2 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"
                            >
                                Edit
                            </Link>
                            <Link :href="route('admin.translations.destroy', {translation: entity.id})"
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

                <Pagination :links="entities.links"/>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
