<template>
    <Head title="Movie Detail" />

    <div class="font-main text-secondary">
        <div class="grid grid-cols-2 gap-14 mx-10 my-10">
            <div class="flex flex-row flex-wrap justify-end">
                <div class="text-sm font-bold mx-16">
                    <Link
                        :href="route('home')"
                        class="flex flex-row items-center space-x-1"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7"
                            />
                        </svg>
                        <p
                            class="text-xs link-underline link-underline-black cursor-pointer"
                        >
                            BACK
                        </p></Link
                    >
                </div>

                <div
                    class="bg-secondary p-4 my-2 h-80 w-48 mt-6 bg-cover bg-center"
                    :style="{
                        'background-image': `url(${movie.img})`,
                    }"
                ></div>
            </div>

            <div class="mt-6">
                <h1 class="text-primary text-2xl">{{ movie.title }}</h1>

                <div class="text-sm my-2">
                    <p class="font-bold">
                        Rating:
                        <span class="font-thin">{{ movie.rating }}</span>
                    </p>
                    <p class="font-bold">
                        Genre: <span class="font-thin">{{ movie.genre }}</span>
                    </p>
                    <p class="font-bold">
                        Director: <span class="font-thin">{{ movie.director }}</span>
                    </p>
                    <p class="font-bold">
                        Runtime:
                        <span class="font-thin">{{ movie.runtime }}</span>
                    </p>
                    <p class="font-bold">
                        Price:
                        <span class="font-thin">₱{{ movie.price }}.00</span>
                    </p>
                    <p class="font-bold">
                        Stars:
                        <span class="font-thin"
                            >Gemma Chan, Richard Madden, Angelina Jolie</span
                        >
                    </p>
                    <p class="font-bold w-2/3">
                        Description:
                        <span class="font-thin">{{ movie.description }}</span>
                    </p>
                </div>

                <div class="flex flex-col">
                    <Link
                        :href="
                            route('book', {
                                id: movie.id,
                            })
                        "
                        ><button class="btn-primary">BOOK</button></Link
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({ item: Object });
const movie = props.item[0];
</script>

<style></style>
