<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from '../components/AdminLayout.vue';
import TrainerForm from '../components/TrainerForm.vue';




// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>







<template>
    <AdminLayout>
         <TrainerForm/>
    </AdminLayout>
 </template>