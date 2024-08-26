<template>
    <section class="flex justify-between items-center max-lg:flex-col gap-10 w-full max-container" >
        <div class='flex-1 flex justify-center items-center '>
        <img
          src="@/assets/images/whitecar.webp"
          alt='product detail'
          width={570}
          height={522}
          class='object-contain border-4 border-black rounded-lg'
        />
      </div>
        <div class='flex flex-1 flex-col'>
        <h3 class="text-[#f7b500] font-bold">C'est vous qui choisissez</h3>
        <h2 class='font-palanquin capitalize text-4xl lg:max-w-lg font-bold'>
            Passez votre permis de conduire à votre rythme
        </h2>
        <p class='mt-4 lg:max-w-lg info-text'>
            Révolutionnez le permis à nos côtés quel que soit votre niveau, votre âge, votre situation et vos contraintes.
        </p>
        <div class="grid-rows-1	grid-template-rows: repeat(1, minmax(0, 1fr));">
            <div class="flex  items-center p-4">
                <img src="@/assets/icons/success1.svg" class="pr-4">
                <p class="text-xl">Démarrez votre formation où vous le souhaitez.</p>
            </div>
            <div class="flex  items-center p-4">
                <img src="@/assets/icons/success1.svg" class="pr-4">
                <p class="text-xl">Profitez de 2000 questions d’entraînement en ligne</p>
            </div>
            <div class="flex  items-center p-4">
                <img src="@/assets/icons/success1.svg" class="pr-4">
                <p class="text-xl">Nous vous accompagnons tout au long de votre formation.</p>
            </div>
        </div>
        <div class="flex max-sm:justify-end items-center max-sm:w-full pt-4">
            <MyButton backgroundColor="bg-[#ff6433] text-white rounded-full hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300">Je veux passer mon permis</MyButton>
        </div>
       
      </div>


    </section>
</template>




<script>
    
    import MyButton from '@/Components/MyButton.vue'; 
    
    export default {
        components:{MyButton}
    }

</script>