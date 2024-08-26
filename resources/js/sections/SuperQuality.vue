<template>
    <section id="about-us" class="flex justify-between items-center max-lg:flex-col gap-10 w-full max-container h-[70vh] ">
        <div class="flex flex-1 flex-col pt-[4rem]">
            <h1 class="font-palanquin capitalize text-4xl lg:max-w-lg font-bold text-white">
                Votre permis de conduire en poche du <span class="text-[#f7b500;] capitalize ">1er</span>  coup avec nous
            </h1>
            <div class="mt-11">
                <MyButton backgroundColor="bg-[#ff6433] text-white border-[#ff6433] rounded-[12px] hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300">Je veux passer mon permis</MyButton>
            </div>
            <div class="flex align-center  pt-5">
                <div class="pr-5">
                    <img src="@/assets/icons/success4.svg" alt="">
                </div>
                <div>
                    <p class="font-palanquin text-gray-200">succès Garantie</p>
                    <h2 class="font-bold text-white">99% de réussites au permis</h2>
                    
                </div>
                    
            </div>
        </div>    

        
        
    </section>
</template>

<script>
   import MyButton from '@/Components/MyButton.vue'
   export default{
    components: {MyButton}
   }


</script>



