<template>
    <nav class="bg-sky-900">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
            <HeaderLink> EBookStore </HeaderLink>
            <div class="flex md:order-2">
                <button
                    type="button"
                    data-collapse-toggle="navbar-search"
                    @click="toggleHamburger"
                    aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-white hover:bg-white hover:text-black focus:outline-none focus:ring-4 focus:ring-white rounded-lg text-sm p-2.5 me-1"
                >
                    <SearchIcon />
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <Search />
                </div>
                <button
                    data-collapse-toggle="navbar-search"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-white hover:text-black focus:outline-none focus:ring-2 focus:ring-white me-1"
                    aria-controls="navbar-search"
                    aria-expanded="false"
                    @click="toggleHamburger"
                >
                    <span class="sr-only">Open main menu</span>
                    <HamburgerIcon />
                </button>
            </div>
            <div
                class="items-center justify-between w-full hidden md:flex md:w-auto md:order-1"
                id="navbar-search"
            >
                <div class="relative md:hidden">
                    <Search />
                </div>

                <NavbarNav />
            </div>
        </div>
    </nav>
</template>

<script setup>
import NavbarNav from "./NavbarNav.vue";
import Search from "../Search/Search.vue";
import SearchIcon from "@/Components/GlobalComponents/NavbarComponents/SearchIcon.vue";
import HamburgerIcon from "@/Components/GlobalComponents/NavbarComponents/HamburgerIcon.vue";
import HeaderLink from "@/Components/GlobalComponents/NavbarComponents/HeaderLink.vue";

const toggleHamburger = () => {
    const navbar = document.getElementById("navbar-search");
    navbar.classList.toggle("hidden");
};
</script>
