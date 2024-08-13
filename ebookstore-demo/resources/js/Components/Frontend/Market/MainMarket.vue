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
import { ref, defineProps } from "vue";

defineProps({
    categoryTitles: Object,
});

const categoryList = ref([
    "Fiction",
    "History",
    "Biography",
    "Poetry",
    "CookBooks",
]);
</script>
