<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from '../components/AdminLayout.vue';
import TrainerList from '../components/TrainerList.vue';


defineProps({
    trainers:Array
})



// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>



<template>
    <AdminLayout>
         <TrainerList :trainers="trainers"/>
    </AdminLayout>
 </template>