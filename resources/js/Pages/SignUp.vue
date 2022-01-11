<template>
<Head title="Sign Up Now"/>
<div class="m-3 md:mt-38 sm:mt-10 sm:justify-center md:justify-end pr-20 font-main flex-row flex  text-secondary">
        <form action="" method="post" class="flex flex-col w-72 font-main">
            <input
                type="text"
                name="email"
                maxlength="255"
                placeholder="Email"
                class="border-b-4 border-secondary flex-1 my-6 outline-none"
            />
            
            <input
                type="text"
                name="username"
                maxlength="255"
                placeholder="Username"
                class="border-b-4 border-secondary flex-1 my-6 outline-none"
            />

            <input
                type="password"
                name="password"
                maxlength="255"
                placeholder="Password"
                class="border-b-4 border-secondary flex-1 my-6 outline-none"
            />
            <input
                type="password"
                name="confirmpass"
                maxlength="255"
                placeholder="Confirm Password"
                class="border-b-4 border-secondary flex-1 my-6 outline-none"
            />
            
            <button class="btn flex flex-row justify-end" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="5em" height="5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g transform="translate(0 16) scale(1 -1)"><g fill="#feb155"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></g></g></svg></button>

            <Link href="/login"><button class="text-left text-primary font-bold text-lg btn">
                Sign In
            </button></Link>
        </form>
</div>

</template>

<script>
import LPLayout from '../Shared/LoginLayout.vue';

export default {
    layout: LPLayout,
    components: { LPLayout }
};
</script>

<style></style>
