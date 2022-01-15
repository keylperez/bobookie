<template>
    <Head title="Welcome to Bobookie" />
    <div
        class="m-3 md:mt-60 sm:mt-10 sm:justify-center md:justify-end pr-20 font-main flex-row flex text-secondary"
    >
        <form @submit.prevent="submit" class="flex flex-col w-72 font-main">
            <input
                type="email"
                name="email"
                v-model="form.email"
                autofocus
                maxlength="255"
                placeholder="Email"
                class="border-b-4 border-secondary flex-1 my-6 outline-none"
            />
            <div class="h-10">
                <p
                    v-if="form.errors.email"
                    v-text="form.errors.email"
                    class="text-red-400 text-sm"
                ></p>
            </div>

            <input
                type="password"
                name="password"
                v-model="form.password"
                maxlength="255"
                placeholder="Password"
                class="border-b-4 border-secondary flex-1 my-6 outline-none"
            />
            <div class="h-4">
                <p
                    v-if="form.errors.password"
                    v-text="form.errors.password"
                    class="text-red-400 text-sm"
                ></p>
            </div>

            <button
                class="btn flex flex-row justify-end"
                type="submit"
                :disabled="form.processing"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    aria-hidden="true"
                    role="img"
                    width="5em"
                    height="5em"
                    preserveAspectRatio="xMidYMid meet"
                    viewBox="0 0 16 16"
                >
                    <g transform="translate(0 16) scale(1 -1)">
                        <g fill="#feb155">
                            <path
                                fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                            />
                        </g>
                    </g>
                </svg>
            </button>

            <Link href="/signup"
                ><button class="text-left text-primary font-bold text-lg btn">
                    Create an Account
                </button></Link
            >
        </form>
    </div>
</template>

<script>
export default {
    layout: LoginLayout
};
</script>

<script setup>
import LoginLayout from "../Shared/LoginLayout.vue";
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    email: "",
    password: "",
});
const submit = () => {
    form.post("/login");
};

defineProps({
    errors: Object,
});
</script>

<style></style>
