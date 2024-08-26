<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
    backgroundColor: {
        type: String,
        default: 'bg-coral-red text-white border-coral-red rounded-full', // default background color
    },
});
</script>

<template>
    <button :type="type" :class="`${backgroundColor} flex justify-center items-center gap-2 px-7 py-4 border font-montserrat text-lg leading-none`">
        <slot/>
    </button>
</template>
