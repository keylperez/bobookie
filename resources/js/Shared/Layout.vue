<template>

<section class="p-10 pb-0">
  <Header/>
  <Nav/>
</section>

<section>
  <div class="mx-auto">
    <slot/>
  </div>
</section>

</template>

<script>
import Nav from './Nav'
import Header from './Header'

export default {
  name: 'Layout',
  components: { Nav,Header }
};
</script>

<style>
</style>

