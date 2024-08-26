<template>
    <section class="max-container flex justify-center flex-wrap gap-9">
        <ServiceCard v-for="service in services" :key="service.label" :label="service.label" :subtext="service.subtext" />
    </section>
</template>



<script>
    
   import ServiceCard from '@/Components/ServiceCard.vue';
   export default {
    components:{ServiceCard},
    data(){
        return { 
                services:[ {
                               imgURL: "@/assets/images/shoe4.svg",
                               label: "Code illimité en ligne ou au centre",
                               subtext: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet purus neque."
                           },
                        
                           {
                               imgURL: "@/assets/images/shoe5.svg",
                               label: "Voiture adaptée pour la formation",
                               subtext: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet purus neque."
                                                  },
                                               
                                                  {
                               imgURL: "@/assets/images/shoe6.svg",
                               label: "véhicule et passagés assurés",
                               subtext: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet purus neque"
                           },


                       
                        
                        ]

            }
    }
    






       

   }
</script>