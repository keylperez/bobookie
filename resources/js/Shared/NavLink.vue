<template>
    <Link
        class="text-secondary font-bold link link-underline link-underline-black cursor-pointer"
        :class="{ 'font-bold text-active link-underline-white': active }"
    >
        <slot />
    </Link>
</template>

<script>
export default {
    name: "NavLink",
    props: {
        active: Boolean,
    },
};
</script>

<style></style>
