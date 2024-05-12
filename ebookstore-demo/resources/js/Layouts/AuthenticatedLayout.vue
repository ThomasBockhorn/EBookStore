<template>
    <div class="flex-col w-full">
        <Navbar @toggle-sidebar="showSidebar" />
        <Sidebar v-if="show" />
        <slot />
        <Footer />
    </div>
</template>

<script>
import Navbar from "../Components/Backend/Navbar/Navbar.vue";
import Footer from "../Components/Backend/Footer/Footer.vue";
import Sidebar from "../Components/Backend/Sidebar/Sidebar.vue";

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
