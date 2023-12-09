<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from "vue";
import { router } from '@inertiajs/vue3';
import CustomInput from "@/Admin/Components/Form/CustomInput";
import ValidationErrors from "@/Admin/Components/ValidationErrors.vue";
import CustomTextarea from "@/Admin/Components/Form/CustomTextarea.vue";

const props = defineProps({
    item: Object,
    errors: Object,
});

const proxyItem = ref(props.item);
const createItem = () => {
    router.post(route('admin.settings.store'), {
        data: proxyItem.value,
    })
}
</script>

<template>
    <Head title="Create new Setting" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Create new Setting
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="createItem">
                <ValidationErrors />

                <div class="grid grid-cols-1 gap-2 w-full py-4">
                    <CustomInput class="mb-3"
                                 type="text"
                                 :errors="errors"
                                 label="Key"
                                 v-model="proxyItem.key"
                    />

                    <CustomTextarea class="mb-3"
                                    :errors="errors"
                                    label="Value"
                                    v-model="proxyItem.val"
                    />

                    <select
                        v-model="proxyItem.type"
                        required
                        class="mb-3"
                        :class="{'bg-red-50 border border-red-500': errors && errors[name]}"
                    >
                        <option value="string" selected>String</option>
                        <option value="json">JSON</option>
                        <option value="bool">Boolean</option>
                    </select>
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
