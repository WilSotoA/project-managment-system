<template>
    <div class="container mx-auto flex justify-center mt-10">
        <div class="shadow-md w-1/3 p-5">
            
            <h2 class="text-2xl font-bold text-center">Login</h2>
            <div v-if="error === null" class="bg-red-600 w-[100%] text-center text-white text-xl mt-2 mb-2">
                {{ error }}
            </div>
            <form @submit.prevent="form.post('/login')">
                <div class="mb-4">
                    <label class="mb-2">E-mail: </label>
                    <input v-model="form.email" type="email" class="shadow-sm px-4 py-2 rounded-sm w-full" placeholder="johndoe@example.com" />
                </div>
                <div class="mb-4">
                    <label class="mb-2">Password: </label>
                    <input v-model="form.password" type="password" class="shadow-sm px-4 py-2 rounded-sm w-full" placeholder="********" />
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-blue-500 rounded-sm text-white px-4 py-2 w-full">Sign In</button>
                </div>
            </form>

        </div>
    </div>
</template>

<script setup>
    import { useForm } from '@inertiajs/vue3'

    const form = useForm({
        email: '',
        password: '' 
    });

    const error = JSON.stringify(sessionStorage.getItem('error')) || false;
</script>