<template>
   <div class="container mx-auto py-10">
    <div class="flex flex-col items-center justify-center h-full mb-16">
        <h2 class="text-4xl g:max-w-lg mt-2 font-montserrat text-[#FF6433] font-bold mb-3">Nos Véhicules</h2>
        <p class=" text-2xl text-[#262c4b] font-semibold">Découvrez notre collection de voitures</p>
    </div>
     <div v-for="car in cars" :key="car.id" class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
       <!-- Image as Background -->
       <div class="relative h-64 flex items-center justify-center">
         <img :src="`/images/${car.image}`" alt="Car Image" class="w-full h-full object-contain">
       </div>
       <!-- Car Details -->
       <div class="p-6">
         <h3 class="text-xl font-semibold"> {{ car.marque }} </h3>
         <p class="text-gray-600">{{ car.matricule }} </p>
         <p class="text-gray-800 font-bold mt-2">{{ car.distance }}</p>
       </div>
     </div>
   </div>
 </template>
 
 <script setup>
    

     import { usePage } from '@inertiajs/vue3';

     const cars = usePage().props.cars ;

     console.log(cars) 
 
 

 
 </script>
 
 <style scoped>
 .container {
   max-width: 800px;
 }
 </style>
 