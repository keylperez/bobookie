<template>
    <main class="m-5">
        <div class="flex">{{ username }}</div>
    </main>
</template>

<script>
import { ref } from "vue";
export default {
    setup() {
        const username = ref("keyl");
        return {
            username,
        };
    },
};
</script>

<style></style>
