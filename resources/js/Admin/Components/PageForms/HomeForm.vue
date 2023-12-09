<script setup>
import { ref } from "vue";
import CustomInput from "@/Admin/Components/Form/CustomInput";
import CustomTextarea from "@/Admin/Components/Form/CustomTextarea";

const props = defineProps({
    page: Object,
    pageLangs: Object,
    errors: Object,
});

const activeTab = ref('main');

function changeTab(tab) {
    activeTab.value = tab;
}
</script>

<template>
    <div class="w-full">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500">
            <li class="mr-2" @click="changeTab('main')">
                <a href="#"
                   class="inline-block py-3 px-4 rounded-lg hover:text-gray-900 hover:bg-gray-100 text-lg"
                   :class="{'active text-white bg-blue-600': activeTab === 'main'}"
                >Main</a>
            </li>
            <li class="mr-2" @click="changeTab('en')">
                <a href="#"
                   class="inline-block py-3 px-4 rounded-lg hover:text-gray-900 hover:bg-gray-100 text-lg"
                   :class="{'active text-white bg-blue-600': activeTab === 'en'}"
                >EN</a>
            </li>
            <li class="mr-2" @click="changeTab('uk')">
                <a href="#"
                   class="inline-block py-3 px-4 rounded-lg hover:text-gray-900 hover:bg-gray-100 text-lg"
                   :class="{'active text-white bg-blue-600': activeTab === 'uk'}"
                >UK</a>
            </li>
        </ul>
    </div>
    <div class="grid grid-cols-1 gap-2 w-full py-4" :class="{hidden: activeTab !== 'main'}">
        <CustomInput class="mb-3"
                     name="slug"
                     type="text"
                     :errors="errors"
                     label="Url"
                     v-model="page.slug"
        />

        <div class="flex items-center">
            <input id="checked-checkbox" type="checkbox" :checked="page.status" v-model="page.status" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
            <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900">Status</label>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-2 w-full py-4"
         v-for="(langData, locale) in pageLangs"
         :class="{hidden: activeTab !== locale}"
    >
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][meta_title]'"
                     type="text"
                     :errors="errors"
                     label="Meta title"
                     v-model="langData.meta_title"
        />
        <CustomTextarea class="mb-3"
                        :name="'locales[' + locale + '][meta_description]'"
                        :errors="errors"
                        label="Meta description"
                        v-model="langData.meta_description"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][meta_keywords]'"
                     type="text"
                     :errors="errors"
                     label="Meta keywords"
                     v-model="langData.meta_keywords"
        />

        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][header_title]'"
                     type="text"
                     :errors="errors"
                     label="Header title"
                     v-model="langData.content.header_title"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][header_subtitle]'"
                     type="text"
                     :errors="errors"
                     label="Header subtitle"
                     v-model="langData.content.header_subtitle"
        />
        <CustomTextarea class="mb-3"
                        :name="'locales[' + locale + '][content][header_description]'"
                        :errors="errors"
                        label="Header description"
                        v-model="langData.content.header_description"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][cases_title]'"
                     type="text"
                     :errors="errors"
                     label="Cases title"
                     v-model="langData.content.cases_title"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][team_title]'"
                     type="text"
                     :errors="errors"
                     label="Team title"
                     v-model="langData.content.team_title"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][team_description]'"
                     type="text"
                     :errors="errors"
                     label="Team description"
                     v-model="langData.content.team_description"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][awards_title]'"
                     type="text"
                     :errors="errors"
                     label="Awards title"
                     v-model="langData.content.awards_title"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][cases_title_2]'"
                     type="text"
                     :errors="errors"
                     label="Cases title 2"
                     v-model="langData.content.cases_title_2"
        />
        <CustomInput class="mb-3"
                     :name="'locales[' + locale + '][content][cases_more_btn]'"
                     type="text"
                     :errors="errors"
                     label="Cases more button"
                     v-model="langData.content.cases_more_btn"
        />
    </div>
</template>
