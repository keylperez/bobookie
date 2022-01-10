<template>
  <Head title="Booking"/>
   <div class="font-main">

      <div class="flex flex-col justify-center sm:mx-2 sm:text-xs md:text-base md:mx-40 mt-16">

          <table class="mx-2 table-fixed mt-4">
            <thead class="border-b-4 border-secondary text-secondary">
                      <th align="left">USER ID</th>
                      <th>USERNAME</th>
                      <th>TICKETS</th>
                      <th>MOVIE</th>
                      <th>DATE</th>
                      <th>STATUS</th>
                      <th align="right">ACTIONS</th>
            </thead>

              
              <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">#1234568</td>
                      <td class="font-thin py-4">kimNamjoon</td>
                      <td class="font-thin py-4">1</td>
                      <td class="font-thin py-4">Eternals</td>
                      <td class="font-thin py-4">December 15, 2021</td>
                      <td class="font-thin py-4">Confirmed</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <button v-on:click="toggleModal()"><EditIcon/></button>
                        <button v-on:click="toggleDel()"><DelIcon/></button>

                        
                        </td>
              </tr>

              <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">#1234569</td>
                      <td class="font-thin py-4">kimSeokjin</td>
                      <td class="font-thin py-4">2</td>
                      <td class="font-thin py-4">Venom: Let There Be Carnage</td>
                      <td class="font-thin py-4">December 13, 2021</td>
                      <td class="font-thin py-4">Confirmed</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <button v-on:click="toggleModal()"><EditIcon/></button>
                        <button v-on:click="toggleDel()"><DelIcon/></button>

                        
                      </td>
              </tr>
           
              <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">#1234568</td>
                      <td class="font-thin py-4">minYoongi</td>
                      <td class="font-thin py-4">5</td>
                      <td class="font-thin py-4">Venom: Let There Be Carnage</td>
                      <td class="font-thin py-4">December 12, 2021</td>
                      <td class="font-thin py-4">Cancelled</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <button v-on:click="toggleModal()"><EditIcon/></button>
                        <button v-on:click="toggleDel()"><DelIcon/></button>

                      </td>
              </tr>
           
              <tr align="center" class="text-secondary">
                      <td class="py-4" align="left">#1235558</td>
                      <td class="font-thin py-4">jungHoseok</td>
                      <td class="font-thin py-4">1</td>
                      <td class="font-thin py-4">Spiderman: No Way Home</td>
                      <td class="font-thin py-4">December 12, 2021</td>
                      <td class="font-thin py-4">Confirmed</td>
                      <td class="py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <button v-on:click="toggleModal()"><EditIcon/></button>
                        <button v-on:click="toggleDel()"><DelIcon/></button>

                      </td>
              </tr>
          



          </table>
      </div>
   </div>


    <!-- MODAL -->

    <div>
   <!-- MODAL HERE -->
    <div v-if="showModal" class="font-main  overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex flex-wrap">
      <div class="relative w-auto my-8 mx-auto max-w-4xl">
        <!--content-->
        <div class="shadow-lg relative flex flex-col   bg-white outline-none focus:outline-none">
         
          <!--header-->
          <div class="flex items-start justify-between mt-10 ml-2 p-2">
            <div class="text-sm font-bold mx-2 text-secondary">
               
               <button v-on:click="toggleModal()" class="flex flex-row items-center space-x-1 font-bold">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg><p class="text-xs text-secondary link-underline link-underline-black  cursor-pointer">BACK</p>
              </button> 

            </div>
          </div>


          <!--body-->
          <div class="p-6 flex-auto h-auto">

            <div class="flex flex-row text-secondary font-main flex-wrap justify-end">

                <div>
                    <h1 class="text-primary text-2xl">BOOKING DETAILS</h1>

                  <div class="flex flex-row flex-wrap space-x-8 justify-evenly">

                    <div class="text-sm mt-4 space-y-2 font-bold text-secondary">
                      <div class="font-thin">
                        <p>kimNamjoon</p>
                        <p>Transaction#0000</p>
                      </div>
                      <div>
                        <p>Movie</p>
                        <input type="text" placeholder="Eternals" class="input-primary placeholder-secondary">
                      </div>

                      <div>
                        <p>Date Booked</p>
                        <input type="date" :placeholder="new Date()" v-model="myDate" class="input-primary placeholder-secondary">
                      </div>

                      <div>
                        <p>Time Booked</p>
                        <input type="text"  placeholder="11:00 AM" class="input-primary placeholder-secondary">
                      </div>

                    </div>

                    <div class="text-sm mt-4 space-y-2">
                        <h1 class="text-primary text-xl">TICKETS</h1>

                        <table class="mx-2 table-fixed mt-4">
                                  <thead class="text-secondary ">
                                            <th align="left">Name</th>
                                            <th>Seat Location</th>
                                            <th align="right">Ticket ID</th>
                                  </thead>

                        
                                  <tr align="center" class="text-secondary font-thin">
                                          <td class="pr-4 flex flex-row items-center" align="left">Juan de la Cruz</td>
                                          <td class="font-thin ">
                                            <div class="selectdiv">
                                            <!-- <label> -->
                                                <select class="focus:outline-none cursor-pointer p-2">
                                                    <option selected> A1 </option>
                                                    <option>A2</option>
                                                    <option>A3</option>
                                                </select>
                                            <!-- </label> -->
                                            </div>
                                          </td>
                                          <td class="pl-4 flex flex-row justify-end items-center" align="right">Ticket#0000</td>
                                  </tr>
                                  <tr align="center" class="text-secondary font-thin">
                                          <td class="pr-4 flex flex-row items-center" align="left">Juan de la Cruz</td>
                                          <td class="font-thin ">
                                            <div class="selectdiv">
                                            <!-- <label> -->
                                                <select class="focus:outline-none cursor-pointer p-2">
                                                    <option selected> A1 </option>
                                                    <option>A2</option>
                                                    <option>A3</option>
                                                </select>
                                            <!-- </label> -->
                                            </div>
                                          </td>
                                          <td class="pl-4 flex flex-row justify-end items-center space-x-3" align="right">Ticket#0000</td>
                                  </tr>
                                  <tr align="center" class="text-secondary font-thin">
                                          <td class="pr-4 flex flex-row items-center" align="left">Juan de la Cruz</td>
                                          <td class="font-thin ">
                                            <div class="selectdiv">
                                            <!-- <label> -->
                                                <select class="focus:outline-none cursor-pointer p-2">
                                                    <option selected> A1 </option>
                                                    <option>A2</option>
                                                    <option>A3</option>
                                                </select>
                                            <!-- </label> -->
                                            </div>
                                          </td>
                                          <td class="pl-4 flex flex-row justify-end items-center space-x-3" align="right">Ticket#0000</td>
                                  </tr>

                                  


                        </table>
                    </div>

                  </div>

                    <div class="flex flex-row justify-center space-x-4 mb-8 mt-12">
                      <button v-on:click="toggleModal()" class="btn-secondary">CANCEL</button>
                      <Link href="#"><button class="btn-primary">SAVE</button></Link>
                    </div>
                    
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
  </div>

 <!-- DELETE CONFIRMATION MODAL HERE -->
    <div>
   <!-- MODAL HERE -->
    <div v-if="delModal" class="font-main  overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex flex-wrap">
      <div class="relative w-auto my-8 mx-auto max-w-3xl">
        <!--content-->
        <div class="shadow-lg relative flex flex-col   bg-white outline-none focus:outline-none">
         
          <!--body-->
          <div class="p-6 flex-auto h-auto">

            <div class="flex flex-row text-secondary font-main flex-wrap justify-end">

                <div>
                    <h1 class="text-2xl m-20 text-center">ARE YOU SURE YOU WANT TO REMOVE THIS RECORD?</h1>

                    <div class="flex flex-row justify-center space-x-4 mb-8 mt-8">
                      <button v-on:click="toggleDel()" class="btn-secondary">CANCEL</button>
                      <Link href="#"><button class="btn-primary">CONFIRM</button></Link>
                    </div>
                    
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div v-if="delModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
  </div>

</template>

<script>

import Layout from '../Shared/AdminLayout.vue'
import EditIcon from '../Shared/Edit.vue'
import DelIcon from '../Shared/Delete.vue'

export default {
  data() {
      return {
        filename: "",
        showModal: false,
        delModal: false,
        myDate : new Date().toISOString().slice(0,10)
      }
   },
  layout: Layout,
  components: { Layout,EditIcon,DelIcon },
  methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    },
    toggleDel: function(){
      this.delModal = !this.delModal;
    },
  },
};
</script>

<style>
</style>
