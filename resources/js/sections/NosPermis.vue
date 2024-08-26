<template>
    <section class="max-container max-sm:mt-12">
        <div class="flex flex-col justify-center items-center">
            <p class='lg:max-w-lg mt-2 font-montserrat text-[#F7B500] font-semibold text-2xl'>
                On a le permis qui vous convient
            </p>
            <h2 class='text-6xl  font-palanquin font-bold'>
                Nos  permis populaires
            </h2>
            <div class="mt-16 flex flex-wrap justify-center gap-6 ">
                 <PermisCard label="Permis voiture" />
                 <PermisCard label="Permis moto" />
                 <PermisCard label="Permis scooter (AM)" /> 
            </div>
            
        </div>

    </section>
</template>

<script>


import PermisCard from '@/Components/PermisCard.vue';

export default {
    components: {PermisCard}
}





</script>