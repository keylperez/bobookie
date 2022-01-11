<template>
  <Head title="Payment"/>
    
   <div class="font-main text-secondary">

      <div class="grid grid-cols-2 gap-14 mx-10 my-10">

        <div class="flex flex-row flex-wrap justify-end">
            <div class="text-sm font-bold mx-16">
              <Link href="/user/discoverbookdetails" class="flex flex-row items-center space-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg><p class="text-xs link-underline link-underline-black  cursor-pointer">BACK</p></Link> 
            </div>

            <div class="bg-secondary p-4 my-2 h-80 w-48 mt-6 bg-cover" :style="{'background-image': `url(img/Home/eternals_poster.jpg)`}"></div>
        </div>

        <div class="mt-6">
          <h1 class="text-primary text-2xl">ETERNALS</h1>
          <h1 class="text-secondary font-bold">PAYMENT DETAILS</h1>

          <div class="text-sm space-y-4">
            <div class="my-2">
              <p class="font-bold text-secondary">Card number</p>
              <input type="text" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
            </div>

            <div class="my-2">
              <p class="font-bold text-secondary">Cardholder’s name</p>
              <input type="text" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
            </div>
           
            <div class="my-2">
              <p class="font-bold text-secondary">Expiry Date</p>
              <input type="date" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
            </div>

            <div class="my-2">
              <p class="font-bold text-secondary">Security Code</p>
              <input type="password" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
            </div>


          </div>

          <div class="flex flex-col mt-4">
            <!-- <form @submit.prevent="submit" method="post"> -->
               <Link href="/user/discoverpaydetails"><button  class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary ">PROCEED</button></Link>
            <!-- </form> -->
          </div>
        </div>

        
      </div>
   </div>


</template>

<script>

import Layout from '../../Shared/Layout'
 
export default {
  data() {
    return {
      filename: "",
      ticketnum: 1
    }
  },
  layout: Layout,
  methods: {
  fileChoosen(event){
          this.filename = event.target.files[0].name;
  }
}
};
</script>

<style>
</style>
