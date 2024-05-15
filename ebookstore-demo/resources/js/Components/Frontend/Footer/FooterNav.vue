<template>
    <nav
        class="-mx-5 -my-2 flex flex-wrap justify-center order-2"
        aria-label="Footer"
    >
        <div class="px-5">
            <a href="#" class="text-base text-white hover:text-gray-200"
                >Terms of Service</a
            >
        </div>

        <div class="px-5">
            <a href="#" class="text-base text-white hover:text-gray-200"
                >Privacy Policy</a
            >
        </div>

        <div class="px-5">
            <Link
                href="/aboutus"
                class="text-base text-white hover:text-gray-200"
                >About Us</Link
            >
        </div>

        <div class="px-5">
            <Link href="/blog" class="text-base text-white hover:text-gray-200"
                >Blog</Link
            >
        </div>

        <div class="px-5">
            <Link
                href="/contactus"
                class="text-base text-white hover:text-gray-200"
                >Contact Us</Link
            >
        </div>
    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
