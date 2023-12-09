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

const updateItem = () => {
    router.post(route('admin.settings.update', { setting: props.item.id }), {
        _method: 'patch',
        data: proxyItem.value,
    })
}
</script>

<template>
    <Head title="Edit Setting" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Edit Setting
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="updateItem">
                <ValidationErrors />

                <div class="grid grid-cols-1 gap-2 w-full py-4">
                    <CustomInput class="mb-3"
                                 type="text"
                                 :errors="errors"
                                 label="Key"
                                 v-model="proxyItem.key"
                                 name="key"
                    />

                    <CustomTextarea class="mb-3"
                                    :errors="errors"
                                    label="Value"
                                    v-model="proxyItem.val"
                                    name="val"
                                    v-if="proxyItem.type === 'string' || proxyItem.type === 'json'"
                    />

                    <select
                        v-model="proxyItem.val"
                        required
                        class="mb-3"
                        :class="{'bg-red-50 border border-red-500': errors && errors[name]}"
                        v-if="proxyItem.type === 'bool'"
                    >
                        <option value="1" selected>True</option>
                        <option value="0">False</option>
                    </select>

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
                    Update
                </button>
            </form>
        </div>
    </BreezeAuthenticatedLayout>
</template>
