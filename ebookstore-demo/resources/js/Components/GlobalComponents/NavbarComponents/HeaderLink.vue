<template>
    <Link href="/" class="flex items-center space-x-3">
        <span
            class="self-center text-2xl font-semibold whitespace-nowrap text-white"
            ><slot
        /></span>
    </Link>
</template>
<script setup>
import { Link } from "@inertiajs/vue3";
</script>
