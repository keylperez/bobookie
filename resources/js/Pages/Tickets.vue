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
          
           <table class="mx-3 table-fixed">

              <tr>
                    <td class="text-secondary py-4 px-2" width="32%">Eternals</td>
                    <td class="font-thin text-secondary py-4  text-center ">
                      <p>11 AM</p>
                      <p>DECEMBER 15, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end"><button class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray"><Link href="/ticketdetails">DETAILS</Link> </button></td>
              </tr>

              <tr>
                    <td class="text-secondary py-4 px-2" >Venom: Let There Be Carnage</td>
                    <td class="font-thin text-secondary py-4 text-center">
                      <p>1 PM</p>
                      <p>DECEMBER 16, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end" ><button class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray">DETAILS</button></td>
              </tr>

              <tr>
                    <td class="text-secondary py-4 px-2">Spiderman: No Way Home</td>
                    <td class="font-thin text-secondary py-4 text-center">
                      <p>11 AM</p>
                      <p>DECEMBER 16, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end"><button class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray">DETAILS</button></td>
              </tr>

           </table>
         
         
          <h3 class="text-primary mx-3 mt-8">PAST</h3>
          <div class="bg-secondary mx-3 p-0.5"/>

            <table class="mx-3 table-fixed">

              <tr>
                    <td class="text-secondary py-4 px-2" width="32%">Crazy Rich Asians</td>
                    <td class="font-thin text-secondary py-4 text-center">
                      <p>1 PM</p>
                      <p>DECEMBER 11, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end"><button class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray">DETAILS</button></td>
              </tr>
              <tr>
                    <td class="text-secondary py-4 px-2">Shang-Chi and the Legend of the Ten Rings</td>
                    <td class="font-thin text-secondary py-4 text-center">
                      <p>1 PM</p>
                      <p>DECEMBER 11, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end"><button class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray">DETAILS</button></td>
              </tr>

           </table>
      </div>
   </div>


  </Layout>
</template>

<script>

import Layout from '../Shared/Layout'
import { Head } from '@inertiajs/inertia-vue3'
import { Link } from '@inertiajs/inertia-vue3';

export default {
  name: 'Tickets',
  components: { Layout, Head,Link },
};
</script>

<style>
</style>
