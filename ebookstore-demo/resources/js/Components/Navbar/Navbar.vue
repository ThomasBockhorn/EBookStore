<script setup>
    import { ref } from 'vue';

    const openMenu = ref(false);
</script>

<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light shadow-sm overflow-hidden">
            <div class="container p-3">
                <div class="flex justify-between items-center">
                    <h1>EBookstore</h1>
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
                    <form class="flex flex-row border-black m-5 border-2 active:bg-blue-50">
                        <input type = "text" name = "" id = "search" class="grow-rows-1 border-0 shadow-transparent appearance-none">
                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 border-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        </button>
                    </form>
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

// Search Input Bar Styling
#search:active{
    border: 0;
    outline: 0;
    appearance: none;
    box-shadow: none;
}

#search:focus{
    border: 0;
    outline: 0;
    appearance: none;
    box-shadow: none;
}
</style>
