<template>

  <Link class="text-secondary font-bold link link-underline link-underline-black cursor-pointer" 
        :class="{'font-bold text-active link-underline-white': active}">
    <slot />
  </Link>
  
</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';

export default {
  name: 'NavLink',
  props: {
    active: Boolean,
  },
  components: { Link }
};
</script>

<style>
</style>
