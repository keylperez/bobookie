<template>
    <nav class="font-main">
        <div class="flex justify-end" v-if="$page.props.auth">
            <Link href="/user" class="flex-end justify-end text-secondary mx-5">
                {{ $page.props.auth.user.username }}
            </Link>
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
                <NavLink href="/" :active="$page.url.startsWith('/discover')"
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
            <li v-if="$page.props.auth">
                <NavLink
                    href="/movies"
                    v-if="$page.props.auth.user.type === 'admin'"
                    :active="$page.url.startsWith('/movies')"
                    >MOVIES</NavLink
                >
            </li>
            <li v-if="$page.props.auth">
                <NavLink
                    href="/bookings"
                    v-if="$page.props.auth.user.type === 'admin'"
                    :active="$page.url.startsWith('/bookings')"
                    >BOOKINGS</NavLink
                >
            </li>
            <li v-if="$page.props.auth">
                <NavLink
                    href="/users"
                    v-if="$page.props.auth.user.type === 'admin'"
                    :active="$page.url.startsWith('/users')"
                    >USERS</NavLink
                >
            </li>
        </ul>
    </nav>
</template>

<script setup>
import NavLink from "./NavLink";
import { usePage } from "@inertiajs/inertia-vue3";
import { computed } from "vue";
</script>

<style></style>
