<template>
    <GuestLayout>
        <div class="text-center p-10 box mb-5">
            <h1 class="font-bold text-4xl mb-4 text-white">
                Welcome to EBookStore
            </h1>
            <h1 class="text-3xl text-white">Pick your next read</h1>
        </div>
        <Search />
        <section
            id="Projects"
            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5"
        >
            <Book />
        </section>
        <pagination />
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Pagination from "@/Components/Frontend/Pagination/Pagination.vue";
import Search from "@/Components/Frontend/Search/Search.vue";
import Book from "@/Components/Frontend/Books/Book.vue";
</script>

<style scoped>
.box {
    background: rgb(8, 166, 247);
    background: linear-gradient(
        90deg,
        rgba(8, 166, 247, 1) 51%,
        rgba(8, 47, 247, 1) 100%
    );
}
</style>
