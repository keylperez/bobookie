<template>
  <Head title="Discover New Movies"/>
    
   <div class="font-main text-secondary">

      <div class="grid grid-cols-2 gap-14 mx-10 my-10">

        <div class="flex flex-row flex-wrap justify-end">
            <div class="text-sm font-bold mx-16">
              <Link href="/discoverbook" class="flex flex-row items-center space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg><p class="text-xs">BACK</p></Link> 
            </div>

            <div class="bg-secondary p-4 my-2 h-80 w-48 mt-6 bg-cover" :style="{'background-image': `url(img/Home/eternals_poster.jpg)`}"></div>
        </div>

        <div class="mt-6">
          <h1 class="text-primary text-2xl">ETERNALS</h1>

          <div class="text-sm my-2 space-y-4">
            
            <h1 class="font-bold text-primary">Ticket 1</h1>

            <p class="font-bold text-secondary">Name</p>
            <input type="text" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">

            <p class="font-bold text-secondary">COVID-19 Vaccination Certificate (Vaxcert)</p>
            
                <!-- <label for="formFile" class="form-label inline-block mb-2 text-gray-700">Default file input example</label> -->
                  <input type="file" class="form-control w-64 px-3 py-1.5
                  text-base font-normal text-gray-700 bg-softgray bg-clip-padding transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
          </div>

          <div class="flex flex-col mt-4">
            <!-- <form @submit.prevent="submit" method="post"> -->
               <Link href="/discoverbookdetails"><button  class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary ">PROCEED</button></Link>
            <!-- </form> -->
          </div>
        </div>

        
      </div>
   </div>


</template>

<script>

import Layout from '../Shared/Layout'
import { Head } from '@inertiajs/inertia-vue3'
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
 
export default {
  name: 'Book',
  
  setup () {
    const form = reactive({
      ticketnum: 1,
    })

    function submit() {
      Inertia.post('/bookdata', form)
    }

    return { form, submit }
  },
  layout: Layout,
  components: { Head },
  methods: {
  increment () {
    this.form.ticketnum += 1;
  },
  decrement () {
    if(this.form.ticketnum > 1){
      this.form.ticketnum -= 1;
    }

  }
}
};
</script>

<style>
</style>
