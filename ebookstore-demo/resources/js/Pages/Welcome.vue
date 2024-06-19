<template>
    <GuestLayout>
        <section>
            <div class="text-center bg-sky-900">
                <h1 class="font-bold text-4xl text-white p-5">Welcome</h1>
            </div>
        </section>
        <section
            class="bg-white w-fit mx-auto grid grid-cols-1 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5"
        >
            <div
                id="sales"
                class="text-center border-2 border-black m-5 bg-white rounded-lg shadow-lg"
            >
                <h2 class="font-bold text-2xl text-black p-5">Sales</h2>
                <div
                    class="w-fit mx-auto grid grid-cols-1 md:grid-cols-2 justify-items-center justify-center gap-y-5 gap-x-7 mt-10 p-5"
                >
                    <Book />
                    <Book />
                    <Book />
                    <div>
                        <h3>More...</h3>
                    </div>
                </div>
            </div>
            <div
                id="history"
                class="text-center border-2 border-black m-5 bg-white rounded-lg shadow-lg"
            >
                <h2 class="font-bold text-2xl text-black p-5">New Arrival</h2>
                <div
                    class="w-fit mx-auto grid grid-cols-1 md:grid-cols-2 justify-items-center justify-center gap-y-5 gap-x-7 mt-10 p-5"
                >
                    <Book />
                    <Book />
                    <Book />
                    <div>
                        <h3>More...</h3>
                    </div>
                </div>
            </div>
            <div
                id="fiction"
                class="text-center border-2 border-black m-5 bg-white rounded-lg shadow-lg"
            >
                <h2 class="font-bold text-2xl text-black p-5">Best Sellers</h2>

                <div
                    class="w-fit mx-auto grid grid-cols-1 md:grid-cols-2 justify-items-center justify-center gap-y-5 gap-x-7 mt-10 p-5"
                >
                    <Book />
                    <Book />
                    <Book />
                    <div>
                        <h3>More...</h3>
                    </div>
                </div>
            </div>
            <div
                id="biography"
                class="text-center border-2 border-black m-5 bg-white rounded-lg shadow-lg"
            >
                <h2 class="font-bold text-2xl text-black p-5">Clearance</h2>
                <div
                    class="w-fit mx-auto grid grid-cols-1 md:grid-cols-2 justify-items-center justify-center gap-y-5 gap-x-7 mt-10 p-5"
                >
                    <Book />
                    <Book />
                    <Book />
                    <div>
                        <h3>More...</h3>
                    </div>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import Book from "@/Components/Frontend/Books/Book.vue";
</script>
