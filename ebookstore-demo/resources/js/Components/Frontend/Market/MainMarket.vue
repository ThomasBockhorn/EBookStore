<template>
    <div>
        <MainMarketSection
            :categoryTitle="list"
            v-for="list in categoryList"
            :key="list.index"
        />
    </div>
</template>

<script setup>
import MainMarketSection from "@/Components/Frontend/Market/MainMarketSection/MainMarketSection.vue";
import { ref } from "vue";

const categoryList = ref([
    "Fiction",
    "History",
    "Biography",
    "Poetry",
    "CookBooks",
]);
</script>
