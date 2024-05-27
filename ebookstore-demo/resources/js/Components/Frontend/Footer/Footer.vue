<template>
    <footer class="bg-sky-500">
        <div
            class="mx-auto max-w-7xl py-8 px-4 sm:px-6 md:flex md:items-center md:justify-between lg:px-8"
        >
            <FooterNav />
            <FooterSocialMedia />
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-base text-white">
                    &copy; 2024 Thomas Bockhorn.
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup>
import FooterNav from "./FooterNav.vue";
import FooterSocialMedia from "./FooterSocialMedia.vue";
</script>
