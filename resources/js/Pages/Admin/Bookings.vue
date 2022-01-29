<template>
    <Head title="Booking" />
    <div class="font-main">
        <div
            class="flex flex-col justify-center sm:mx-2 sm:text-xs md:text-base md:mx-40 mt-16"
        >
            <table class="mx-2 table-fixed mt-4">
                <thead class="border-b-4 border-secondary text-secondary">
                    <th align="left">TICKET ID</th>
                    <th>USER ID</th>
                    <th>USERNAME</th>
                    <th>MOVIE</th>
                    <th>DATE</th>
                    <th>TIMESLOT</th>
                    <th>STATUS</th>
                    <th align="right">ACTIONS</th>
                </thead>

                <transition-group name="slide" mode="out-in">
                <tr
                    align="center"
                    class="text-secondary cursor-pointer hover:bg-softgray"
                    v-for="booking in bookings"
                    :key="booking.id"
                >
                    <td class="py-4" align="left">#{{ booking.id }}</td>
                    <td class="font-thin py-4">{{ booking.user_id }}</td>
                    <td class="font-thin py-4">{{ booking.name }}</td>
                    <td class="font-thin py-4">{{ booking.title }}</td>
                    <td class="font-thin py-4">{{ booking.date }}</td>
                    <td class="font-thin py-4">{{ booking.timeslot }}</td>
                    <td class="font-thin py-4">{{ booking.status }}</td>
                    <td
                        class="py-4 flex flex-row justify-end items-center space-x-3"
                        align="right"
                    >
                        <button v-on:click="toggleModal(booking.id)">
                            <ViewIcon />
                        </button>
                        <button v-on:click="toggleDel(booking.id)">
                            <DelIcon />
                        </button>
                    </td>
                </tr>
                </transition-group>
            </table>
        </div>
    </div>

    <!-- MODAL -->
    <!-- <BookingModal v-if="showModal" :booking="bookings[0]" /> -->
    <!-- <div> -->
    <div>
        <div
            v-if="showModal"
            class="font-main overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex flex-wrap"
        >
            <div class="relative w-auto my-8 mx-auto max-w-4xl">
                <!--content-->
                <div
                    class="shadow-lg relative flex flex-col bg-white outline-none focus:outline-none"
                >
                    <!--header-->
                    <div
                        class="flex items-start justify-between mt-10 ml-2 p-2"
                    >
                        <div class="text-sm font-bold mx-2 text-secondary">
                            <button
                                v-on:click="toggleModal()"
                                class="flex flex-row items-center space-x-1 font-bold"
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
                                    class="text-xs text-secondary link-underline link-underline-black cursor-pointer"
                                >
                                    BACK
                                </p>
                            </button>
                        </div>
                    </div>

                    <!--body-->
                    <div class="p-6 flex-auto h-auto">
                        <div
                            class="flex flex-row text-secondary font-main flex-wrap justify-end"
                        >
                            <div>
                                <h1 class="text-primary text-2xl">
                                    BOOKING DETAILS
                                </h1>

                                <div
                                    class="flex flex-row flex-wrap space-x-8 justify-evenly"
                                >
                                    <div
                                        class="text-sm mt-4 space-y-2 font-bold text-secondary"
                                    >
                                        <div class="font-thin">
                                            <p>kimNamjoon</p>
                                            <p>Transaction#0000</p>
                                        </div>
                                        <div>
                                            <p>Movie</p>
                                            <input
                                                type="text"
                                                placeholder="Eternals"
                                                class="input-primary placeholder-secondary"
                                            />
                                        </div>

                                        <div>
                                            <p>Date Booked</p>
                                            <input
                                                type="date"
                                                :placeholder="new Date()"
                                                v-model="myDate"
                                                class="input-primary placeholder-secondary"
                                            />
                                        </div>

                                        <div>
                                            <p>Time Booked</p>
                                            <input
                                                type="text"
                                                placeholder="11:00 AM"
                                                class="input-primary placeholder-secondary"
                                            />
                                        </div>
                                    </div>

                                    <div class="text-sm mt-4 space-y-2">
                                        <h1 class="text-primary text-xl">
                                            TICKETS
                                        </h1>

                                        <table class="mx-2 table-fixed mt-4">
                                            <thead class="text-secondary">
                                                <th align="left">Name</th>
                                                <th>Seat Location</th>
                                                <th align="right">Ticket ID</th>
                                            </thead>

                                            <tr
                                                align="center"
                                                class="text-secondary font-thin"
                                            >
                                                <td
                                                    class="pr-4 flex flex-row items-center"
                                                    align="left"
                                                >
                                                    Juan de la Cruz
                                                </td>
                                                <td class="font-thin">
                                                    <div class="selectdiv">
                                                        <!-- <label> -->
                                                        <select
                                                            class="focus:outline-none cursor-pointer p-2"
                                                        >
                                                            <option selected>
                                                                A1
                                                            </option>
                                                            <option>A2</option>
                                                            <option>A3</option>
                                                        </select>
                                                        <!-- </label> -->
                                                    </div>
                                                </td>
                                                <td
                                                    class="pl-4 flex flex-row justify-end items-center"
                                                    align="right"
                                                >
                                                    Ticket#0000
                                                </td>
                                            </tr>
                                            <tr
                                                align="center"
                                                class="text-secondary font-thin"
                                            >
                                                <td
                                                    class="pr-4 flex flex-row items-center"
                                                    align="left"
                                                >
                                                    Juan de la Cruz
                                                </td>
                                                <td class="font-thin">
                                                    <div class="selectdiv">
                                                        <!-- <label> -->
                                                        <select
                                                            class="focus:outline-none cursor-pointer p-2"
                                                        >
                                                            <option selected>
                                                                A1
                                                            </option>
                                                            <option>A2</option>
                                                            <option>A3</option>
                                                        </select>
                                                        <!-- </label> -->
                                                    </div>
                                                </td>
                                                <td
                                                    class="pl-4 flex flex-row justify-end items-center space-x-3"
                                                    align="right"
                                                >
                                                    Ticket#0000
                                                </td>
                                            </tr>
                                            <tr
                                                align="center"
                                                class="text-secondary font-thin"
                                            >
                                                <td
                                                    class="pr-4 flex flex-row items-center"
                                                    align="left"
                                                >
                                                    Juan de la Cruz
                                                </td>
                                                <td class="font-thin">
                                                    <div class="selectdiv">
                                                        <!-- <label> -->
                                                        <select
                                                            class="focus:outline-none cursor-pointer p-2"
                                                        >
                                                            <option selected>
                                                                A1
                                                            </option>
                                                            <option>A2</option>
                                                            <option>A3</option>
                                                        </select>
                                                        <!-- </label> -->
                                                    </div>
                                                </td>
                                                <td
                                                    class="pl-4 flex flex-row justify-end items-center space-x-3"
                                                    align="right"
                                                >
                                                    Ticket#0000
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-row justify-center space-x-4 mb-8 mt-12"
                                >
                                    <button
                                        v-on:click="toggleModal()"
                                        class="btn-secondary"
                                    >
                                        CANCEL
                                    </button>
                                    <Link href="#"
                                        ><button class="btn-primary">
                                            SAVE
                                        </button></Link
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="showModal"
            class="opacity-25 fixed inset-0 z-40 bg-black"
        ></div>
    </div>
    <!-- DELETE CONFIRMATION MODAL HERE -->
    <div>
        <!-- MODAL HERE -->
        <div
            v-if="delModal"
            class="font-main overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex flex-wrap"
        >
            <div class="relative w-auto my-8 mx-auto max-w-3xl">
                <!--content-->
                <div
                    class="shadow-lg relative flex flex-col bg-white outline-none focus:outline-none"
                >
                    <!--body-->
                    <div class="p-6 flex-auto h-auto">
                        <div
                            class="flex flex-row text-secondary font-main flex-wrap justify-end"
                        >
                            <div>
                                <h1 class="text-2xl m-20 text-center">
                                    ARE YOU SURE YOU WANT TO REMOVE THIS RECORD?
                                </h1>

                                <div
                                    class="flex flex-row justify-center space-x-4 mb-8 mt-8"
                                >
                                    <form
                                        id="delForm"
                                        action=""
                                        @submit.prevent="delMovie"
                                    >
                                    </form>
                                    <button
                                        v-on:click="toggleDel()"
                                        class="btn-secondary"
                                    >
                                        CANCEL
                                    </button>
                                    <button
                                        type="submit"
                                        form="delForm"
                                        class="btn-primary"
                                    >
                                        CONFIRM
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            v-if="delModal"
            class="opacity-25 fixed inset-0 z-40 bg-black"
        ></div>
    </div>
</template>

<script setup>
import ViewIcon from "../../Shared/View.vue";
import DelIcon from "../../Shared/Delete.vue";
import BookingModal from "../../Shared/BookingModal.vue";
import { ref, reactive } from "@vue/reactivity";
import { useForm } from "@inertiajs/inertia-vue3";

const showModal = ref(false);
const delModal = ref(false);
const myDate = ref(new Date().toISOString().slice(0, 10));
// const currentModal = reactive(props[0]);
const props = defineProps({ bookings: Array });


const form = useForm({
    movie: null,
    date: null,
    time: null,
});


const toggleModal = (booking) => {
    // currentModal = booking;
    showModal.value = !showModal.value;
};

const toggleDel = (id) => {
    delModal.value = !delModal.value;

    if (id) {
        delForm.id = id;
    }
};


const delForm = useForm({
    id: null,
});
    
const delMovie = () => {
    delForm.post("/bookings/delete", delForm);
    delModal.value = !delModal.value;
};
</script>

<style>
.slide-leave-active,
.slide-enter-active {
    transition: 1s;
}
.slide-enter {
    transform: translate(100%, 0);
}
.slide-leave-to {
    transform: translate(-100%, 0);
}
</style>
