<template>
    <Head title="Discover New Movies" />
    <div class="flex justify-center top-0">
        <h1 class="font-bold text-primary text-xl font-main mx">
            MOVIES THIS WEEK
        </h1>
    </div>

    <div class="flex flex-wrap justify-center">
        <MovieCard v-for="movie in movies" :key="movie.id" :movie="movie" />
    </div>
</template>

<script setup>
import MovieCard from "../../Shared/MovieCard";

defineProps({ movies: Array });
</script>

<style></style>