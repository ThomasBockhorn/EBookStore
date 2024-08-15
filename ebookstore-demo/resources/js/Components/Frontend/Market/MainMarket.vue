<template>
    <div>
        <MainMarketSection
            :categoryTitle="list.category_title"
            v-for="list in categoryTitles"
            :key="list.id"
        />
    </div>
</template>

<script setup>
import MainMarketSection from "@/Components/Frontend/Market/MainMarketSection/MainMarketSection.vue";
import { defineProps } from "vue";

defineProps({
    categoryTitles: Object,
});
</script>
