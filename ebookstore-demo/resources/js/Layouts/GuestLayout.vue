<script setup>
    import Navbar from '../Components/Navbar/Navbar.vue'
    import Footer from '../Components/Footer/Footer.vue'

</script>

<template>
    <div>
        <Navbar />
        <slot />
        <Footer />
    </div>
</template>

<style scoped>

</style>
