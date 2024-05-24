<template>
    <div class="flex-col w-full bg-sky-500">
        <Navbar @toggle-sidebar="showSidebar" />
        <Transition>
            <Sidebar v-if="show" />
        </Transition>
        <div class="bg-white">
            <slot />
        </div>

        <Footer />
    </div>
</template>

<script setup>
import Navbar from "../Components/Frontend/Navbar/Navbar.vue";
import Footer from "../Components/Frontend/Footer/Footer.vue";
import Sidebar from "../Components/Frontend/Sidebar/Sidebar.vue";
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
