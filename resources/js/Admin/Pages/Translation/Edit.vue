<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/vue3';
import CustomInput from "@/Admin/Components/Form/CustomInput";
import { router } from '@inertiajs/vue3';
import {onMounted, ref} from "vue";

const props = defineProps({
    entity: Object,
    locales: Object,
    errors: Object,
});

const entityData = ref(props.entity);

onMounted(() => {
    if (entityData.value.text.length === 0) {
        entityData.value.text = {};
    }

    Object.keys(props.locales).forEach(function(key, index) {
        if (!entityData.value.text[key]) {
            entityData.value.text[key] = '';
        }
    });
});

const update = () => {
    router.patch(
        route('admin.translations.update', {translation: props.entity.id}),
        entityData.value
    )
}
</script>

<template>
    <Head title="User edit" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
             Translation information
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="update">
                <div class="grid grid-cols-1 gap-2 w-1/2">
                    <CustomInput class="mb-3"
                                 name="group"
                                 type="text"
                                 :errors="errors"
                                 label="Group"
                                 v-model="entityData.group"
                    />

                    <CustomInput class="mb-3"
                                 name="key"
                                 type="text"
                                 :errors="errors"
                                 label="Key"
                                 v-model="entityData.key"
                    />

                    <h2>Translation</h2>
                    <CustomInput v-for="(locale, localeKey) in locales"
                                 class="mb-5"
                                 :name="'text.' + localeKey"
                                 type="text"
                                 :errors="errors"
                                 :label="localeKey"
                                 v-model="entityData.text[localeKey]"
                    />
                </div>

                <button type="submit"
                        class="mt-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                >
                    Update
                </button>
            </form>
        </div>
    </BreezeAuthenticatedLayout>
</template>
