<script setup>
import { ref } from "vue";
import CustomInput from "@/Admin/Components/Form/CustomInput";

const props = defineProps({
    page: Object,
    pageLangs: Object,
    errors: Object,
});

const activeTab = ref('en');

function changeTab(tab) {
    activeTab.value = tab;
}
</script>

<template>
    <div class="w-full">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500">
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

    <CustomInput class="mt-3 mb-3"
                 type="text"
                 :errors="errors"
                 label="Email"
                 v-model="pageLangs['en'].content.email"
    />

    <div class="grid grid-cols-1 gap-2 w-full py-4"
         v-for="(langData, locale) in pageLangs"
         :class="{hidden: activeTab !== locale}"
    >
        <CustomInput class="mb-3"
                     type="text"
                     :errors="errors"
                     label="Title"
                     v-model="langData.content.title"
        />
        <CustomInput class="mb-3"
                     type="text"
                     :errors="errors"
                     label="Subtitle"
                     v-model="langData.content.subtitle"
        />
    </div>
</template>
