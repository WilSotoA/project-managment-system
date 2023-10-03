<template>
    <Header />
    <div class="container mx-auto">
        <div v-if="projects" class="w-full flex space-x-4 mt-10">
            <ProjectCard v-for="project in projects" :key="project.id" :project="project"/>
        </div>
    </div>
</template>

<script setup>
import ProjectCard from './Components/ProjectCard.vue';
let props = defineProps({
    projects: Array,
});
</script>
