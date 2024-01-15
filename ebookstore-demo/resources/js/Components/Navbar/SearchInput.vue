<script setup>

</script>

<template>
    <form class="flex flex-row border-black m-5 border-2 active:bg-blue-50">
        <input type= "text" name="" id="search" class="grow-rows-1 border-0">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 border-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </button>
    </form>
</template>

<style scoped>
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
