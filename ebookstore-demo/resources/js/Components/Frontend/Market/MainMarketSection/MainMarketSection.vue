<template>
    <section class="bg-white py-8" id="Sales">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <MarketControls
                @isDisplay="displayBooks"
                :category="categoryTitle"
            />
            <div
                class="container mx-auto flex items-center flex-wrap pt-4 pb-12"
                :class="{ hidden: toDisplay }"
            >
                <Book />
                <Book />
                <Book />
                <Book />
            </div>
        </div>
    </section>
</template>

<script setup>
import Book from "@/Components/Frontend/Books/Book.vue";
import MarketControls from "@/Components/Frontend/Market/MarketControls/MarketControls.vue";

import { ref, defineProps } from "vue";

defineProps({
    categoryTitle: String,
});

const toDisplay = ref(false);

const displayBooks = (displayBooks) => {
    toDisplay.value = displayBooks;
};
</script>
