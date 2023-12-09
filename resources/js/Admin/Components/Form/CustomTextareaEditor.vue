<script setup>
import { onMounted } from "vue";

const props = defineProps(['modelValue', 'name', 'errors', 'label']);
const emit = defineEmits(['update:modelValue']);
Quill.register("modules/htmlEditButton", htmlEditButton);

onMounted(() => {
    const quill = new Quill('#' + props.name, {
        theme: 'snow',
        modules: {
            toolbar: 
            [
                [{ header: [2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', { align: [] }],
                ['link'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['clean'],
            ],
            htmlEditButton: {
                debug: true, // logging, default:false
            }
        }
    });

    quill.on('text-change', () => {
        emit('update:modelValue', quill.root.innerHTML);
    });

    quill.setContents(quill.clipboard.convert(props.modelValue), 'silent');
});
</script>

<template>
    <div class="flex flex-col" style="height: 300px">
        <label :for="name"
               class="block mb-2 text-sm font-medium text-gray-900"
               :class="{'text-red-700': errors[name]}"
        >
            {{ label }}
        </label>
        <div :id="name"></div>
        <p v-if="errors[name]"
           class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ errors[name] }}
        </p>
    </div>
</template>
