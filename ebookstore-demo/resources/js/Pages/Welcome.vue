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
            <Book />
        </section>
        <pagination />
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Pagination from "@/Components/Frontend/Pagination/Pagination.vue";
import Book from "@/Components/Frontend/Books/Book.vue";
import WaveHeader from "@/Components/GlobalComponents/WaveHeader/WaveHeader.vue";
</script>

<style scoped></style>
