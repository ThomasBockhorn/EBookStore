<template>
    <div class="flex-col w-full">
        <NavbarWithSearch />
        <div class="bg-slate-300">
            <slot />
        </div>
        <Footer />
    </div>
</template>

<script setup>
import Footer from "../Components/Frontend/Footer/Footer.vue";
import NavbarWithSearch from "../Components/Frontend/Navbar/NavbarWithSearch.vue";
import { ref } from "vue";

const show = ref(false);

const showSidebar = (value) => {
    show.value = value;
};
</script>

<style scoped>
.v-enter-active,
.ve-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
