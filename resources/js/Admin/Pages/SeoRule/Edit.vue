<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head, usePage} from '@inertiajs/vue3';
import {computed, ref} from "vue";
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

const languages = computed(() => usePage().props.languages);
const activeTab = ref('main');
const proxyItem = ref(props.item);
const proxyItemLangs = ref(props.itemLangs);

function changeTab(tab) {
    activeTab.value = tab;
}

const updateItem = () => {
    router.post(route('admin.seo-rule.update', { seo_rule: props.item.id }), {
        _method: 'patch',
        data: proxyItem.value,
        dataLangs: proxyItemLangs.value
    })
}
</script>

<template>
    <Head title="Edit rule" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Edit rule
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="updateItem">
                <LanguageSwitcher v-model="activeTab"/>

                <div class="grid grid-cols-1 gap-2 w-full py-4" :class="{hidden: activeTab !== 'main'}">
                    <CustomInput class="mb-3"
                                 name="url"
                                 type="text"
                                 :errors="errors"
                                 label="Url"
                                 v-model="proxyItem.url"
                    />

                    <CustomCheckbox v-model="proxyItem.status"
                                    label="Status"
                    />
                </div>
                <div class="grid grid-cols-1 gap-2 w-full py-4"
                     v-for="language in languages"
                     :class="{hidden: activeTab !== language.code}"
                >
                    <CustomInput class="mb-3"
                                 :name="'meta_title-' + language.code"
                                 :errors="errors"
                                 label="Meta title"
                                 v-model="proxyItemLangs[language.code].meta_title"
                    />

                    <CustomInput class="mb-3"
                                 :name="'meta_description-' + language.code"
                                 :errors="errors"
                                 label="Meta description"
                                 v-model="proxyItemLangs[language.code].meta_description"
                    />

                    <CustomInput class="mb-3"
                                 :name="'meta_keywords-' + language.code"
                                 :errors="errors"
                                 label="Meta keywords"
                                 v-model="proxyItemLangs[language.code].meta_keywords"
                    />

                    <CustomInput class="mb-3"
                                 :name="'social_name-' + language.code"
                                 :errors="errors"
                                 label="Social title"
                                 v-model="proxyItemLangs[language.code].social_name"
                    />

                    <CustomInput class="mb-3"
                                 :name="'social_link-' + language.code"
                                 :errors="errors"
                                 label="Social link"
                                 v-model="proxyItemLangs[language.code].social_link"
                    />

                    <CustomInput class="mb-3"
                                 :name="'social_description-' + language.code"
                                 :errors="errors"
                                 label="Social description"
                                 v-model="proxyItemLangs[language.code].social_description"
                    />

                    <CustomInput class="mb-3"
                                 :name="'social_site_name-' + language.code"
                                 :errors="errors"
                                 label="Social site name"
                                 v-model="proxyItemLangs[language.code].social_site_name"
                    />

                    <CustomFileInput class="mb-3"
                                     :name="'social_image-' + language.code"
                                     :errors="errors"
                                     label="Social image"
                                     :preview="proxyItemLangs[language.code].social_image"
                                     v-model="proxyItemLangs[language.code].social_image"
                    />
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
