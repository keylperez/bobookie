<template>
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
                <div class="flex items-start justify-between mt-10 ml-2 p-2">
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
                                        <p>{{ booking.name }}</p>
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
                                            v-for="n in booking.quantity"
                                            :key="n"
                                        >
                                            <td
                                                class="pr-4 flex flex-row items-center"
                                                align="left"
                                            >
                                                {{ booking.name }}
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
                                                Ticket#{{ booking.id }}
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

    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
</template>

<script setup>
import { ref } from "@vue/reactivity";
const filename = ref("");
const showModal = ref(false);
const delModal = ref(false);
const myDate = ref(new Date().toISOString().slice(0, 10));
defineProps({ booking: Object });
</script>

<style></style>
