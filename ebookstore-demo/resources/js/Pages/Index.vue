<template>
    <GuestLayout>
        <Carousel />
        <Sales />
        <BestSellers />
        <Clearance />
        <NewRelease />
        <About />
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Carousel from "@/Components/Frontend/Carousel/Carousel.vue";
import BestSellers from "@/Components/Frontend/Market/BestSellers.vue";
import Clearance from "@/Components/Frontend/Market/Clearance.vue";
import NewRelease from "@/Components/Frontend/Market/NewRelease.vue";
import Sales from "@/Components/Frontend/Market/Sales.vue";
import About from "@/Components/Frontend/About/About.vue";
</script>
