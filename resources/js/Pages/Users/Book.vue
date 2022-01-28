<template>
    <Head title="Book Movie" />

    <div class="font-main text-secondary">
        <div class="grid grid-cols-2 gap-14 mx-10 my-10">
            <div class="flex flex-row flex-wrap justify-end">
                <div class="text-sm font-bold mx-16">
                    <Link
                        :href="route('home')"
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
                        'background-image': `url(${movie.img})`,
                    }"
                ></div>
            </div>

            <form @submit.prevent="submit" method="post" class="mt-6">
                <h1 class="text-primary text-2xl">{{ movie.title }}</h1>

                <div class="text-sm my-2 space-y-4">
                    <p class="font-bold">Date</p>
                    <input
                        type="date"
                        v-model="form.date"
                        :min="movie.start"
                        :max="movie.end"
                        class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                    />

                    <p class="font-bold">Time Slot</p>
                    <select
                        v-model="form.timeslot"
                        class="bg-softgray form-input p-1 shadow-md focus:outline-none w-52"
                    >
                        <option
                            v-for="time in timeslots"
                            :key="time.id"
                            v-text="time.timeslot"
                        ></option>
                    </select>

                    <p class="font-bold mb-0">Number of Tickets</p>

                    <div
                        class="flex flex-row justify-between items-center w-24"
                    >
                        <button
                            type="button"
                            @click="decrement"
                            class="h-8 w-8 rounded-full overflow-hidden bg-primary flex justify-center items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-white"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="4"
                                    d="M20 12H4"
                                />
                            </svg>
                        </button>

                        <p>{{ form.quantity }}</p>

                        <button
                            type="button"
                            @click="increment"
                            class="h-8 w-8 rounded-full overflow-hidden bg-primary flex justify-center items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-white"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="4"
                                    d="M12 4v16m8-8H4"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col mt-4">
                    <button
                        v-if="form.time != null && form.date != null"
                        type="submit"
                        :disabled="form.processing"
                        class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary"
                    >
                        PROCEED
                    </button>
                    <!-- </form> -->
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm, usePage } from "@inertiajs/inertia-vue3";
import { ref } from "@vue/reactivity";

const props = defineProps({
    item: Object,
    timeslots: Array,
});
const movie = props.item[0];

// const filename = ref("");
// const showModal = ref(false);
// const delModal = ref(false);
// const movieID = ref(0);

const form = useForm({
    timeslot: null,
    date: null,
    quantity: 1,
    movie_id: movie.id,
    user_id: usePage().props.value.auth.user.id,
});

const submit = () => {
    form.post(route("discoverbookdetails"));
};

function increment() {
    form.quantity++;
}

function decrement() {
    if (form.quantity > 1) {
        form.quantity--;
    }
}
</script>

<style></style>
