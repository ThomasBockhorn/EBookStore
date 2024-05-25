<template>
    <nav class="bg-sky-500">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
            <Link href="/" class="flex items-center space-x-3">
                <span
                    class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                    >Ebookstore</span
                >
            </Link>
            <div class="flex md:order-2">
                <button
                    type="button"
                    data-collapse-toggle="navbar-search"
                    @click="toggleHamburger"
                    aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-white hover:bg-white hover:text-black focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 me-1"
                >
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 20 20"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                        />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <Search />
                    <input
                        type="text"
                        id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-black border border-black rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search..."
                    />
                </div>
                <button
                    data-collapse-toggle="navbar-search"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-white"
                    aria-controls="navbar-search"
                    aria-expanded="false"
                    @click="toggleHamburger"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 17 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"
                        />
                    </svg>
                </button>
            </div>
            <div
                class="items-center justify-between md:mt-5 w-full hidden md:flex md:w-auto md:order-1"
                id="navbar-search"
            >
                <Search />
                <NavbarNav />
            </div>
        </div>
    </nav>
</template>

<script setup>
import NavbarNav from "./NavbarNav.vue";
import Search from "../Search/Search.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const toggleHamburger = () => {
    const navbar = document.getElementById("navbar-search");
    navbar.classList.toggle("hidden");
};
</script>

<style></style>
