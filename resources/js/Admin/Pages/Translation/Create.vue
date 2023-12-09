<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/vue3';
import CustomInput from "@/Admin/Components/Form/CustomInput";
import { router } from '@inertiajs/vue3';
import {ref} from "vue";

const props = defineProps({
    errors: Object,
    locales: Object
});

const form = ref({
    group: '',
    key: '',
    text: {}
});

function create() {
    router.post(route('admin.translations.store'), form.value)
}

</script>

<template>
    <Head title="Create new translation" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Create new translation
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="create">
                <div class="grid grid-cols-1 gap-2 w-1/2">
                    <CustomInput class="mb-3"
                                 name="group"
                                 type="text"
                                 :errors="errors"
                                 label="Group"
                                 v-model="form.group"
                    />

                    <CustomInput class="mb-3"
                                 name="key"
                                 type="text"
                                 :errors="errors"
                                 label="Key"
                                 v-model="form.key"
                    />

                    <h2>Translation</h2>

                    <CustomInput v-for="(locale, localeKey) in locales"
                                 class="mb-5"
                                 :name="'text.' + localeKey"
                                 type="text"
                                 :errors="errors"
                                 :label="localeKey"
                                 v-model="form.text[localeKey]"
                    />
                </div>
                <button type="submit"
                        class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                >
                    Create
                </button>
            </form>
        </div>
    </BreezeAuthenticatedLayout>
</template>
