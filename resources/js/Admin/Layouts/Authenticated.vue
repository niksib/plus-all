<script setup>
import { ref } from 'vue';
import Sidebar from "@/Admin/Components/Sidebar";
import Alert from "@/Admin/Components/Alert";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
        <Sidebar/>

        <main class="main flex flex-col flex-grow -ml-80 md:ml-0 transition-all duration-150 ease-in">
            <header class="header bg-white shadow py-4 px-4">
                <div class="header-content flex items-center flex-row">
                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex ml-auto">
                        <a href class="flex flex-row items-center">
                            <img
                                src="https://pbs.twimg.com/profile_images/378800000298815220/b567757616f720812125bfbac395ff54_normal.png"
                                alt
                                class="h-10 w-10 bg-gray-200 border rounded-full"
                            />
                            <span class="flex flex-col ml-2">
                <span class="truncate w-20 font-semibold tracking-wide leading-none">{{ $page.props.auth.user.name }}</span>
                <span class="truncate w-20 text-gray-500 text-xs leading-none mt-1">Manager</span>
              </span>
                        </a>
                    </div>
                </div>
            </header>

            <div class="main-content flex flex-col flex-grow p-4">
                <Alert/>
                <slot />
            </div>

            <footer class="footer px-4 py-6">
                <div class="footer-content">
                    <p class="text-sm text-gray-600 text-center">© Dforce admin 2023. All rights reserved.</p>
                </div>
            </footer>
        </main>
    </div>
</template>
