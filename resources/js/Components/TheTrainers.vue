<template>
    <div class="mx-auto py-10 max-w-lg">
      <div class="flex flex-col items-center justify-center h-full mb-16">
        <h2 class="text-4xl g:max-w-lg mt-2 font-montserrat text-[#FF6433] font-bold mb-3">Nos Moniteurs</h2>
        <p class="text-2xl text-[#262c4b] font-semibold">Découvrez nos moniteurs </p>
      </div>
      <div v-for="trainer in trainers" :key="trainer.id" class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="relative h-[20rem] flex items-center justify-center">
          <img :src="`/images/${trainer.image}`" alt="Trainer Image" class="w-full h-full object-cover mx-auto">
        </div>
        <!-- Trainer Details -->
        <div class="p-6">
          <h3 class="text-xl font-semibold"> {{ trainer.name }} </h3>
          <p class="text-gray-600">{{ trainer.age }} ans</p>
          <p class="text-gray-700 ">{{ trainer.phone }}</p>
          <p class="text-gray-800 font-bold mt-2">{{ trainer.description }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { usePage } from '@inertiajs/vue3';
  
  const trainers = usePage().props.trainers;
  </script>
  