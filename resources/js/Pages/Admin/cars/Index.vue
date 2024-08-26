<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from '../components/AdminLayout.vue';
import CarList from '../components/CarList.vue';



defineProps({
    cars:Array,

})


// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>


<template>
   <AdminLayout>
        <CarList :cars="cars"/>
   </AdminLayout>
</template>


