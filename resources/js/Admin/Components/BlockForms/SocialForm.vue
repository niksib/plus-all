<script setup>
import { ref } from "vue";
import CustomInput from "@/Admin/Components/Form/CustomInput";

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
        </ul>
    </div>
    <div class="grid grid-cols-1 gap-2 w-full py-4">
        <div v-for="(social, socialIndex) in pageLangs['en'].content.items">
            <CustomInput class="mb-3"
                         type="text"
                         :errors="errors"
                         label="Title"
                         v-model="social.title"
            />
            <CustomInput class="mb-3"
                         type="text"
                         :errors="errors"
                         label="Subtitle"
                         v-model="social.link"
            />
        </div>
    </div>
</template>
