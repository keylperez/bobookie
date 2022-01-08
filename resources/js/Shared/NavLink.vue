<template>

  <Link class="text-secondary font-bold hover:text-primary" 
        :class="{'font-bold text-active': active}">
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
