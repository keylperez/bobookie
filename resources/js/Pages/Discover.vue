<template>
  <Head title="Discover New Movies"/>
  <Layout>
    <div class="flex justify-center top-0">
       <h1 class="font-bold text-primary text-xl font-main mx">MOVIES THIS WEEK</h1>
       <br/>
        <MovieCard ></MovieCard>
    </div>

  </Layout>
</template>


<script>
import Layout from '../Shared/Layout'
import MovieCard from '../components/MovieCard'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  name: 'Users',
  components: { Layout, MovieCard, Head},
};
</script>

<style>
</style>
