<template>
    <header class="padding-x py-8 fixed z-10 w-full bg-white">
        <nav class="flex justify-between items-center max-container">
            <a href="/">
                <img src="@/assets/images/logo.svg" alt="logo"
                    width="129"
                    height="29"
                    class="m-0 w-[129px] h-[29px]">
            </a>
            <!-- Main navigation (hidden on small devices) -->
            <ul class="flex-1 flex justify-center items-center gap-16 max-lg:hidden">
                <li v-for="item in navItems" :key="item.text" class="nav-item">
                    <Link :href="item.link" class="font-montserrat leading-normal text-lg text-slate-gray">{{ item.text }}</Link>
                </li>
                <div class="flex gap-4" v-if="!$page.props.auth.user">
                    <Link href='/login'><MyButton backgroundColor="bg-[#ff6433] text-white rounded-[12px] hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300">Login</MyButton></Link>
                    <Link href='/register'><MyButton backgroundColor="bg-[#ff6433] text-white rounded-[12px] hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300">Register</MyButton></Link>
                </div>
                <div v-else>
                    <Link :href="route('logout')" method="post"><MyButton backgroundColor="bg-[#ff6433] text-white rounded-[12px]">Logout</MyButton></Link>
                </div>
            </ul>

            <!-- Hamburger icon (visible on small devices) -->
            <div class="hidden max-lg:block">
                <img src="@/assets/images/hamburger.svg" alt="hamburger icon" 
                     style="width: 20px; height: 20px;" 
                     @click="toggleSidebar" />
            </div>
        </nav>

        <!-- Sidebar -->
        <transition name="slide">
            <div v-if="showSidebar" class="fixed top-0 left-0 w-48 h-full bg-white shadow-lg z-20 p-6">
                <button @click="toggleSidebar" class="mb-4 text-gray-600">Close</button>
                <ul class="mb-8">
                    <li v-for="item in navItems" :key="item.text" class="nav-item mb-4">
                        <Link :href="item.link" class="font-montserrat leading-normal text-lg text-slate-gray">{{ item.text }}</Link>
                    </li>
                </ul>
                <div class="flex flex-col gap-4">
                    <Link href='/login'>
                        <MyButton backgroundColor="bg-[#ff6433] text-white rounded-[12px] hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300 w-full">
                            Login
                        </MyButton>
                    </Link>
                    <Link href='/register'>
                        <MyButton backgroundColor="bg-[#ff6433] text-white rounded-[12px] hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300 w-full">
                            Register
                        </MyButton>
                    </Link>
                </div>
            </div>
        </transition>
    </header>
</template>

<script>
import MyButton from '@/Components/MyButton.vue'; 
import { Link } from '@inertiajs/vue3';

export default {
    data() {
        return {
            navItems: [
                { text: 'Accueil', link: '/' },
                { text: "L'agence", link: '/' },
                { text: 'Nos Voitures', link: '/cars' },
                { text: 'Nos moniteurs', link: '/trainers' }
            ],
            showSidebar: false, // Sidebar visibility state
            windowWidth: window.innerWidth // Initial window width
        };
    },
    methods: {
        toggleSidebar() {
            this.showSidebar = !this.showSidebar; // Toggle sidebar visibility
        },
        updateWindowWidth() {
            this.windowWidth = window.innerWidth;
            if (this.windowWidth > 1024) {
                this.showSidebar = false; // Close the sidebar on large screens
            }
        }
    },
    watch: {
        windowWidth(newWidth) {
            if (newWidth > 1024) {
                this.showSidebar = false; // Close the sidebar when screen is large
            }
        }
    },
    mounted() {
        window.addEventListener('resize', this.updateWindowWidth);
    },
    beforeUnmount() {
        window.removeEventListener('resize', this.updateWindowWidth);
    },
    components: { MyButton, Link }
};
</script>

<style scoped>
/* Slide transition for the sidebar */

.slide-enter-active, .slide-leave-active {
  transition: transform 0.3s ease-out;
}

.slide-enter-from {
  transform: translateX(-100%); /* Start off-screen to the right */
}

.slide-leave-to {
  transform: translateX(-100%); /* End off-screen to the left */
}

/* Hover effect on navigation items */
.nav-item {
    transition: opacity 0.3s ease, transform 0.3s ease;
}
.nav-item:hover {
    transform: scale(1.05); /* Slightly enlarge the hovered item */
    opacity: 1; /* Ensure the hovered item is fully visible */
}
.nav-item:hover ~ .nav-item {
    opacity: 0.5; /* Fade other items */
}
.nav-item:not(:hover) {
    opacity: 0.8; /* Slightly fade items that are not hovered */
}
</style>
