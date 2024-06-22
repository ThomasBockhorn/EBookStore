<template>
    <div
        class="w-25 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl"
    >
        <a href="#">
            <img
                src="/img/night-4028339_1280.jpg"
                class="h-80 w-25 object-cover rounded-t-xl"
            />
            <div class="px-4 py-3 w-25">
                <span class="text-gray-400 mr-3 uppercase text-xs">Haiku</span>
                <p
                    class="text-lg font-bold text-black truncate block capitalize"
                >
                    Moonlit Night
                </p>
                <div class="flex items-center">
                    <p
                        class="text-lg font-semibold text-black cursor-auto my-3"
                    >
                        $15.99
                    </p>
                    <del>
                        <p class="text-sm text-gray-600 cursor-auto ml-2">
                            $25.00
                        </p>
                    </del>
                    <div class="ml-auto">
                        <Link href="/shoppingcart">
                            <ShoppingCart />
                        </Link>
                    </div>
                </div>
            </div>
        </a>
    </div>
</template>

<script setup>
import ShoppingCart from "@/Components/GlobalComponents/ShoppingCart/ShoppingCart.vue";
import { Link } from "@inertiajs/vue3";
</script>
