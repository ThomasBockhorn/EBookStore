<template>
    <section class="bg-white py-8" id="Best-Sellers">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <MarketControls
                @isDisplay="displayBooks"
                :category="bestSellerCategory"
            />
            <div
                class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3"
                :class="{ hidden: toDisplay }"
            >
                <template v-for="book in books">
                    <Book
                        v-if="book.status == 'bestseller'"
                        :key="book.id"
                        :book="book"
                    />
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
const bestSellerCategory = ref("Best Seller");

defineProps({
    books: Object,
});

const displayBooks = (displayBooks) => {
    toDisplay.value = displayBooks;
};
</script>
