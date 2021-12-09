<template>
    <header class="m-10 ml-20">
        <h1 class="text-9xl text-primary font-bold">
            {{ $store.state.app }}
        </h1>
        <p class="text-2xl text-secondary pl-2 font-bold">
            {{ $store.state.appDescription }}
        </p>
    </header>
</template>

<script>
export default {};
</script>
