<script setup>
import {onMounted, ref} from 'vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
const currentRoute = route().current();
const activeTab = ref(false);

const menuItems = ref([
    {
        route: 'admin.dashboard',
        group: 'admin.dashboard',
        title: 'Головна',
    },
    {
        route: 'admin.translations.index',
        group: 'admin.translations',
        title: 'Переклади',
    },
    {
        route: 'admin.settings.index',
        group: 'admin.settings',
        title: 'Додаткові змінні',
    },
    {
        route: null,
        title: 'Контент'
    },
    {
        route: 'admin.banners.index',
        group: 'admin.banners.index',
        title: 'Банери',
    },
    {
        route: 'admin.sliders.index',
        group: 'admin.sliders.index',
        title: 'Слайдери',
    },
    {
        route: 'admin.file-manager',
        group: 'admin.file-manager',
        title: 'Файловий менеджер',
    },
    {
        route: 'admin.seo-rule.index',
        group: 'admin.seo-rule',
        title: 'SEO правила',
    },
    {
        route: 'admin.links.index',
        group: 'admin.links',
        title: 'Посилання',
    },
    {
        route: 'admin.menu.index',
        group: 'admin.menu',
        title: 'Меню',
    },
    {
        route: null,
        title: 'Управління'
    },
    {
        route: 'admin.users.index',
        group: 'admin.users',
        title: 'Користувачі',
    },
    {
        route: 'admin.roles.index',
        group: 'admin.roles',
        title: 'Ролі',
    },
]);

onMounted(() => {
    // const splitedCurrentRoute = currentRoute.split('.');
    // activeTab.value = splitedCurrentRoute[0] + '.' + splitedCurrentRoute[1];
});

function setActiveTab(tab) {
    if (activeTab.value === tab) {
        activeTab.value = false;
    } else {
        activeTab.value = tab;
    }
}
</script>

<template>
    <aside
        class="sidebar w-80 md:shadow transform md:translate-x-0 transition-transform duration-150 ease-in bg-slate-500"
        :class="{'-translate-x-full': !showingNavigationDropdown}"
    >
        <div class="sidebar-header w-80 flex items-center justify-center py-4">
            <div class="inline-flex">
                <a href="#" class="inline-flex flex-row items-center">
                    <svg class="w-10 h-10 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            fill-rule="evenodd"
                            d="M11.757 2.034a1 1 0 01.638.519c.483.967.844 1.554 1.207 2.03.368.482.756.876 1.348 1.467A6.985 6.985 0 0117 11a7.002 7.002 0 01-14 0c0-1.79.684-3.583 2.05-4.95a1 1 0 011.707.707c0 1.12.07 1.973.398 2.654.18.374.461.74.945 1.067.116-1.061.328-2.354.614-3.58.225-.966.505-1.93.839-2.734.167-.403.356-.785.57-1.116.208-.322.476-.649.822-.88a1 1 0 01.812-.134zm.364 13.087A2.998 2.998 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879.586.585.879 1.353.879 2.121s-.293 1.536-.879 2.121z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">DForce admin</span>
                </a>
            </div>
        </div>
        <div class="sidebar-content px-4 py-6">
            <ul class="flex flex-col w-full">
                <li v-for="menuItem in menuItems"
                    class="my-px" >
                    <div v-if="menuItem.sublist && menuItem.sublist.length > 0">
                        <div class="flex flex-row items-center h-10 px-3 rounded-lg cursor-pointer"
                             @click="setActiveTab(menuItem.group)"
                            :class="{
                            'text-gray-700 bg-gray-100': currentRoute.includes(menuItem.group),
                            'text-gray-300 hover:bg-gray-100 hover:text-gray-700': !currentRoute.includes(menuItem.group)
                        }"
                        >
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                              <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </span>
                            <span class="ml-3">{{ menuItem.title }}</span>
                            <svg class="w-6 h-6 ml-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                        <ul v-if="menuItem.sublist && menuItem.sublist.length > 0" v-show="activeTab === menuItem.group"
                            class="bg-white rounded-lg"
                        >
                            <li v-for="menuSubItem in menuItem.sublist"
                                class="my-px" >
                                <Link :href="route(menuSubItem.route, menuSubItem.routeParams || [])"
                                    class="flex flex-row items-center h-10 px-3 rounded-lg">
                                    <span class="ml-3" :class="{'text-white bg-slate-500 rounded-lg px-3 w-full': currentRoute === menuSubItem.route}"
                                    >
                                        {{ menuSubItem.title }}
                                    </span>
                                </Link>
                            </li>
                        </ul>
                    </div>
                    <div v-else>
                        <Link
                            v-if="menuItem.route"
                            :href="route(menuItem.route)"
                            class="flex flex-row items-center h-10 px-3 rounded-lg"
                            :class="{
                            'text-gray-700 bg-gray-100': currentRoute.includes(menuItem.group),
                            'text-gray-300 hover:bg-gray-100 hover:text-gray-700': !currentRoute.includes(menuItem.group)
                        }"
                        >
                        <span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                              <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </span>
                            <span class="ml-3">{{ menuItem.title }}</span>
                        </Link>
                        <span v-else class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">{{ menuItem.title }}</span>
                    </div>
                </li>
                <li class="my-px">
                    <a :href="route('logout')"
                          class="flex flex-row items-center w-full h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
                    >
                        <span class="flex items-center justify-center text-lg text-red-400">
                            <svg
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="h-6 w-6"
                            >
                              <path
                                  d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"
                              />
                            </svg>
                        </span>
                        <span class="ml-3">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>
