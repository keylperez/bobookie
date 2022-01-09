<template>
  <nav class="font-main">
      <p class="flex justify-end text-secondary mx-5">admin</p>
      <div class="flex-grow bg-secondary p-0.5 mx-5"/>
      
      <ul class="m-5 mt-0 pt-0 flex space-x-6 list-inside">
        <li>
          <NavLink href="/movies" :active="$page.url.startsWith('/movie')">MOVIES</NavLink>
        </li>
        <li>
          <NavLink href="/bookings" :active="$page.url.startsWith('/booking')">BOOKINGS</NavLink>
        </li>
      </ul>
  </nav>
</template>


<script>

import NavLink from './NavLink'

export default {
  name: 'Nav',
  components: {
    NavLink,
  },
};
</script>

<style>

</style>
