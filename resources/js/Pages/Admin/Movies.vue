<template>
    <Head title="Movie Dashboard" />
    <div class="font-main">
        <div class="flex justify-end mx-40">
            <button
                class="bg-primary text-white p-2 my-1 font-bold w-40 hover:bg-secondary"
                v-on:click="toggleModal()"
            >
                ADD MOVIE
            </button>
        </div>

        <div
            class="flex flex-col justify-center mx-40 sm:mx-2 sm:text-xs md:text-base md:mx-40"
        >
            <table class="mx-2 table-fixed mt-4">
                <thead class="border-b-4 border-secondary text-secondary">
                    <th align="left">TITLE</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>TIME SLOTS</th>
                    <th>RATING</th>
                    <th align="right">ACTIONS</th>
                </thead>

                <transition-group name="slide" mode="out-in">
                    <tr
                        v-for="movie in movies"
                        :key="movie.id"
                        align="center"
                        class="text-secondary cursor-pointer hover:bg-softgray"
                    >
                        <td class="py-4" align="left">{{ movie.title }}</td>
                        <!-- <td class="font-thin py-4"><img :src="movie.image" alt=""></td> -->
                        <td class="font-thin py-4">
                            {{ movie.start_date.toUpperCase() }}
                        </td>
                        <td class="font-thin py-4">
                            {{ movie.end_date.toUpperCase() }}
                        </td>
                        <td class="font-thin py-4">11:00 AM, 5:00 PM</td>
                        <td class="font-thin py-4">{{ movie.rating }}</td>
                        <td
                            class="py-4 flex flex-row justify-end items-center space-x-3"
                            align="right"
                        >
                            <button v-on:click="toggleModal(movie.id)">
                                <EditIcon />
                            </button>
                            <button v-on:click="toggleDel(movie.id)">
                                <DelIcon />
                            </button>
                        </td>
                    </tr>
                </transition-group>
            </table>
        </div>
    </div>

    <div>
        <!-- MODAL HERE -->
        <div
            v-if="showModal"
            class="font-main overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center flex flex-wrap"
        >
            <div class="relative w-auto my-8 mx-auto max-w-3xl">
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
                                    MOVIE DETAILS
                                </h1>

                                <div>
                                    <form
                                        @submit.prevent="submit"
                                        method="post"
                                        enctype="multipart/form-data"
                                        id="movie_form"
                                        class="flex flex-row flex-wrap space-x-8 justify-evenly"
                                    >
                                        <div
                                            class="text-sm mt-4 space-y-8 font-bold text-secondary"
                                        >
                                            <div>
                                                <p>Enter Movie Name</p>
                                                <input
                                                    type="text"
                                                    v-model="form.title"
                                                    class="input-primary"
                                                />
                                            </div>

                                            <div class="selectdiv">
                                                <p class="font-bold">
                                                    Director
                                                </p>
                                                <select
                                                    v-model="form.director"
                                                    class="focus:outline-none cursor-pointer w-52 p-2"
                                                >
                                                    <option
                                                        v-for="director in directors"
                                                        :key="director.id"
                                                    >
                                                        {{ director.name }}
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="selectdiv">
                                                <p class="font-bold">Genre</p>
                                                <select
                                                    v-model="form.genre"
                                                    class="focus:outline-none cursor-pointer w-52 p-2"
                                                >
                                                    <option
                                                        v-for="genre in genres"
                                                        :key="genre.id"
                                                    >
                                                        {{ genre.name }}
                                                    </option>
                                                </select>
                                            </div>

                                            <div>
                                                <p>Start Date</p>
                                                <input
                                                    type="date"
                                                    v-model="form.start_date"
                                                    class="input-primary"
                                                />
                                            </div>

                                            <div>
                                                <p>End Date</p>
                                                <input
                                                    type="date"
                                                    v-model="form.end_date"
                                                    class="input-primary"
                                                />
                                            </div>
                                        </div>

                                        <div class="text-sm mt-4 space-y-8">
                                            <div>
                                                <p
                                                    class="font-bold text-secondary"
                                                >
                                                    Movie Poster
                                                </p>
                                                <label for="actual-btn">
                                                    <input
                                                        v-on:change="
                                                            fileChoosen
                                                        "
                                                        @input="
                                                            form.image =
                                                                $event.target.files[0]
                                                        "
                                                        type="file"
                                                        id="actual-btn"
                                                        hidden
                                                    />
                                                    <div
                                                        class="flex justify-between items-stretch shadow-md w-52 text-base font-normal text-gray-700 bg-softgray bg-clip-padding transition ease-in-out m-0 focus:text-gray-700 focus:bg-softgray"
                                                    >
                                                        <span
                                                            class="flex flex-wrap flex-col p-2 overflow-x-hidden"
                                                            >{{
                                                                filename
                                                            }}</span
                                                        >

                                                        <p
                                                            class="flex items-center justify-center bg-primary hover:bg-secondary p-1 px-4 m-0 text-sm text-white font-semibold cursor-pointer"
                                                        >
                                                            UPLOAD
                                                        </p>
                                                    </div>
                                                </label>
                                            </div>

                                            <div class="selectdiv">
                                                <!-- <label> -->
                                                <p class="font-bold">Rating</p>
                                                <select
                                                    v-model="form.rating"
                                                    class="focus:outline-none cursor-pointer w-52 p-2"
                                                >
                                                    <option selected>
                                                        PG-13
                                                    </option>
                                                    <option>G</option>
                                                    <option>PG</option>
                                                    <option>R</option>
                                                    <option>NC-17</option>
                                                </select>
                                                <!-- </label> -->
                                            </div>

                                            <div>
                                                <p>Description</p>
                                                <textarea
                                                    name="movie-desc"
                                                    cols="30"
                                                    rows="9"
                                                    v-model="form.desc"
                                                    class="input-primary"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </form>
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
                                    <button
                                        type="submit"
                                        form="movie_form"
                                        class="btn-primary"
                                    >
                                        SAVE
                                    </button>
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
                                    ARE YOU SURE YOU WANT TO REMOVE THIS MOVIE?
                                </h1>

                                <div
                                    class="flex flex-row justify-center space-x-4 mb-8 mt-8"
                                >
                                    <form
                                        id="delForm"
                                        action=""
                                        @submit.prevent="delMovie"
                                    >
                                        <input
                                            type="text"
                                            :value="movieID"
                                            hidden
                                        />
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
import EditIcon from "../../Shared/Edit.vue";
import DelIcon from "../../Shared/Delete.vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { ref } from "@vue/reactivity";

