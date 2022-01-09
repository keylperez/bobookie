<template>
    <Head title="Discover New Movies" />
    <div class="flex justify-center top-0">
        <h1 class="font-bold text-primary text-xl font-main mx">
            MOVIES THIS WEEK
        </h1>
    </div>

    <div class="flex flex-wrap justify-center">
        <MovieCard></MovieCard>
        <MovieCard></MovieCard>
        <MovieCard></MovieCard>
    </div>
</template>

<script>
import MovieCard from "../Shared/MovieCard";

export default {
    name: "Users",
    components: { MovieCard },
};
</script>

<style></style>
