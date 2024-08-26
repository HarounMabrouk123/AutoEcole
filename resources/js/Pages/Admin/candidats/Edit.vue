<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from '../components/AdminLayout.vue';
import CandidatForm from './CandidatForm.vue';





// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>



<template>
   <AdminLayout>
         <CandidatForm/>
   </AdminLayout>
</template>
