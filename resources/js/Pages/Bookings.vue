<template>
  <Head title="Booking"/>
   <div class="font-main">

      <div class="flex flex-col justify-center mx-40 mt-16">

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

                        <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                        <Link href="#"><DelIcon/></Link>

                        
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

                        <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                        <Link href="#"><DelIcon/></Link>

                        
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

                        <Link href="#" class="cursor-pointer"><EditIcon/></Link>
                        <Link href="#"><DelIcon/></Link>

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
