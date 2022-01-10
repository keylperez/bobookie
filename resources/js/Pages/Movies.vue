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
    <div v-if="showModal" class="font-main  overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex flex-wrap">
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

                  <div class="flex flex-row flex-wrap space-x-8 justify-evenly">

                    <div class="text-sm mt-4 space-y-8 font-bold text-secondary">
                      <div>
                        <p>Enter Movie Name</p>
                        <input type="text" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
                      </div>

                      <div>
                        <p>Director</p>
                        <input type="text" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
                      </div>

                      <div>
                        <p>Genre</p>
                        <input type="text" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
                      </div>

                      <div>
                        <p>Start Date</p>
                        <input type="date" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
                      </div>

                      <div>
                        <p>End Date</p>
                        <input type="date" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52">
                      </div>

                    </div>

                    <div class="text-sm mt-4 space-y-8">

                      <div>
                        <p class="font-bold text-secondary">Movie Poster</p>
                        <label for="actual-btn">
                        <input v-on:change="fileChoosen" type="file" id="actual-btn" hidden/>
                          <div class="flex justify-between items-stretch shadow-md w-52 text-base font-normal text-gray-700 bg-softgray bg-clip-padding transition ease-in-out m-0 focus:text-gray-700 focus:bg-softgray">

                            <span class="flex flex-wrap flex-col p-2 overflow-x-hidden">{{ filename }}</span>

                            <p class="flex items-center justify-center bg-primary hover:bg-secondary p-1 px-4 m-0 text-sm text-white font-semibold cursor-pointer">UPLOAD</p>
                          </div>
                        </label>
                      </div>

                      <div class="selectdiv">
                        <!-- <label> -->
                        <p class="font-bold">Rating</p>
                            <select class="focus:outline-none cursor-pointer w-52 p-2">
                                <option selected> PG-13 </option>
                                <option>G</option>
                                <option>PG</option>
                                <option>R</option>
                                <option>NC-17</option>
                            </select>
                        <!-- </label> -->
                      </div>

                       <div>
                        <p>Description</p>
                        <textarea name="movie-desc" cols="30" rows="9" class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"></textarea>
                      </div>
                      
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


</template>

<script>

import Layout from '../Shared/AdminLayout.vue'
import EditIcon from '../Shared/Edit.vue'
import DelIcon from '../Shared/Delete.vue'


export default {
   data() {
      return {
        filename: "",
        showModal: false
      }
   },
   methods: {
    toggleModal: function(){
      this.showModal = !this.showModal;
    },
    fileChoosen(event){
          this.filename = event.target.files[0].name;
    }
  },
  name: 'Movies',
  layout: Layout,
  components: { Layout,EditIcon,DelIcon },
};
</script>

<style>
.selectdiv {
  position: relative;
  min-width: 208px;
}

/*To remove button from IE11, thank you Matt */
select::-ms-expand {
     display: none;
}

.selectdiv:after {
  content: '>';
  font: 17px "Consolas", monospace;
  color: rgb(255, 255, 255);
  background-color: #FEB155;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
  right: 5px;
  padding: 12.5px;
  position: absolute;
  pointer-events: none;
  cursor: pointer;
}

.selectdiv select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: block;
  width: 100%;
  max-width: 208px;
  height: 35px;
  float: right;
  margin: 5px 0px;
  margin-bottom: 30px;
  padding: 0px 24px;
  font-size: 16px;
  line-height: 1.75;
  color: #333;
  background-color: #E5E5E5;
  background-image: none;
}
</style>
