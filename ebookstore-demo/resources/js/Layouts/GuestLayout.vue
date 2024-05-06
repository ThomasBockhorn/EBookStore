<template>
    <div class="flex-col w-full">
        <Navbar @toggle-sidebar="showSidebar" />
        <Sidebar v-if="show" />
        <slot />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../Components/Navbar/Navbar.vue";
import Footer from "../Components/Footer/Footer.vue";
import Sidebar from "../Components/Sidebar/Sidebar.vue";

export default {
    components: {
        Navbar,
        Footer,
        Sidebar,
    },
    data() {
        return {
            show: false,
        };
    },
    methods: {
        showSidebar(value) {
            this.show = value;
        },
    },
};
</script>

<style scoped></style>
