<template>
  <div class="max-w-md rounded overflow-hidden shadow-lg relative transition duration-300 ease-in-out hover:scale-105 hover:cursor-pointer">
    <img class="w-full" src="@/assets/images/permis_voiture.jpg" alt="Car Permit">
    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 p-4">
      <p class="text-white font-bold text-xl">{{ label }}</p>
    </div>
  </div>
</template>

<script>
  export default{
    props : {label:String}
  }
</script>

<style scoped>
  .max-w-md {
    max-width: 28rem; /* increase the max-width to make the card bigger */
  }
</style>