<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/vue3';
import CustomInput from "@/Admin/Components/Form/CustomInput";
import {ref} from "vue";
import { router } from '@inertiajs/vue3';
import CustomCheckbox from "@/Admin/Components/Form/CustomCheckbox";

defineProps({
    errors: Object,
    routes: Object
});

const form = ref({
    role: {
        name: ''
    },
    permissions: {}
});

function createRole() {
    router.post(route('admin.roles.store'), form.value)
}

</script>

<template>
    <Head title="Create new role" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Create new role
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="createRole">
                <div class="grid grid-cols-1 gap-2 w-1/2">
                    <CustomInput class="mb-3"
                                 name="role.name"
                                 type="text"
                                 :errors="errors"
                                 label="Name"
                                 v-model="form.role.name"
                    />
                </div>
                <h2 class="font-bold text-2xl mb-2 text-gray-700">Permissions</h2>
                <div class="flex flex-wrap gap-10">
                    <div v-for="(routeGroup, groupName) in routes">
                        <p class="font-bold text-xl mb-3">{{ groupName }}</p>
                        <CustomCheckbox
                            class="mb-2"
                            v-for="route in routeGroup"
                            v-model="form.permissions[route]"
                            :label="route"
                        />
                    </div>
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
