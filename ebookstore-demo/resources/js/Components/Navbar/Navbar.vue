<template>
    <header
        class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md"
    >
        <div class="flex-1 flex justify-between items-center">
            <a href="#" class="text-xl">EBookStore</a>
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

<script>
import NavbarNav from "./NavbarNav.vue";
import Hamburger from "./NavbarComponents/Hamburger.vue";

export default {
    data() {
        return {
            showSidebar: false,
        };
    },
    methods: {
        toggleSidebar() {
            this.showSidebar = !this.showSidebar;
            this.$emit("toggle-sidebar", this.showSidebar);
        },
    },
    components: {
        NavbarNav,
        Hamburger,
    },
};
</script>

<style></style>
