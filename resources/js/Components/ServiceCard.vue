<template>
  <div class="flex items-center justify-center "> <!-- Parent div to center the content -->
    <div 
      class="flex flex-col items-center justify-center sm:w-[350px] sm:min-w-[350px] w-full rounded-[20px] shadow-3xl px-10 py-16 service-card"
      :class="{ 'hover-effect': isHovered }"
      @mouseover="isHovered = true"
      @mouseout="isHovered = false"
    >
      <div class="w-[70px] h-[70px] flex justify-center items-center ">
        <img src="@/assets/images/car.svg" alt="">
      </div>
      <div class="text-center pt-8 ">
        <h3 class="text-3xl text-[#262c4b] font-Montserrat font-bold leading-6 pb-7">
          {{ label }}
        </h3>
        <p class="text-[#33395a] font-Montserrat font-bold text-l">
          {{ subtext }}
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['label', 'subtext'],
  data() {
    return {
      isHovered: false
    }
  }
}
</script>

<style scoped>
.service-card {
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.hover-effect {
  transform: scale(1.05);
  cursor: pointer;
}
</style>