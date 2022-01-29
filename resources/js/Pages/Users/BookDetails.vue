<template>
    <Head title="Booking Details" />

    <div class="font-main text-secondary">
        <div class="grid grid-cols-2 gap-14 mx-10 my-10">
            <div class="flex flex-row flex-wrap justify-end">
                <div class="text-sm font-bold mx-16">
                    <Link
                        href="/discoverbook"
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

                <div
                    class="text-sm mt-6"
                    v-for="(ticket, index) in form.inputs"
                    :key="index"
                >
                    <h1 class="font-bold text-primary">
                        Ticket #{{ ticket.id }}
                    </h1>
                    <h1 class="font-bold text-primary">
                        {{ ticket.title }}
                    </h1>

                    <div class="mt-2">
                        <p class="font-bold text-secondary">Name</p>
                        <input
                            name="name"
                            v-model="ticket.name"
                            required
                            type="text"
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        />
                    </div>

                    <div class="mt-6">
                        <p class="font-bold text-secondary">
                            COVID-19 Vaccination ID (Vaxcert)
                        </p>
                        <input
                            name="vax_id"
                            v-model="ticket.vax_id"
                            required
                            type="text"
                            class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                        />
                    </div>
                </div>

                <div class="flex flex-col mt-4">
                    <!-- <form @submit.prevent="submit" method="post"> -->
                    <!-- <Link href="/discoverpayment"> -->
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="block bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary"
                    >
                        PROCEED
                    </button>
                    <!-- </Link> -->
                    <!-- </form> -->
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";

const filename = ref("");

const props = defineProps({
    tickets: Array,
    movie: Object,
});

const form = useForm({
    inputs: props.tickets,
});

const submit = () => {
    form.post("/book/ticket/proceed");
};

</script>
