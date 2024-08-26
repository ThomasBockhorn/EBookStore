<template>
    <section class="bg-white py-8" id="Sales">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <MarketControls
                @isDisplay="displayBooks"
                :category="salesCategory"
            />
            <div
                class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3"
                :class="{ hidden: toDisplay }"
            >
                <template v-for="book in books">
                    <Book
                        v-if="book.status == 'sale'"
                        :key="book.id"
                        :book="book"
                    />
                </template>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, defineProps } from "vue";
import Book from "@/Components/Frontend/Books/Book.vue";
import MarketControls from "@/Components/Frontend/Market/MarketControls/MarketControls.vue";

const toDisplay = ref(false);
const salesCategory = ref("Sales");

defineProps({
    books: Object,
});

const displayBooks = (displayBooks) => {
    toDisplay.value = displayBooks;
};
</script>
