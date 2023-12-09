<script setup>
import {ref} from "vue";

const props = defineProps(['modelValue', 'label']);
const emit = defineEmits(['update:modelValue']);

const checkboxValue = ref(Boolean(props.modelValue));
const onCheck = (event) => {
    emit('update:modelValue', event.target.checked);
}
</script>

<template>
    <div class="flex items-center">
        <input type="checkbox"
               v-model="checkboxValue"
               @change="onCheck"
               class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500"
        >
        <label :for="'checkbox-' + label.replace(' ', '')" class="ml-2 text-sm font-medium text-gray-900">{{ label }}</label>
    </div>
</template>
