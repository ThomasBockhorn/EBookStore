<template>
    <GuestLayout>
        <MainMarket :categoryTitles="categories" />
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import MainMarket from "@/Components/Frontend/Market/MainMarket.vue";
import { defineProps } from "vue";

defineProps({
    categories: Object,
});
</script>
