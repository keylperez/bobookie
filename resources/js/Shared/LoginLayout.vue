<template>
  <section class="p-10 pb-0">
    <Header></Header>
  </section>

  <section>
  <div class="mx-auto p-10 pb-0">
    <slot/>
  </div>
</section>

</template>

<script>

import Header from './LPHeader';
export default {
  name: 'LoginLayout',
  components: { Header } 
};
</script>

<style>
</style>
