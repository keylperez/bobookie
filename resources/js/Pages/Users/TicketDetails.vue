<template>
    <Head title="Book Tickets Now!" />

    <div class="font-main text-secondary">
        <div class="grid grid-cols-2 gap-14 mx-10 my-10">
            <div class="flex flex-row flex-wrap justify-end">
                <div class="text-sm font-bold mx-16">
                    <Link
                        href="/tickets"
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
                        'background-image': `url(${ticket[0].image})`,
                    }"
                ></div>
            </div>

            <div class="mt-6">
                <h1 class="text-primary text-2xl">{{ ticket[0].title }}</h1>
                <h4 class="text-secondary text-xl">RECEIPT</h4>

                <div class="font-thin text-secondary text-sm">
                    <p>Transaction#{{ ticket[0].id }}</p>
                    <p>{{ ticket[0].created_at }}</p>
                </div>

                <div class="text-sm my-2">
                    <p
                        class="font-bold"
                        v-text="ticket[0].name ? ticket[0].name : 'No name'"
                    ></p>
                    <p class="font-thin">{{ ticket[0].timeslot }}</p>
                    <p class="font-thin">Ticket#{{ ticket[0].id }}</p>
                </div>

                <div class="flex flex-col">
                    <button
                        class="bg-primary text-white p-2 my-1 font-bold w-64 hover:bg-secondary"
                    >
                        PRINT RECEIPT
                    </button>
                    <button
                        class="bg-softgray text-primary p-2 my-1 font-bold w-64 hover:bg-secondary hover:text-softgray"
                    >
                        CANCEL TICKET(S)
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({ ticket: Array });
    
</script>
