<script setup>
import {ref} from 'vue';
import _ from 'lodash';

const props = defineProps(['modelValue', 'name', 'errors', 'label', 'required', 'multiple', 'options', 'optionIdProperty', 'optionLabelProperty']);
const emit = defineEmits(['update:modelValue']);
const input = ref(null);

const onSelect = (event) => {
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
               :class="{'text-red-700': errors && errors[name]}"
        >
            {{ label }}
        </label>
        <select ref="input"
                :id="name"
                :value="modelValue"
                :required="required"
                :name="name"
                :multiple="multiple"
                @input="onSelect"
                class="block w-full mt-1 border-gray-300 rounded shadow focus:ring"
                :class="{'bg-red-50 border border-red-500': errors && errors[name]}"
        >
            <option value="" disabled selected>Select {{ label }}</option>
            <option v-for="option in options"
                    :value="_.get(option, optionIdProperty || 'id')">
                {{ _.get(option, optionLabelProperty || 'name') }}
            </option>
        </select>
        <p v-if="errors && errors[name]"
           class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ errors[name] }}
        </p>
    </div>
</template>
