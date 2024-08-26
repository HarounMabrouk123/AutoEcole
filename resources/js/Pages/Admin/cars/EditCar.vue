<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from '../components/AdminLayout.vue';
import { usePage } from '@inertiajs/vue3';
import CarUpdateForm from '../components/CarUpdateForm.vue';




// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>







<template>
    <AdminLayout>
        <CarUpdateForm/>
    </AdminLayout>
 </template>