<template>
    <div class="shadow-sm mb-4 p-4 rounded-sm" @dblclick="isEditing = ! isEditing">
        <div v-if="isEditing">
            <form @submit.prevent="form.post('/tasks');">
                <input v-model="form.title" type="text" class="border" />
                <textarea class="mt-2 p-2 max-h-20" v-model="form.description" cols="30" rows="2">
                </textarea>
                <select v-model="form.status" class="shadow-sm px-4 py-2 rounded-sm w-full">
                        <option value="pendiente" selected>Pendiente</option>
                        <option value="en progreso">En progreso</option>
                        <option value="completada">Completada</option>
                    </select>
                <div class="w-full mt-2">
                    <button type="submit" class="bg-blue-500 rounded-sm text-white px-4 py-2 w-full">Actualizar tarea</button>
                </div>
            </form>
        </div>
        <div v-else class="text-sm flex flex-col">
            <h1>{{ task.title }}</h1>
            <p>{{ task.description }}</p>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import { useForm } from '@inertiajs/vue3'

    let props = defineProps({
        task: Object
    })

    let isEditing = ref(false)

    let form = useForm({
        task_id: props.task.id,
        title: '',
        description: '',
        status: '',
    })
</script>