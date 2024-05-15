<template>
    <nav>
        <ul
            class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0"
        >
            <li>
                <Link class="md:p-4 py-3 px-0 block" href="/aboutus"
                    >About Us</Link
                >
            </li>
            <li>
                <Link class="md:p-4 py-3 px-0 block" href="/blog">Blog</Link>
            </li>
            <li>
                <Link
                    class="md:p-4 py-3 px-0 block md:mb-0 mb-2"
                    href="/contactus"
                    >Contact Us</Link
                >
            </li>
            <li>
                <a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="#">
                    <ShoppingCart />
                </a>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import ShoppingCart from "@/Components/GlobalComponents/ShoppingCart/ShoppingCart.vue";
import { Link } from "@inertiajs/vue3";
</script>
