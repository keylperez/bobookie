<template>
  <Head title="Movie Dashboard"/>
   <div class="font-main">
     <div class="flex justify-end mx-40">
         <Link href="/#"><button  class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary ">ADD MOVIE</button></Link>
      </div>

      <div class="flex flex-col justify-center mx-40">

          <table class="mx-2 table-fixed mt-4">
            <thead class="border-b-4 border-secondary">
                      <th class="text-secondary" align="left">TITLE</th>
                      <th class="text-secondary">START DATE</th>
                      <th class="text-secondary">END DATE</th>
                      <th class="text-secondary">TIME SLOTS</th>
                      <th class="text-secondary">RATING</th>
                      <th class="text-secondary" align="right">ACTIONS</th>
            </thead>

               <tr align="center">
                      <td class="text-secondary py-4" align="left">Eternals</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="text-secondary font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="text-secondary font-thin py-4">PG-13</td>
                      <td class="text-secondary py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="28px" height="28px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 512"><path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9L216.2 301.8l-7.3 65.3l65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1l30.9-30.9c4-4.2 4-10.8-.1-14.9z" fill="#2a2a2a"/></svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="35px" height="35px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z" fill="#2a2a2a"/></svg></td>
              </tr>

               <tr align="center">
                      <td class="text-secondary py-4" align="left">Venom: Let There Be Carnage</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="text-secondary font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="text-secondary font-thin py-4">PG-13</td>
                      <td class="text-secondary py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="28px" height="28px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 512"><path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9L216.2 301.8l-7.3 65.3l65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1l30.9-30.9c4-4.2 4-10.8-.1-14.9z" fill="#2a2a2a"/></svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="35px" height="35px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z" fill="#2a2a2a"/></svg></td>
              </tr>

            <tr align="center">
                      <td class="text-secondary py-4" align="left">Spiderman: No Way Home </td>
                      <td class="text-secondary font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="text-secondary font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="text-secondary font-thin py-4">PG-13</td>
                      <td class="text-secondary py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <button class="cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="28px" height="28px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 512"><path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9L216.2 301.8l-7.3 65.3l65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1l30.9-30.9c4-4.2 4-10.8-.1-14.9z" fill="#2a2a2a"/></svg>
                        </button>

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="35px" height="35px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z" fill="#2a2a2a"/></svg>
                        
                      </td>
              </tr>

               <tr align="center">
                      <td class="text-secondary py-4" align="left">Crazy Rich Asians</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 12, 2021</td>
                      <td class="text-secondary font-thin py-4">DECEMBER 18, 2021</td>
                      <td class="text-secondary font-thin py-4">11:00 AM, 5:00 PM</td>
                      <td class="text-secondary font-thin py-4">PG-13</td>
                      <td class="text-secondary py-4 flex flex-row justify-end items-center space-x-3" align="right">

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="28px" height="28px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 512"><path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9L216.2 301.8l-7.3 65.3l65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1l30.9-30.9c4-4.2 4-10.8-.1-14.9z" fill="#2a2a2a"/></svg>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="35px" height="35px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z" fill="#2a2a2a"/></svg></td>
              </tr>

          </table>
      </div>
   </div>


</template>

<script>

import Layout from '../Shared/AdminLayout.vue'

export default {
  name: 'Movies',
  layout: Layout,
  components: { Layout },
};
</script>

<style>
</style>
