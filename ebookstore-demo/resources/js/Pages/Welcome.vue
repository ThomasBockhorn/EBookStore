<template>
    <GuestLayout>
        <!-- source: https://github.com/mfg888/Responsive-Tailwind-CSS-Grid/blob/main/index.html -->

        <div class="text-center p-10">
            <h1 class="font-bold text-4xl mb-4">Welcome to EBookStore</h1>
            <h1 class="text-3xl">Pick your next read</h1>
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

<script>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Pagination from "@/Components/Pagination/Pagination.vue";
import Search from "@/Components/Search/Search.vue";
import Book from "@/Components/Books/Book.vue";

export default {
    components: {
        GuestLayout,
        Pagination,
        Search,
        Book,
    },
};
</script>

<style></style>
