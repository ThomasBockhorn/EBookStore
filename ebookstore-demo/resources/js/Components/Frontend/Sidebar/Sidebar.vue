<template>
    <div class="md:hidden flex-col w-64 bg-gray-800 w-full">
        <div class="flex items-center justify-center h-16 bg-gray-900 w-full">
            <span class="text-white font-bold uppercase">EBookStore</span>
            <label for="menu-toggle" class="pointer-cursor block"> </label>
        </div>
        <div class="flex flex-col flex-1 overflow-y-auto">
            <SidebarNav />
        </div>
    </div>
</template>

<script setup>
import SidebarNav from "./SidebarNav.vue";
</script>
