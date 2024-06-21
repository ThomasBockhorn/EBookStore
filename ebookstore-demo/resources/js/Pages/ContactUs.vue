<template>
    <GuestLayout>
        <section>
            <div class="text-center bg-sky-900">
                <h1 class="font-bold text-4xl text-white p-5">Contact Us</h1>
            </div>
        </section>
        <section>
            <div class="relative isolate bg-white">
                <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
                    <div
                        class="relative px-6 pb-20 pt-24 sm:pt-32 lg:static lg:px-8 lg:py-32"
                    >
                        <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                            <h2
                                class="text-3xl font-bold tracking-tight text-gray-900"
                            >
                                Contact Us
                            </h2>
                            <p class="mt-6 text-lg leading-8 text-gray-600">
                                Feel free to reach out to us for any inquiries
                                or assistance. We're here to help!
                            </p>
                            <dl
                                class="mt-10 space-y-4 text-base leading-7 text-gray-600"
                            >
                                <div class="flex gap-x-4">
                                    <dt class="flex-none">
                                        <span class="sr-only">Email</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            class="h-7 w-6 text-gray-400"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                                            ></path>
                                        </svg>
                                    </dt>
                                    <dd>
                                        <a
                                            class="hover:text-gray-900"
                                            href="mailto:contact@yourcompany.com"
                                            >contact@yourcompany.com</a
                                        >
                                    </dd>
                                </div>
                                <div class="flex gap-x-4">
                                    <dt class="flex-none">
                                        <span class="sr-only">Address</span>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            class="h-7 w-6 text-gray-400"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"
                                            ></path>
                                        </svg>
                                    </dt>
                                    <dd>123 Main Street, Cityville, Country</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <form class="px-6 pb-24 pt-20 sm:pb-32 lg:px-8 lg:py-32">
                        <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                            <div
                                class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2"
                            >
                                <div>
                                    <label
                                        for="first-name"
                                        class="block text-sm font-semibold leading-6 text-gray-900"
                                        >First name</label
                                    >
                                    <div class="mt-2.5">
                                        <input
                                            type="text"
                                            id="first-name"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            name="firstName"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <label
                                        for="last-name"
                                        class="block text-sm font-semibold leading-6 text-gray-900"
                                        >Last name</label
                                    >
                                    <div class="mt-2.5">
                                        <input
                                            type="text"
                                            id="last-name"
                                            autocomplete="family-name"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            name="lastName"
                                        />
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label
                                        for="email"
                                        class="block text-sm font-semibold leading-6 text-gray-900"
                                        >Email</label
                                    >
                                    <div class="mt-2.5">
                                        <input
                                            type="email"
                                            id="email"
                                            autocomplete="email"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            name="email"
                                        />
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label
                                        for="message"
                                        class="block text-sm font-semibold leading-6 text-gray-900"
                                        >Message</label
                                    >
                                    <div class="mt-2.5">
                                        <textarea
                                            id="message"
                                            rows="4"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            name="message"
                                        ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 flex justify-end">
                                <button
                                    type="submit"
                                    class="w-max rounded-2xl border-2 border-[#0057ff] bg-[#0057ff] px-5 py-1.5 text-sm font-semibold text-white transition-colors duration-150 ease-in-out hover:border-blue-400 hover:bg-blue-400"
                                >
                                    Send message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<style></style>
