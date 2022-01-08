<template>
  <Head title="Discover New Movies"/>
    
   <div class="font-main text-secondary">

      <div class="grid grid-cols-2 gap-14 mx-10 my-10">

        <div class="flex flex-row flex-wrap justify-end">
            <div class="text-sm font-bold mx-16">
               <Link href="/discover" class="flex flex-row items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg><p class="text-xs">BACK</p></Link> 
            </div>

            <div class="bg-secondary p-4 my-2 h-80 w-48 mt-6 bg-cover" :style="{'background-image': `url(img/Home/eternals_poster.jpg)`}"></div>
        </div>

        <div class="mt-6">
          <h1 class="text-primary text-2xl">ETERNALS</h1>

          <div class="text-sm my-2">
            <p class="font-bold">Rating: <span class="font-thin">PG-13</span></p>
            <p class="font-bold">Genre: <span class="font-thin">Adventure, Action</span></p>
            <p class="font-bold">Director: <span class="font-thin">Chloé Zhao</span></p>
            <p class="font-bold">Stars: <span class="font-thin">Gemma Chan, Richard Madden, Angelina Jolie</span></p>
            <p class="font-bold w-2/3">Description: <span class="font-thin">Marvel Studios' Eternals features an exciting new team of Super Heroes in the Marvel Cinematic Universe, ancient aliens who have been living on Earth in secret for thousands of years. Following the events of Avengers: Endgame, an unexpected tragedy forces them out of the shadows to reunite against mankind's most ancient enemy, the Deviants.</span></p>
          </div>

          <div class="flex flex-col">
            <Link href="/discoverbook"><button class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary ">BOOK</button></Link>
          </div>
        </div>
        
      </div>
   </div>


</template>

<script>

import Layout from '../Shared/Layout'
import { Head } from '@inertiajs/inertia-vue3'

 
export default {
  name: 'DiscoverDetails',
  layout: Layout,
  components: { Layout,Head},
};
</script>

<style>
</style>
