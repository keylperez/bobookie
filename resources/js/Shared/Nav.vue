<template>
  <nav class="font-main">
      <p class="flex justify-end text-secondary mx-5">username</p>
      <div class="flex-grow bg-secondary p-0.5 mx-5"/>
      
      <ul class="m-5 mt-0 pt-0 flex space-x-6 list-inside">
        <li>
          <NavLink href="/discover" :active="$page.url.startsWith('/discover')">DISCOVER</NavLink>
        </li>
        <li>
          <NavLink href="/tickets" :active="$page.url.startsWith('/ticket')">MY TICKETS</NavLink>
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
