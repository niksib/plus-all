<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head, usePage} from '@inertiajs/vue3';
import {computed, onMounted, ref} from "vue";
import { router } from '@inertiajs/vue3';
import CustomFileInput from "@/Admin/Components/Form/CustomFileInput";
import CustomCheckbox from "@/Admin/Components/Form/CustomCheckbox";
import CustomInput from "@/Admin/Components/Form/CustomInput";
import LanguageSwitcher from "@/Admin/Components/LanguageSwitcher";
import { Sortable } from "sortablejs-vue3";

const props = defineProps({
    item: Object,
    itemLangs: Object,
    errors: Object,
});

const languages = computed(() => usePage().props.languages);
const activeTab = ref('main');
const proxyItem = ref(props.item);
const proxyItemLangs = ref(props.itemLangs);

onMounted(() => {
    if (typeof proxyItem.value.images === 'object') {
        proxyItem.value.images = Object.values(proxyItem.value.images);
    }
});

const updateItem = () => {
    router.post(route('admin.sliders.update', { slider: props.item.id }), {
        _method: 'patch',
        data: proxyItem.value,
        dataLangs: proxyItemLangs.value
    })
}

const addNewSlide = () => {
    Object.keys(proxyItemLangs.value).map((language) => {
        proxyItemLangs.value[language].content.push({
            id: proxyItemLangs.value[language].content.length + 1,
            title: '',
            subtitle: ''
        })
    });
}

const onEnd = (event) => {
    Object.keys(proxyItemLangs.value).map((language) => {
        moveItemInArray(proxyItemLangs.value[language].content, event.oldIndex, event.newIndex)
    });

    moveItemInArray(proxyItem.value.images, event.oldIndex, event.newIndex)
}

const moveItemInArray = (array, from, to) => {
    const item = array.splice(from, 1)[0];
    array.splice(to, 0, item);
}

const deleteSliderItem = (index) => {
    Object.keys(proxyItemLangs.value).map((language) => {
        proxyItemLangs.value[language].content.splice(index, 1);
    });

    proxyItem.value.images.splice(index, 1);
}
</script>

<template>
    <Head title="Slider editing" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Edit slider
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="updateItem">
                <LanguageSwitcher v-model="activeTab"/>

                <div class="grid grid-cols-1 gap-2 w-full py-4" :class="{hidden: activeTab !== 'main'}">
                    <CustomInput class="mb-3"
                                 type="text"
                                 :errors="errors"
                                 label="Name"
                                 name="name"
                                 v-model="proxyItem.name"
                    />

                    <CustomInput class="mb-3"
                                 type="text"
                                 :errors="errors"
                                 label="Uid"
                                 name="uid"
                                 v-model="proxyItem.uid"
                    />

                    <CustomCheckbox v-model="proxyItem.status"
                                    label="Status"
                    />
                </div>
                <div class="grid grid-cols-1 gap-2 w-full py-4"
                     v-for="language in languages"
                     :class="{hidden: activeTab !== language.code}"
                >
                    <Sortable
                        @end="onEnd"
                        :list="proxyItemLangs[language.code].content"
                        item-key="id"
                        tag="div"
                    >
                        <template #item="{element, index}">
                            <div class="draggable">
                                <div class="flex align-items-center mb-3">
                                    <p class="font-bold text-xl text-gray-700 flex items-center">
                                        Slide {{ index + 1 }}
                                    </p>
                                    <a href="#"
                                       @click.prevent="deleteSliderItem(index)"
                                       class="py-2 px-2 ml-2 text-sm font-medium text-gray-900 bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100">Delete</a>
                                </div>
                                <hr class="mb-3">

                                <div class="flex gap-10">
                                    <div class="w-1/4">
                                        <CustomFileInput v-if="language.code === 'uk'"
                                                         class="mb-3"
                                                         name="image"
                                                         :errors="errors"
                                                         label="Image"
                                                         :preview="proxyItem.images[index]"
                                                         v-model="proxyItem.images[index]"
                                        />
                                    </div>
                                    <div class="w-3/4">
                                        <CustomInput class="mb-3"
                                                     :name="'content-title-' + index + '-' + language.code"
                                                     :errors="errors"
                                                     label="Slider title"
                                                     v-model="element.title"
                                        />

                                        <CustomInput class="mb-3"
                                                     :name="'content-subtitle-' + index + '-' + language.code"
                                                     :errors="errors"
                                                     label="Slider subtitle"
                                                     v-model="element.subtitle"
                                        />
                                    </div>
                                </div>
                            </div>
                        </template>
                    </Sortable>

                    <a href="#"
                       class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                       @click.prevent="addNewSlide">Add new slide</a>
                </div>


                <button type="submit"
                        class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                >
                    Update
                </button>
            </form>
        </div>
    </BreezeAuthenticatedLayout>
</template>
