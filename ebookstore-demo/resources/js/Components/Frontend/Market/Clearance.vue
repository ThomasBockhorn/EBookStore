<template>
    <section class="bg-white py-8" id="Clearance">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <MarketControls
                @isDisplay="displayBooks"
                :category="clearanceCategory"
            />
            <div
                class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3"
                :class="{ hidden: toDisplay }"
            >
                <template v-for="book in books">
                    <Book v-if="book.status == 'clearance'" :key="book.id" />
                </template>
            </div>
        </div>
    </section>
</template>

<script setup>
import Book from "@/Components/Frontend/Books/Book.vue";
import MarketControls from "@/Components/Frontend/Market/MarketControls/MarketControls.vue";
import { ref, defineProps } from "vue";

const toDisplay = ref(false);
const clearanceCategory = ref("Clearance");

defineProps({
    books: Object,
});

const displayBooks = (displayBooks) => {
    toDisplay.value = displayBooks;
};
</script>
