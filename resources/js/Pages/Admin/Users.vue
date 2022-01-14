<template>
    <Head title="Users" />
    <div class="mx-14 text-gray-900">
        <h1 class="text-3xl">Users List</h1>
        <div>
            <ul>
                <li
                    v-for="user in users"
                    :key="user.id"
                    v-text="user.name"
                ></li>
            </ul>
        </div>
    </div>
</template>

<script setup>
defineProps({ users: Array });
</script>

<style></style>
