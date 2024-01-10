<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

</script>

<template>
    <GuestLayout>
        <video controls autoplay muted loop>
            <source :src="'/mov/Main Entry.mp4'" type="video/mp4">
        </video>
        <div class="min-h-full">
            Test Page
        </div>
    </GuestLayout>
</template>

<style scoped>

</style>
