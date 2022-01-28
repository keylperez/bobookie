<template>
    <Head title="Book Tickets Now!" />
    <div class="font-main">
        <div class="flex justify-center">
            <h1 class="font-bold text-primary text-xl">BOOKED MOVIES</h1>
        </div>

        <div class="flex flex-col justify-center mx-40">
            <h3 class="text-primary mx-3">UPCOMING</h3>
            <div class="bg-secondary mx-3 p-0.5" />

            <table class="mx-3 table-fixed">
                <tr
                    v-for="ticket in tickets"
                    :key="ticket.id"
                    class="cursor-pointer hover:bg-softgray"
                >
                    <td class="text-secondary py-4 px-2" width="32%">
                        {{ ticket.title }}
                    </td>
                    <td class="font-thin text-secondary py-4 text-center">
                        <p>{{ ticket.timeslot }}</p>
                        <p>
                            {{ ticket.date }}
                        </p>
                    </td>
                    <td class="py-4 px-2 flex justify-end">
                        <Link :href="route('ticketdetails', { id: ticket.id })"
                            ><button
                                class="border-2 border-white btn-secondary"
                            >
                                DETAILS
                            </button></Link
                        >
                    </td>
                </tr>
            </table>

            <h3 class="text-primary mx-3 mt-8">PAST</h3>
            <div class="bg-secondary mx-3 p-0.5" />

            <table class="mx-3 table-fixed">
                <tr class="cursor-pointer hover:bg-softgray">
                    <td class="text-secondary py-4 px-2" width="32%">
                        Crazy Rich Asians
                    </td>
                    <td class="font-thin text-secondary py-4 text-center">
                        <p>1 PM</p>
                        <p>DECEMBER 11, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end">
                        <Link href="/ticketdetails"
                            ><button
                                class="border-2 border-white btn-secondary"
                            >
                                DETAILS
                            </button></Link
                        >
                    </td>
                </tr>
                <tr class="cursor-pointer hover:bg-softgray">
                    <td class="text-secondary py-4 px-2">
                        Shang-Chi and the Legend of the Ten Rings
                    </td>
                    <td class="font-thin text-secondary py-4 text-center">
                        <p>1 PM</p>
                        <p>DECEMBER 11, 2021</p>
                    </td>
                    <td class="py-4 px-2 flex justify-end">
                        <Link href="/ticketdetails"
                            ><button
                                class="border-2 border-white btn-secondary"
                            >
                                DETAILS
                            </button></Link
                        >
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from "vue";
const filtered = ref([]);
const props = defineProps({ tickets: Array });

const filter = computed((filtered) => {
    this.props.tickets.forEach((e, i, a) => {
        console.log(e);
        // if (e.date !== a[i + 1].date && e.timeslot !== a[i].timeslot) {
        //     filtered.push(e);
        // }
    });
});
</script>

<style></style>
