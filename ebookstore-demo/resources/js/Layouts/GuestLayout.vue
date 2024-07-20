<template>
    <div
        class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal"
    >
        <Navbar />
        <div>
            <slot />
        </div>
        <Footer />
    </div>
</template>

<script setup>
import Navbar from "@/Components/Frontend/Navbar/NavbarNav.vue";
import Footer from "@/Components/Frontend/Footer/Footer.vue";
</script>

<style scoped></style>
