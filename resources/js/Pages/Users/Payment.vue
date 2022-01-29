<template>
    <Head title="Payment" />

    <div class="font-main text-secondary">
        <div class="grid grid-cols-2 gap-14 mx-10 my-10">
            <div class="flex flex-row flex-wrap justify-end">
                <div class="text-sm font-bold mx-16">
                    <Link
                        href="/discoverbookdetails"
                        class="flex flex-row items-center space-x-1"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 19l-7-7 7-7"
                            />
                        </svg>
                        <p
                            class="text-xs link-underline link-underline-black cursor-pointer"
                        >
                            BACK
                        </p></Link
                    >
                </div>

                <div
                    class="bg-secondary p-4 my-2 h-80 w-48 mt-6 bg-cover bg-center"
                    :style="{
                        'background-image': `url(${movie[0].image})`,
                    }"
                ></div>
            </div>

            <form @submit.prevent="submit" method="post" class="mt-6">
                <h1 class="text-primary text-2xl">{{ movie[0].title }}</h1>
                <h1 class="text-secondary font-bold">PAYMENT DETAILS</h1>
                <h1 class="text-secondary text-lg">
                    Total: ₱{{ tickets.length * movie[0].price }}
                </h1>

                <div class="text-sm space-y-4">
                    <div class="my-2">
                        <p class="font-bold text-secondary">Card number</p>
                        <select
                            type="text"
                            v-model="form.method"
                            autocomplete="false"
                            required
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        >
                            <option value="Debit">Debit Card</option>
                            <option value="Credit">Credit Card</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <p class="font-bold text-secondary">Card number</p>
                        <input
                            type="text"
                            v-model="form.card_number"
                            minmax="16"
                            autocomplete="false"
                            required
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        />
                    </div>

                    <div class="my-2">
                        <p class="font-bold text-secondary">
                            Cardholder’s name
                        </p>
                        <input
                            type="text"
                            v-model="form.card_name"
                            autocomplete="false"
                            required
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        />
                    </div>

                    <div class="my-2">
                        <p class="font-bold text-secondary">Expiry Date</p>
                        <input
                            type="date"
                            v-model="form.expiry_date"
                            minmax="4"
                            autocomplete="false"
                            required
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        />
                    </div>

                    <div class="my-2">
                        <p class="font-bold text-secondary">Security Code</p>
                        <input
                            type="text"
                            v-model="form.security_code"
                            minmax="3"
                            autocomplete="false"
                            required
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        />
                    </div>
                </div>

                <div class="flex flex-col mt-4">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        autocomplete="false"
                        class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary"
                    >
                        PROCEED
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm, usePage } from "@inertiajs/inertia-vue3";
const props = defineProps({
    tickets: Array,
    movie: Object,
});
const form = useForm({
    user_id: usePage().props.value.auth.user.id,
    method: "",
    card_number: "",
    card_name: "",
    expiry_date: "",
    security_code: "",
    total: props.tickets.length * props.movie[0].price,
});

const submit = () => {
    form.post("/payment");
};
</script>

<style></style>
