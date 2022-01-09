<template>
  <Head title="Book Movie"/>
    
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

          <div class="text-sm my-2 space-y-4">
            <p class="font-bold">Date</p>
            <input type="date" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">

            <p class="font-bold">Time Slot</p>
            <select class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
                  <option>11:00 AM</option>
                  <option>1:00 PM</option>
                  <option>3:00 PM</option>
            </select>

            <p class="font-bold mb-0">Number of Tickets</p>


            <div class="flex flex-row justify-between items-center w-24">
              <button  @click="decrement"  class=" h-8 w-8 rounded-full overflow-hidden bg-primary flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M20 12H4" />
                </svg>
              </button>

                <p>{{form.ticketnum}}</p>

              <button @click="increment" class=" h-8 w-8 rounded-full overflow-hidden bg-primary flex justify-center items-center">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 4v16m8-8H4" />
              </svg>
              </button>
            </div>



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
  components: { Layout },
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
