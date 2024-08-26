<template>
    <main class="relative">
         <TheNav/>
         <section class="padding" id="hero">
            <SuperQuality/>
         </section>
         <section class="padding bg-[#f4f4fb]">
            <OurService/>
         </section>
         <section class="padding">
             <BestOffer/>
         </section>
         <section class="padding bg-[#f4f4fb]">
            <CustomerReviews/>
         </section>
         <section class="padding">
            <NosPermis/>   
         </section>
         
         <TheFooter/>
    </main>
</template>

<script>
import TheNav from '@/Components/TheNav.vue';
import SuperQuality from '@/sections/SuperQuality.vue';
import OurService   from '@/sections/OurService.vue';
import BestOffer  from '@/sections/BestOffer.vue';
import CustomerReviews from '@/sections/CustomerReviews.vue'
import TheFooter from '@/Components/TheFooter.vue';
import NosPermis from '@/sections/NosPermis.vue';


export default{
    components:{TheNav,SuperQuality,OurService,BestOffer,CustomerReviews,TheFooter,NosPermis}
}
   

</script>


<style scoped>
   #hero{
      background-image: url('@/assets/images/bg.webp');
      background-size: cover;
      background-position: center;
      position: relative; /* add this */
     
   }
   #hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4); /* Darker overlay */
      z-index: 1;
   }

   #hero > * {
      position: relative;
      z-index: 2; }
</style>