<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/vue3';
import CustomInput from "@/Admin/Components/Form/CustomInput";
import { router } from '@inertiajs/vue3';
import {ref} from "vue";

const props = defineProps({
    errors: Object,
    roles: Object
});

const form = ref({
    name: '',
    email: '',
    password: '',
    role: null
});

function createUser() {
    router.post(route('admin.users.store'), form.value)
}

</script>

<template>
    <Head title="Create new user" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Create new user
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="createUser">
                <div class="grid grid-cols-1 gap-2 w-1/2">
                    <CustomInput class="mb-3"
                                 name="email"
                                 type="email"
                                 :errors="errors"
                                 label="Email"
                                 v-model="form.email"
                    />

                    <CustomInput class="mb-3"
                                 name="name"
                                 type="text"
                                 :errors="errors"
                                 label="Name"
                                 v-model="form.name"
                    />

                    <CustomInput class="mb-5"
                                 name="password"
                                 type="password"
                                 :errors="errors"
                                 label="Password"
                                 v-model="form.password"
                    />

                    <div class="mb-3">
                        <label for="roles" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                        <select v-model="form.role" id="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose a role</option>
                            <option v-for="role in roles"
                                    :value="role.id">{{ role.name }}</option>
                        </select>
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
