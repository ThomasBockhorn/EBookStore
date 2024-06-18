<template>
    <GuestLayout>
        <section>
            <div class="text-center bg-sky-900">
                <h1 class="font-bold text-4xl text-white p-5">Welcome</h1>
            </div>
        </section>
        <section
            id="Projects"
            class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5"
        >
            <div
                id="sales"
                class="text-center border-2 border-black m-5 bg-slate-200 rounded-lg shadow-lg"
            >
                <h2 class="font-bold text-2xl text-black p-5">Sales</h2>
                <Book />
            </div>
        </section>
        <pagination />
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Pagination from "@/Components/Frontend/Pagination/Pagination.vue";
import Book from "@/Components/Frontend/Books/Book.vue";
</script>

<style scoped></style>
