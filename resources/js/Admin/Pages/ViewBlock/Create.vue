<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from "vue";
import { router } from '@inertiajs/vue3';
import CustomCheckbox from "@/Admin/Components/Form/CustomCheckbox";
import CustomInput from "@/Admin/Components/Form/CustomInput";
import LanguageSwitcher from "@/Admin/Components/LanguageSwitcher";
import CustomHtmlEditor from "@/Admin/Components/Form/CustomHtmlEditor.vue";

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
    router.post(route('admin.view-block.store'), {
        data: proxyItem.value,
        dataLangs: proxyItemLangs.value
    })
}
</script>

<template>
    <Head title="Create new block" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Create new block
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="createItem">
                <LanguageSwitcher v-model="activeTab"/>

                <div class="grid grid-cols-1 gap-2 w-full py-4" :class="{hidden: activeTab !== 'main'}">
                    
                    <CustomInput class="mb-3"
                                 type="text"
                                 :errors="errors"
                                 label="key"
                                 v-model="proxyItem.key"
                                 required
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
                                 :name="'description-' + locale"
                                 :errors="errors"
                                 label="Description"
                                 v-model="langData.description"
                    />
                    <CustomHtmlEditor class="mb-3"
                                 :name="'content-' + locale"
                                 :errors="errors"
                                 label="Content"
                                 v-model="langData.content"
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
