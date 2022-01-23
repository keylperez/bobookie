<template>
    <nav class="font-main">
        <p class="flex justify-end text-secondary mx-5">
            {{ user.user.username }}
        </p>
        <div class="flex-grow bg-secondary p-0.5 mx-5" />

        <ul class="m-5 mt-0 pt-0 flex space-x-6 list-inside">
            <li>
                <NavLink
                    href="/user/discover"
                    :active="$page.url.startsWith('/user/discover')"
                    >DISCOVER</NavLink
                >
            </li>
            <li>
                <NavLink
                    href="/user/tickets"
                    :active="$page.url.startsWith('/user/ticket')"
                    >MY TICKETS</NavLink
                >
            </li>
        </ul>
    </nav>
</template>

<script>
import NavLink from "./NavLink";
import { usePage } from "@inertiajs/inertia-vue3";

export default {
    name: "Nav",
    setup() {
        const user = computed(() => usePage().props.value.auth);
    },
    components: {
        NavLink,
    },
};
</script>

<style></style>
