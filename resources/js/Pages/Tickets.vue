<template>
  <Head title="Book Tickets Now!"/>
  <Layout>
    
   <div class="font-main">
     <div class="flex justify-center">
         <h1 class="font-bold text-primary text-xl">BOOKED MOVIES</h1>
      </div>

      <div class="flex flex-col justify-center mx-40">
          <h3 class="text-primary mx-3">UPCOMING</h3>
          <div class="bg-secondary mx-3 p-0.5"/>

         
          <h3 class="text-primary mx-3 mt-16">PAST</h3>
          <div class="bg-secondary mx-3 p-0.5"/>
      </div>
   </div>


  </Layout>
</template>

<script>

import Layout from '../Shared/Layout'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  name: 'Tickets',
  components: { Layout, Head },
};
</script>

<style>
</style>
