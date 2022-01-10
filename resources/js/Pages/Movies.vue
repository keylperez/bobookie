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
    <div v-if="showModal" class="font-main overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
      <div class="relative w-auto my-8 mx-auto max-w-3xl">
        <!--content-->
        <div class="shadow-lg relative flex flex-col   bg-white outline-none focus:outline-none">
         
          <!--header-->
          <div class="flex items-start justify-between mt-10 ml-2 p-2">
            <div class="text-sm font-bold mx-2 text-secondary">
               
               <button v-on:click="toggleModal()" class="flex flex-row items-center space-x-1 font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg><p class="text-xs link-underline link-underline-black text-secondary cursor-pointer">BACK</p>
              </button> 

            </div>
          </div>


          <!--body-->
          <div class="p-6 flex-auto h-auto">

            <div class="flex flex-row text-secondary font-main flex-wrap justify-end">

          <div>
              <h1 class="text-primary text-2xl">MOVIE DETAILS</h1>

              <div class="text-sm my-2">
                <p class="font-bold">Rating: <span class="font-thin">PG-13</span></p>
                <p class="font-bold">Genre: <span class="font-thin">Adventure, Action</span></p>
                <p class="font-bold">Director: <span class="font-thin">Chloé Zhao</span></p>
                <p class="font-bold">Stars: <span class="font-thin">Gemma Chan, Richard Madden, Angelina Jolie</span></p>
                <p class="font-bold w-2/3">Description: <span class="font-thin ">Marvel Studios' Eternals features an exciting new team of Super Heroes in the Marvel Cinematic Universe, ancient aliens who have been living on Earth in secret for thousands of years. Following the events of Avengers: Endgame, an unexpected tragedy forces them out of the shadows to reunite against mankind's most ancient enemy, the Deviants.</span></p>
              </div>

              <div class="flex flex-col">
                <Link href="#"><button class="btn-primary">BOOK</button></Link>
                <button v-on:click="toggleModal()" class="btn-secondary">CANCEL</button>
              </div>
        </div>

        </div>
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
	/* .link-underline {
		border-bottom-width: 0;
		background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
		background-size: 0 3px;
		background-position: 0 100%;
		background-repeat: no-repeat;
		transition: background-size .5s ease-in-out;
	}

	.link-underline-black {
		background-image: linear-gradient(transparent, transparent), linear-gradient(#FEB155,#FEB155)
	}

	.link-underline:hover {
		background-size: 100% 3px;
		background-position: 0 100%
	} */
</style>
