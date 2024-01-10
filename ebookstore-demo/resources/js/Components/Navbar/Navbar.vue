<script setup>
    import { ref } from 'vue';

    const openMenu = ref(false);
</script>

<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container p-3">
                <div class="flex justify-between items-center">
                    <input type = "text">
                    <button class="menu-wrapper mb-2" @click="openMenu = !openMenu" :class="{ active: openMenu }">
                        <span class="menu-bar one"></span>
                        <span class="menu-bar two"></span>
                    </button>
                </div>
            </div>
        </nav>
        <div>
            <div v-if="openMenu" class="bg-white shadow-md">
                <div class="flex flex-col items-center">
                    <!-- Make sure to add the list of links here -->
                    <a href="#" class="p-3">Home</a>
                    <a href="#" class="p-3">About</a>
                    <a href="#" class="p-3">Contact</a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.menu-wrapper{
    width: 40px;
    height: auto;
    cursor: pointer;
    position: relative;
}
.menu-bar{
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #000;
    left: 0;
}
.one{
    top: 0;
    animation-delay: 0.1s;
    transition: all 0.3s;
}
.two{
    top: 10px;
    transition: all 0.3s;
}
.active .one{
    top: 50%;
    left: 0;
    transform: rotate(45deg);
}
.active .two{
    top: 50%;
    left: 0;
    transform: rotate(-45deg);
}
</style>
