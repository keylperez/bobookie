<template>
  <Head title="Movie Dashboard"/>
   <div class="font-main">
     <div class="flex justify-end mx-40">
         <Link href="/#"><button  class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary ">ADD MOVIE</button></Link>
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


</template>

<script>

import Layout from '../Shared/AdminLayout.vue'
import EditIcon from '../Shared/Edit.vue'
import DelIcon from '../Shared/Delete.vue'


export default {
  name: 'Movies',
  layout: Layout,
  components: { Layout,EditIcon,DelIcon },
};
</script>

<style>
</style>
