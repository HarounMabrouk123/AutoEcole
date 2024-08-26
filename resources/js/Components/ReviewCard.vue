<template>
    <div class="flex justify-center items-center flex-col">
         <img src="@/assets/images/customer1.jpeg" alt="" class="rounded-full object-cover w-[120px] h-[120px]">
         <p class='mt-6 max-w-sm text-center info-text'>{{ feedback }}</p>
         <div class='mt-3 flex justify-center items-center gap-2.5'>
            <img src="@/assets/icons/star.svg" alt="" width={24} height={24} class="object-contain m-0">
            <p class='text-xl font-montserrat text-slate-gray'>{{ rating }}</p>
         </div>
         <h3 class="mt-1 font-palanquin text-3xl text-center font-bold">{{ name }}</h3>
    </div>
</template>




<script>
    export default{
        props:['name','feedback','rating']
    }

</script>