<script setup>
import BreezeAuthenticatedLayout from '@/Admin/Layouts/Authenticated.vue';
import {Head, usePage} from '@inertiajs/vue3';
import { router } from '@inertiajs/vue3';
import CustomCheckbox from "@/Admin/Components/Form/CustomCheckbox";
import CustomInput from "@/Admin/Components/Form/CustomInput";
import LanguageSwitcher from "@/Admin/Components/LanguageSwitcher";
import {computed, ref} from "vue";
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

const updateItem = () => {
    router.patch(route('admin.menu.update', { menu: proxyItem.value.id }), {
        data: proxyItem.value,
        dataLangs: proxyItemLangs.value
    })
}

const addNewMenuItem = () => {
    Object.keys(proxyItemLangs.value).map((language) => {
        proxyItemLangs.value[language].child.push({
            id: proxyItemLangs.value[language].child.length + 1,
            title: '',
            url: ''
        });
    })
}

const addNewMenuItemChild = (key) => {
    Object.keys(proxyItemLangs.value).map((language) => {
        if (!proxyItemLangs.value[language].child[key].child) {
            proxyItemLangs.value[language].child[key].child = [];
        }

        proxyItemLangs.value[language].child[key].child.push({
            id: proxyItemLangs.value[language].child[key].child.length + 1,
            title: '',
            url: ''
        });
    });
}

const deleteMenuItem = (key) => {
    Object.keys(proxyItemLangs.value).map((language) => {
        proxyItemLangs.value[language].child.splice(key, 1);
    });
}

const deleteMenuItemChild = (keyParent, key) => {
    Object.keys(proxyItemLangs.value).map((language) => {
        proxyItemLangs.value[language].child[keyParent].child.splice(key, 1);
    });
}

const onEnd = (event) => {
    Object.keys(proxyItemLangs.value).map((language) => {
        moveItemInArray(proxyItemLangs.value[language].child, event.oldIndex, event.newIndex)
    });
}

const moveItemInArray = (array, from, to) => {
    const item = array.splice(from, 1)[0];
    array.splice(to, 0, item);
};
</script>

<template>
    <Head title="Edit menu" />

    <BreezeAuthenticatedLayout>
        <h1 class="font-bold text-2xl text-gray-700 flex items-center">
            Edit menu
        </h1>

        <div class="flex flex-col flex-grow bg-white rounded mt-4 p-4">
            <form @submit.prevent="updateItem">
                <LanguageSwitcher v-model="activeTab"/>

                <div class="grid grid-cols-1 gap-2 w-full py-4" :class="{hidden: activeTab !== 'main'}">
                    <CustomInput class="mb-3"
                                 type="text"
                                 name="group"
                                 :errors="errors"
                                 label="Group"
                                 v-model="proxyItem.group"
                    />

                    <CustomInput class="mb-3"
                                 type="number"
                                 :errors="errors"
                                 label="Sorting position"
                                 v-model="proxyItem.sorting_position"
                    />

                    <CustomCheckbox v-model="proxyItem.status"
                                    label="Status"
                    />
                </div>
                <div class="grid grid-cols-1 gap-2 w-full py-4"
                     v-for="language in languages"
                     :class="{hidden: activeTab !== language.code}"
                >
                    <p class="font-bold text-xl text-gray-700 flex items-center">
                        Main menu item
                    </p>
                    <hr class="mb-3">
                    <CustomInput class="mb-3"
                                 :name="'menu-title-' + language.code"
                                 :errors="errors"
                                 label="Title"
                                 v-model="proxyItemLangs[language.code].title"
                    />

                    <CustomInput class="mb-3"
                                 :name="'menu-url-' + language.code"
                                 type="text"
                                 :errors="errors"
                                 label="Url"
                                 v-model="proxyItemLangs[language.code].url"
                    />

                    <Sortable
                        @end="onEnd"
                        :list="proxyItemLangs[language.code].child"
                        item-key="id"
                        tag="div"
                    >
                        <template #item="{element, index}">
                            <div class="draggable">
                                <div class="flex align-items-center mb-3">
                                    <p class="font-bold text-xl text-gray-700 flex items-center">
                                        Child menu item {{ index + 1 }}
                                    </p>
                                    <a href="#"
                                       @click.prevent="deleteMenuItem(index)"
                                       class="py-2 px-2 ml-2 text-sm font-medium text-gray-900 bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100">Delete</a>
                                </div>

                                <hr class="mb-3">

                                <CustomInput class="mb-3"
                                             :name="'menu-title-' + index + '-' + language.code"
                                             :errors="errors"
                                             label="Title"
                                             v-model="element.title"
                                />

                                <CustomInput class="mb-3"
                                             :name="'menu-url-' + index + '-' + language.code"
                                             type="text"
                                             :errors="errors"
                                             label="Url"
                                             v-model="element.url"
                                />

                                <Sortable
                                    :list="proxyItemLangs[language.code].child[index].child"
                                    item-key="id"
                                    tag="div"
                                    class=""
                                >
                                    <template #item="{element, index: indexChild}">
                                        <div class="border border-dark p-4 w-1/2 ml-5 mb-3">
                                            <div class="flex align-items-center mb-3">
                                                <p class="font-bold text-xl text-gray-700 flex items-center">
                                                    Sub menu item {{ indexChild + 1 }}
                                                </p>
                                                <a href="#"
                                                   @click.prevent="deleteMenuItemChild(index, indexChild)"
                                                   class="py-2 px-2 ml-2 text-sm font-medium text-gray-900 bg-red-50 rounded-lg border border-gray-200 hover:bg-red-100">Delete</a>
                                            </div>

                                            <CustomInput class="mb-3"
                                                         :name="'menu-title-child-' + indexChild + '-' + language.code"
                                                         :errors="errors"
                                                         label="Title"
                                                         v-model="element.title"
                                            />

                                            <CustomInput class="mb-3"
                                                         :name="'menu-url-child-' + indexChild + '-' + language.code"
                                                         type="text"
                                                         :errors="errors"
                                                         label="Url"
                                                         v-model="element.url"
                                            />
                                        </div>
                                    </template>
                                </Sortable>

                                <a href="#"
                                   class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-4 mt-4 flex w-1/4 justify-center"
                                   @click.prevent="addNewMenuItemChild(index)">Add new menu item</a>
                            </div>
                        </template>
                    </Sortable>

                    <a href="#"
                       class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                       @click.prevent="addNewMenuItem">Add new menu item</a>
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
