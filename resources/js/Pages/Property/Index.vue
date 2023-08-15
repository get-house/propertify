<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Like from "@/Components/Like.vue";
import Toast from "@/Components/Toast.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    properties: Object,
});
</script>

<template>
    <AppLayout title="Properties">
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                Properties
            </h2>
        </template>
        <div class="flex justify-between mx-2 sm:mx-10 pt-2">
            <h1 class="text-2xl">Properties</h1>
            <toast></toast>
            <!--          <div class="max-w-[50rem] z-50">-->
            <!--            <Search/>-->
            <!--          </div>-->
            <!--          <input-->
            <!--              v-model="search"-->
            <!--              type="text"-->
            <!--              placeholder="Search"-->
            <!--              class="border px-2 rounded-lg"-->
            <!--              id="search"-->
            <!--          />-->
            <p>Hello searchables</p>
        </div>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-items-center items-center gap-x-6 gap-y-6 outline-none focus:outline-none dark:bg-slate-800"
        >
            <!-- beginning of first card -->
            <div
                v-for="property in properties.data"
                :key="property.id"
                class="card max-w-[22rem] lg:max-w-[26rem] glass transition duration-500 ease-in-out transform hover:-translate-y-3 hover:shadow-md"
            >
                <Link :href="route('properties.index')">
                    <template class="flex flex-col justify-center text-center">
                        <div class="relative">
                            <Like />
                            <div
                                v-show="property.verified"
                                class="absolute top-0 left-0 p-3"
                            >
                                <button
                                    v-tooltip.bottom-end="{
                                        content: 'This property is verified',
                                        html: true,
                                    }"
                                    class="transition ease-in duration-300 hover:text-green-600 shadow hover:shadow-md text-green-800 rounded-full w-6 h-6 text-center"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-6 w-6"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                            </div>

                            <div class="relative">
                                <div class="carousel rounded-box">
                                    <div
                                        id="item1"
                                        class="carousel-item w-full"
                                    >
                                        <div v-if="property.verified">
                                            <img
                                                alt="Just a flower"
                                                :src="
                                                    property.media[0].full_url
                                                "
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                        <div v-else>
                                            <img
                                                src="/images/hero_house.jpg"
                                                alt="Just a flower"
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        id="item2"
                                        class="carousel-item w-full"
                                    >
                                        <div v-if="property.verified">
                                            <img
                                                alt="Just a flower"
                                                :src="
                                                    property.media[0].full_url
                                                "
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                        <div v-else>
                                            <img
                                                src="/images/hero_house.jpg"
                                                alt="Just a flower"
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        id="item3"
                                        class="carousel-item w-full"
                                    >
                                        <div v-if="property.verified">
                                            <img
                                                alt="Just a flower"
                                                :src="
                                                    property.media[0].full_url
                                                "
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                        <div v-else>
                                            <img
                                                src="/images/hero_house.jpg"
                                                alt="Just a flower"
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        id="item4"
                                        class="carousel-item w-full"
                                    >
                                        <div v-if="property.verified">
                                            <img
                                                alt="Just a flower"
                                                :src="
                                                    property.media[0].full_url
                                                "
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                        <div v-else>
                                            <img
                                                src="/images/hero_house.jpg"
                                                alt="Just a flower"
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                    </div>
                                    <div
                                        id="item5"
                                        class="carousel-item w-full"
                                    >
                                        <div v-if="property.verified">
                                            <img
                                                alt="Just a flower"
                                                :src="
                                                    property.media[0].full_url
                                                "
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                        <div v-else>
                                            <img
                                                src="/images/hero_house.jpg"
                                                alt="Just a flower"
                                                class="object-cover w-full h-[300px] rounded-lg"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="absolute flex justify-center w-full py-2 gap-2 top-64"
                                >
                                    <a href="#item1">
                                        <div
                                            class="w-2 h-2 bg-slate-700/50 rounded-full"
                                        ></div>
                                    </a>
                                    <a href="#item1">
                                        <div
                                            class="w-2 h-2 bg-slate-700/50 rounded-full"
                                        ></div>
                                    </a>
                                    <a href="#item1">
                                        <div
                                            class="w-2 h-2 bg-slate-700/50 rounded-full"
                                        ></div>
                                    </a>
                                    <a href="#item1">
                                        <div
                                            class="w-2 h-2 bg-slate-700/50 rounded-full"
                                        ></div>
                                    </a>
                                    <a href="#item1">
                                        <div
                                            class="w-2 h-2 bg-slate-700/50 rounded-full"
                                        ></div>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="absolute w-full bottom-0 pb-2 opacity-0 hover:opacity-100 bg-slate-700/40 backdrop-blur-xl transition duration-700 ease-in-out"
                            >
                                <p
                                    class="text-slate-300 mt-2 pt-2 transition transform hover:-translate-y-2 duration-1000 ease-in-out z-10"
                                >
                                    {{ property.description }}
                                </p>
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <div class="flex items-center justify-between">
                                <h6 class="card-title">
                                    {{ property.name }}
                                </h6>
                                <div class="flex gap-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-gray-400/40 dark:text-slate-300/80"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 12.585l-4.95 2.536 1.05-5.977L2.1 7.464l6.117-1.02L10 0l1.783 6.444 6.117 1.02-4.95 2.536 1.05 5.977L10 12.585z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <p class="badge badge-outline">4.83</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-start gap-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-gray-400/40 dark:text-slate-300/80"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                        ></path>
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                        ></path>
                                    </svg>
                                    <span class="">address of properties</span>
                                </div>
                                <div class="flex justify-start gap-1">
                                    <span class=""> property type </span>
                                </div>
                                <div class="flex justify-end gap-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"
                                        />
                                    </svg>
                                    <span
                                        class="badge badge-accent dark:text-slate-300"
                                    >
                                        &#8358;
                                        <span class="font-semibold">{{
                                            property.price
                                        }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </template>
                </Link>
                <!-- <div v-if="property.media.length">
            <div v-for="(item, index) in property.media">
                <img :src="item.full_url" alt="" />
            </div>
        </div> -->
            </div>
            <!-- end of one card -->
        </div>

        <!-- small caurosel cards ends here -->
    </AppLayout>
</template>

<style scoped></style>
