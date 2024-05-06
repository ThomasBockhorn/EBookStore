<template>
    <div class="flex-col w-full">
        <Navbar />
        <Sidebar />
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
};
</script>

<style scoped></style>
