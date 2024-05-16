<template>
    <header
        class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md bg-sky-500"
    >
        <div class="flex-1 flex justify-between items-center">
            <Link href="/" class="text-xl text-white">EBookStore</Link>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block">
            <button @click="toggleSidebar">
                <Hamburger />
            </button>
        </label>
        <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
            <NavbarNav />
        </div>
    </header>
</template>

<script setup>
import NavbarNav from "./NavbarNav.vue";
import Hamburger from "@/Components/GlobalComponents/NavbarComponents/Hamburger.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const sideBar = ref(false);

const emit = defineEmits(["toggle-sidebar"]);

const toggleSidebar = () => {
    sideBar.value = !sideBar.value;
    emit("toggle-sidebar", sideBar.value);
};
</script>

<style scoped></style>
