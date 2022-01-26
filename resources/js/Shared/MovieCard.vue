<template>
    <div
        class="flex flex-col items-center text-secondary text-center font-main my-5 mx-10 text-xs"
    >
        <div
            class="bg-secondary p-4 my-2 h-80 w-48 bg-cover"
            :style="{ 'background-image': `url(${movie.image})` }"
        ></div>
        <p>{{ movie.title }}</p>
        <div>{{ movie.rating }}</div>
        <div class="font-normal my-2">
            <p>EVERY 1PM</p>
            <p>EVERY 6PM</p>
        </div>
<<<<<<< HEAD
        <Link :href="route('book', { movie: movie })">
            <button class="btn-primary w-32">BOOK</button>
        </Link>
        <Link :href="route('details', { movie: movie })">
            <button
=======
        <Link href="/discoverbook"
            ><button class="btn-primary w-32">BOOK</button></Link
        >
        <Link href="/discoverdetails"
            ><button
>>>>>>> parent of d4f86a3 (Merge branch 'main' of https://github.com/keylperez/bobookie)
                class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray"
            >
                DETAILS
            </button></Link
        >
    </div>
</template>

<script setup>
import { ref } from "vue";

const movie_img = ref("../../img/Home/eternals_poster.jpg");
defineProps({ movie: Object });
</script>

<style></style>
