<template>
    <div class="w-1/3 border border-gray-800 p-6 shadow-sm rounded-sm">
        <h2 class="text-xl font-bold uppercase">{{ project.title }}</h2>
        <p class="text-sm font-light">{{ project.description }}</p>
        <div class="flex justify-end">
            <Link :href="`/projects/${project.id}`" class="px-4 py-2 bg-blue-500 text-white rounded-sm">View Project</Link>
        </div>
    </div>
</template>

<script setup>
    defineProps({
        project: Object
    })
</script>