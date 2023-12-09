<script setup>
import { onMounted, ref } from 'vue';

const props = defineProps(['modelValue', 'name', 'errors', 'label']);
const emit = defineEmits(['update:modelValue']);
const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

const onType = (event) => {
    if (props.errors && props.errors[props.name]) {
        props.errors[props.name] = '';
    }

    emit('update:modelValue', event.target.value);
}
</script>

<template>
    <div>
        <label :for="name"
               class="block mb-2 text-sm font-medium text-gray-900"
               :class="{'text-red-700': errors[name]}"
        >
            {{ label }}
        </label>
        <textarea ref="input"
                  :id="name"
                  :value="modelValue"
                  @input="onType"
                  rows="6"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                  :class="{'bg-red-50 border border-red-500 text-red-900 placeholder-red-700': errors[name]}"
        ></textarea>
        <p v-if="errors[name]"
           class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ errors[name] }}
        </p>
    </div>
</template>
