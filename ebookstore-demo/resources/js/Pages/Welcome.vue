<template>
    <GuestLayout>
        <div class="text-center p-10 bg-sky-500">
            <h1 class="font-bold text-4xl text-white">Welcome to EBookStore</h1>
            <h1 class="text-3xl text-white">Pick your next read</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path
                fill="#08A6F7"
                fill-opacity="1"
                d="M0,96L48,106.7C96,117,192,139,288,149.3C384,160,480,160,576,149.3C672,139,768,117,864,90.7C960,64,1056,32,1152,21.3C1248,11,1344,21,1392,26.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
            ></path>
        </svg>
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

<style scoped></style>
