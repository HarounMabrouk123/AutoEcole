<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from '../components/AdminLayout.vue';
import CandidatList from '../components/CandidatList.vue';


defineProps({
    candidats:Array,

})




// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>


<template>
     <AdminLayout>
          <CandidatList :candidats="candidats"/>
     </AdminLayout>
</template>