const filename = ref("");
const showModal = ref(false);
const delModal = ref(false);
const movieID = ref(0);

const props = defineProps({
    movies: Array,
    genres: Array,
    directors: Array,
});

const delForm = useForm({
    id: null,
    img_path: null
});

const fileChoosen = (event) => {
    filename.value = event.target.files[0].name;
};

const toggleModal = (id) => {
    showModal.value = !showModal.value;
    movieID.value = id;
    setNull();

    if (id) {
        let filterMovie = props.movies.filter((item) => {
            return item.id === id;
        });

        // console.log(filterMovie[0]);
        form.title = filterMovie[0].title;
        form.rating = filterMovie[0].rating;
        form.genre = filterMovie[0].genre;
        form.desc = filterMovie[0].desc;
        form.end_date = filterMovie[0].end;
        form.start_date = filterMovie[0].start;
    }
};

const toggleDel = (id) => {
    delModal.value = !delModal.value;

    if (id) {

        let delfilter = props.movies.filter((item) => {
                return item.id === id;
        });
        
        delForm.id = id;
        delForm.img_path = delfilter[0].image;
    }
};

const delMovie = () => {
    delForm.post("/movies/delete", delForm, { preserveScroll: true });
    delModal.value = !delModal.value;
    movieID.value = 0;
};

const form = useForm({
    title: null,
    director: null,
    genre: null,
    start_date: null,
    end_date: null,
    rating: null,
    desc: null,
    image: null,
});

const submit = () => {
    if (movieID.value) {
        form.post("/movies/update");
    } else {
        form.post("/movies/create");
    }

    filename.value = "";
    showModal.value = !showModal.value;
    setNull();
};

function setNull() {
    (form.title = null),
        (form.director = null),
        (form.genre = null),
        (form.start_date = null),
        (form.end_date = null),
        (form.rating = null),
        (form.desc = null),
        (form.image = null);
}
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
