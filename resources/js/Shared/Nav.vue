<template>
    <nav class="font-main">
        <div class="flex justify-end">
            <p class="flex-end justify-end text-secondary mx-5">
                {{ user.username }}
            </p>
            <Link
                href="/logout"
                method="post"
                as="button"
                class="flex-end justify-end text-secondary mx-5 font-bold"
            >
                Log-out
            </Link>
        </div>
        <div class="flex-grow bg-secondary p-0.5 mx-5" />

        <ul class="m-5 mt-0 pt-0 flex space-x-6 list-inside">
            <li>
                <NavLink
                    href="/discover"
                    :active="$page.url.startsWith('/discover')"
                    >DISCOVER</NavLink
                >
            </li>
            <li>
                <NavLink
                    href="/tickets"
                    :active="$page.url.startsWith('/ticket')"
                    >MY TICKETS</NavLink
                >
            </li>
        </ul>
    </nav>
</template>

<script setup>
import NavLink from "./NavLink";
import { usePage } from "@inertiajs/inertia-vue3";
import { computed } from "vue";

const user = computed(() => usePage().props.value.auth.user);
</script>

<style></style>
