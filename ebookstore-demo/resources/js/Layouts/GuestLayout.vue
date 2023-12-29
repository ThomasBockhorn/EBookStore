<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <Link href="/" />
        <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />

        <slot />
    </div>
</template>
