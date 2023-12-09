<script setup>
import {computed, ref} from "vue";
import {usePage} from "@inertiajs/vue3";

const emit = defineEmits(['update:modelValue']);

const message = computed(() => usePage().props.laguages);
const activeTab = ref('main');

const changeTab = (tab) => {
    activeTab.value = tab;
    emit('update:modelValue', tab);
}
</script>

<template>
    <div class="w-full">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500">
            <li class="mr-2 cursor-pointer" @click.prevent="changeTab('main')">
                <span class="inline-block py-3 px-4 rounded-lg hover:text-white hover:bg-blue-400 text-lg"
                   :class="{'active text-white bg-blue-600': activeTab === 'main'}"
                >Main</span>
            </li>
            <li class="mr-2 cursor-pointer" @click.prevent="changeTab('uk')">
                <span class="inline-block py-3 px-4 rounded-lg hover:text-white hover:bg-blue-400 text-lg"
                      :class="{'active text-white bg-blue-600': activeTab === 'uk'}"
                >UK</span>
            </li>
            <li class="mr-2 cursor-pointer" @click.prevent="changeTab('en')">
                <span class="inline-block py-3 px-4 rounded-lg hover:text-white hover:bg-blue-400 text-lg"
                   :class="{'active text-white bg-blue-600': activeTab === 'en'}"
                >EN</span>
            </li>
        </ul>
    </div>
</template>
