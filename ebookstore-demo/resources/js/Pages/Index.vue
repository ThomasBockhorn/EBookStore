<template>
    <GuestLayout>
        <Carousel />
        <Sales />
        <BestSellers />
        <Clearance />
        <NewRelease />
        <section id="about" class="bg-white py-8">
            <div class="container py-8 px-6 mx-auto">
                <h3
                    class="uppercase tracking-wide font-bold text-gray-800 text-xl mb-8"
                >
                    About
                </h3>
                <p class="mb-8">
                    About Us Welcome to Patterson's Page Turners, your premier
                    destination for all things literary. Founded with a passion
                    for books and a commitment to customer satisfaction, we
                    strive to bring you an unparalleled selection of titles
                    across genres, authors, and interests. Whether you're a
                    seasoned bibliophile or a casual reader, our carefully
                    curated collection ensures you'll find something to
                    captivate your imagination.
                </p>
                <p class="mb-8">
                    At Patterson's Page Turners, we believe that books have the
                    power to inspire, educate, and entertain. Our user-friendly
                    online store is designed to provide a seamless shopping
                    experience, allowing you to browse, discover, and purchase
                    your favorite books from the comfort of your home. We pride
                    ourselves on offering competitive prices, fast shipping, and
                    exceptional customer service.
                </p>
                <p class="mb-8">
                    Beyond just selling books, we aim to build a community of
                    readers. Our blog features author interviews, book reviews,
                    and reading recommendations to help you stay informed and
                    engaged. We also host virtual events, book clubs, and
                    reading challenges to connect you with fellow book lovers.
                </p>
                <p class="mb-8">
                    Join us on this literary journey, and let Patterson's Page
                    Turners be your trusted companion in discovering new worlds,
                    ideas, and adventures through the magic of books.
                </p>
            </div>
        </section>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Carousel from "@/Components/Frontend/Carousel/Carousel.vue";
import BestSellers from "@/Components/Frontend/Market/BestSellers.vue";
import Clearance from "@/Components/Frontend/Market/Clearance.vue";
import NewRelease from "@/Components/Frontend/Market/NewRelease.vue";
import Sales from "@/Components/Frontend/Market/Sales.vue";
</script>

<style scoped></style>
