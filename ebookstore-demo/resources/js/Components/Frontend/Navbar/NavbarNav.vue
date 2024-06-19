<template>
    <ul
        class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg bg-sky-900 md:space-x-8 md:flex-row md:mt-0 md:border-0"
    >
        <li>
            <Link
                href="/aboutus"
                class="block py-2 px-3 text-white rounded md:bg-transparent md:hover:text-sky-300 md:p-0"
                aria-current="page"
                >About Us</Link
            >
            <!--bg-blue-700 if active-->
        </li>
        <li>
            <Link
                href="/blog"
                class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-sky-300 md:p-0"
                >Blog</Link
            >
        </li>
        <li>
            <Link
                href="/contactus"
                class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-sky-300 md:p-0"
                >Contact Us</Link
            >
        </li>
        <li>
            <Link
                href="#"
                class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-sky-300 md:p-0"
                >Books</Link
            >
        </li>
        <li>
            <Link
                href="/shoppingcart"
                class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:hover:text-sky-300 md:p-0"
                ><ShoppingCart
            /></Link>
        </li>
    </ul>
</template>

<script setup>
import ShoppingCart from "@/Components/GlobalComponents/ShoppingCart/ShoppingCart.vue";
import { Link } from "@inertiajs/vue3";
</script>
