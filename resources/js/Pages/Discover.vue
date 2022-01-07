<template>
  <Head title="Discover New Movies"/>
    <div class="flex justify-center top-0">
       <h1 class="font-bold text-primary text-xl font-main mx">MOVIES THIS WEEK</h1>
    </div>

    <div class="flex flex-wrap justify-center">
      <MovieCard></MovieCard>
      <MovieCard></MovieCard>
      <MovieCard></MovieCard>
    </div>
</template>


<script>
import Layout from '../Shared/Layout'
import MovieCard from '../components/MovieCard'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  name: 'Users',
  layout: Layout,
  components: { Layout, MovieCard, Head},
};
</script>

<style>
</style>
