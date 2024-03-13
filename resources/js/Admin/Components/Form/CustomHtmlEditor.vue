<script setup>
import Editor from "@tinymce/tinymce-vue";

const props = defineProps(['modelValue', 'name', 'errors', 'label']);
const emit = defineEmits(['update:modelValue']);

const onType = (value) => {
    if (props.errors && props.errors[props.name]) {
        props.errors[props.name] = '';
    }

    emit('update:modelValue', value);
}

const tinyMceOptions = {
    branding: false,
    verify_html: false,
    setup: (editor) => {
        editor.on('change input', () => {
            onType(editor.getContent());
        });
    },
    plugins: [
        'code', 'image', 'link', 'searchreplace', 'wordcount',
    ],
    toolbar: [
        'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright  | blockquote | formatselect | spellchecker',
        'cut copy paste removeformat | searchreplace | bullist numlist | outdent indent | hr | link unlink anchor image code | inserttime'
    ]
}
</script>

<template>
    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900"
               :class="{'text-red-700': errors && errors[name]}"
        >
            {{ label }}
        </label>
        <Editor
            api-key="f5wh8ippfgetld5ogfmcsqquq5sg361e218dgtfrfvebcytr"
            :init="tinyMceOptions"
            :initial-value="modelValue"
        />
        <p v-if="errors && errors[name]"
           class="mt-2 text-sm text-red-600 dark:text-red-500">
            {{ errors[name] }}
        </p>
    </div>
</template>
