<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    links: Array
})

</script>

<template>
    <nav class="mx-4 my-6" v-if="links.length > 3">
        <ul class="inline-flex -space-x-px">
            <li v-for="(link, linkIndex) in links" :key="'pagination-link-' + linkIndex">
                <Link :href="link.url"
                      class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700"
                      :class="{'text-blue-600 bg-blue-50': link.active, 'rounded-l-lg': linkIndex === 0, 'rounded-r-lg': linkIndex === (links.length - 1)}"
                      v-html="link.label"
                ></Link>
            </li>
        </ul>
    </nav>
</template>
