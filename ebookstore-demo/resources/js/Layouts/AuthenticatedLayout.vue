<template>
    <div class="flex-col w-full">
        <Navbar @toggle-sidebar="showSidebar" />
        <Sidebar v-if="show" />
        <slot />
        <Footer />
    </div>
</template>

<script setup>
import Navbar from "../Components/Backend/Navbar/Navbar.vue";
import Footer from "../Components/Backend/Footer/Footer.vue";
import Sidebar from "../Components/Backend/Sidebar/Sidebar.vue";
import { ref } from "vue";

const show = ref(false);

const showSidebar = (value) => {
    show.value = value;
};
</script>
