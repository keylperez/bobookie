<template>
  <Head title="Movie Dashboard"/>
   <div class="font-main">
     <div class="flex justify-end mx-40">
         <button  class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary" v-on:click="toggleModal()">ADD MOVIE</button>
      </div>

      <div class="flex flex-col justify-center mx-40">

          <table class="mx-2 table-fixed mt-4">
            <thead class="border-b-4 border-secondary text-secondary">
                      <th align="left">TITLE</th>
                      <th>START DATE</th>
                      <th>END DATE</th>
                      <th>TIME SLOTS</th>
                      <th>RATING</th>
                      <th align="right">ACTIONS</th>
            </thead>

              
               <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">Eternals</td>
                      <td class="font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="font-thin py-4">PG-13</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                        <Link href="#"><DelIcon/></Link>

                        
                        </td>
              </tr>

               <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">Venom: Let There Be Carnage</td>
                      <td class="font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="font-thin py-4">PG-13</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                         <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                         <Link href="#"><DelIcon/></Link>

                      </td>
              </tr>

            <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">Spiderman: No Way Home </td>
                      <td class="font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="font-thin py-4">PG-13</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                         <Link href="#"><DelIcon/></Link>                      

                      </td>
              </tr>

               <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">Crazy Rich Asians</td>
                      <td class="font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="font-thin py-4">PG-13</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                         <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                         <Link href="#"><DelIcon/></Link>

                      </td>
              </tr>

          </table>
      </div>
   </div>

<div>
   <!-- MODAL HERE -->
    <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
      <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div class="border-0 shadow-lg relative flex flex-col   bg-white outline-none focus:outline-none">
          <!--header-->
          <!-- <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
            <h3 class="text-3xl font-semibold">
              Modal Title
            </h3>
            <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" v-on:click="toggleModal()">
              <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                ×
              </span>
            </button>
          </div> -->
          <!--body-->
          <div class="relative p-6 flex-auto h-80">
            <p class="my-4 text-blueGray-500 text-lg leading-relaxed">
              I always felt like I could do anything. That’s the main
              thing people are controlled by! Thoughts- their perception
              of themselves! They're slowed down by their perception of
              themselves. If you're taught you can’t do anything, you
              won’t do anything. I was taught I could do everything.
            </p>
          </div>
          <!--footer-->
          <!-- <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
            <button class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" v-on:click="toggleModal()">
              Close
            </button>
            <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" v-on:click="toggleModal()">
              Save Changes
            </button>
          </div> -->
        </div>
      </div>
    </div>
    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
  </div>


</template>

<script>

import Layout from '../Shared/AdminLayout.vue'
import EditIcon from '../Shared/Edit.vue'
import DelIcon from '../Shared/Delete.vue'


export default {
   data() {
      return {
         showModal: false
      }
   },
   methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    }
  },
  name: 'Movies',
  layout: Layout,
  components: { Layout,EditIcon,DelIcon },
};
</script>

<style>
</style>
