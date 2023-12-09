<script setup>
import { ref } from 'vue';

const props = defineProps([
    'name',
    'modelValue',
    'errors',
    'label',
    'preview',
    'isDelete',
    'type',
    'styles',
    'required',
]);
const emit = defineEmits(['update:modelValue', 'delete']);
const input = ref(null);

const onInput = (event) => {
    if (props.errors && props.errors[props.name]) {
        props.errors[props.name] = '';
    }

    emit('update:modelValue', event.target.files[0]);
}
</script>

<template>
    <div>
        <label :for="name"
               class="block mb-2 text-sm font-medium text-gray-900"
               :class="{'text-red-700': errors[name]}"
        >
            {{ label }}
            <a href="#" v-if="isDelete" @click.prevent="emit('delete')" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-2 py-1 text-center">Delete</a>
        </label>

        <div class="w-64">
            <img v-if="preview && type !== 'video' && typeof preview === 'string'" :src="'/storage/' + preview" class="w-full mb-3" :style="styles">
        </div>

        <div class="w-64">
            <video v-if="preview && type === 'video' && typeof preview === 'string'"
                   controls
            >
                <source :src="'/storage/' + preview" type="video/mp4">
            </video>
        </div>

        <input ref="input"
               :id="name"
               type="file"
               @input="onInput"
                :required="required || false"
               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
               :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700': errors[name]}"
        >
        <p v-if="errors[name]"
           class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ errors[name] }}
        </p>
    </div>
</template>
