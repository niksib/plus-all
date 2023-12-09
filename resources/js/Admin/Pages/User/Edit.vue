<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/vue3';
import CustomInput from "@/Admin/Components/Form/CustomInput";
import { router } from '@inertiajs/vue3';
import {ref} from "vue";

const props = defineProps({
    user: Object,
    roles: Object,
    errors: Object,
});

const userData = ref(props.user);

const updateUser = () => {
    router.patch(route('admin.users.update', {user: props.user.id}), {
        ...userData.value
    })
}

</script>



<template>
    <Head title="User edit" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
             User information
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="updateUser">
                <div class="grid grid-cols-1 gap-2 w-1/2">
                    <CustomInput class="mb-3"
                                 name="email"
                                 type="email"
                                 :errors="errors"
                                 label="Email"
                                 v-model="userData.email"
                    />

                    <CustomInput class="mb-3"
                                 name="name"
                                 type="text"
                                 :errors="errors"
                                 label="Name"
                                 v-model="userData.name"
                    />

                    <CustomInput class="mb-3"
                                 name="password"
                                 type="password"
                                 :errors="errors"
                                 label="New password"
                                 v-model="userData.password"
                    />

                    <div class="mb-3">
                        <label for="roles" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                        <select v-model="userData.role" id="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose a role</option>
                            <option v-for="role in roles"
                                    :value="role.id">{{ role.name }}</option>
                        </select>
                    </div>
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
