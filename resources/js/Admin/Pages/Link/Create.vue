<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from "vue";
import { router } from '@inertiajs/vue3';
import CustomFileInput from "@/Admin/Components/Form/CustomFileInput";
import CustomCheckbox from "@/Admin/Components/Form/CustomCheckbox";
import CustomInput from "@/Admin/Components/Form/CustomInput";
import LanguageSwitcher from "@/Admin/Components/LanguageSwitcher";


const props = defineProps({
    item: Object,
    itemLangs: Object,
    errors: Object,
});

const activeTab = ref('main');
const proxyItem = ref(props.item);
const proxyItemLangs = ref(props.itemLangs);

function changeTab(tab) {
    activeTab.value = tab;
}

const createItem = () => {
    router.post(route('admin.links.store'), {
        data: proxyItem.value,
        dataLangs: proxyItemLangs.value
    })
}
</script>

<template>
    <Head title="Create new link" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Create new link
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="createItem">
                <LanguageSwitcher v-model="activeTab"/>

                <div class="grid grid-cols-1 gap-2 w-full py-4" :class="{hidden: activeTab !== 'main'}">
                    <CustomInput class="mb-3"
                                 type="text"
                                 :errors="errors"
                                 label="Group"
                                 v-model="proxyItem.group"
                    />

                    <CustomFileInput class="mb-3"
                                 name="image"
                                 :errors="errors"
                                 label="Image"
                                 v-model="proxyItem.image"
                    />

                    <CustomInput class="mb-3"
                                 type="number"
                                 :errors="errors"
                                 label="Sorting position"
                                 v-model="proxyItem.sorting_position"
                    />

                    <CustomCheckbox v-model="proxyItem.nofollow"
                                    label="Nofollow"
                    />

                    <CustomCheckbox v-model="proxyItem.status"
                                    label="Status"
                    />
                </div>
                <div class="grid grid-cols-1 gap-2 w-full py-4"
                     v-for="(langData, locale) in proxyItemLangs"
                     :class="{hidden: activeTab !== locale}"
                >
                    <CustomInput class="mb-3"
                                 :name="'title-' + locale"
                                 :errors="errors"
                                 label="Title"
                                 v-model="langData.title"
                    />

                    <CustomInput class="mb-3"
                                 :name="'url-' + locale"
                                 :errors="errors"
                                 label="Url"
                                 v-model="langData.url"
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
