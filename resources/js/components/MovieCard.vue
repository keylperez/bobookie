<template>

  <div class="flex flex-col items-center text-secondary text-center font-main my-5 mx-10 text-xs">
    <!-- <img src="require('../assets/venom_poster.jpg')"/> -->
    <div class="bg-secondary p-4 my-2 h-80 w-48 bg-cover" :style="{'background-image': `url(${movie_img})`}"></div>
    <!-- <div class="bg-secondary p-4 w-48 h-72 mb-2 ">Image Here</div> -->
    <p>Venom: Let There Be Carnage</p>
    <div>PG-13</div>
    <div class="font-normal my-2">
      <p>EVERY 1PM</p> 
      <p>EVERY 6PM</p> 
    </div>

    <button class="bg-primary text-white p-2 my-1 font-bold w-32 hover:bg-secondary ">BOOK</button>
    <button class="bg-softgray text-primary p-2 my-1 font-bold w-32 hover:bg-secondary hover:text-softgray">DETAILS</button>
  </div>

</template>

<script>
import { ref } from "vue";

export default {
  name: 'MovieCard',
   setup() {
        const movie_img = ref("../../img/Home/venom_poster.jpg");

        return {
            movie_img,
        };
    },
};
</script>

<style>
</style>