<template>
   <section class="padding bg-[#0d1b2a]">
    <footer class=" text-white py-10">
      <div class="container mx-auto flex flex-wrap justify-between items-start">
        <!-- Column 1: Programs -->
        <div class="w-full md:w-1/4 mb-8 md:mb-0">
          <h3 class="text-lg font-semibold mb-4 text-[#f7b500]">Programs</h3>
          <ul>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Corporate</a></li>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">One to One</a></li>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Consulting</a></li>
          </ul>
        </div>
        
        <!-- Column 2: Service -->
        <div class="w-full md:w-1/4 mb-8 md:mb-0">
          <h3 class="text-lg font-semibold mb-4 text-[#f7b500]">Service</h3>
          <ul>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Training</a></li>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Coaching</a></li>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Consulting</a></li>
          </ul>
        </div>
        
        <!-- Column 3: Contact -->
        <div class="w-full md:w-1/4 mb-8 md:mb-0">
          <h3 class="text-lg font-semibold mb-4 text-[#f7b500]">Contact</h3>
          <ul>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Home</a></li>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">About</a></li>
            <li><a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">Contact</a></li>
          </ul>
        </div>
        
        <!-- Column 4: Newsletter -->
        <div class="w-full md:w-1/4">
          <h3 class="text-lg font-semibold mb-4 text-[#f7b500]">Newsletter</h3>
          <form>
            <input
              type="email"
              placeholder="Email Address"
              class="w-full p-2 mb-4 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-[#f7b500]"
            />
            <MyButton backgroundColor="bg-[#ff6433] text-white rounded-[12px] border-[#ff6433] hover:bg-[#f7b500] hover:border-[#f7b500] transition-colors duration-300">
                Subscribe
            </MyButton>
          </form>
          <div class="flex mt-4 space-x-3">
            <a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-gray-300 hover:text-[#f7b500] transition-colors duration-300">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
      </div>
  
      <div class="container mx-auto text-center border-t border-gray-700 pt-8 mt-8">
        <p class="text-gray-400">© 2024 Myautoécole.com</p>
      </div>
    </footer>
</section> 
  </template>
  
  <script>
  import MyButton from '@/Components/MyButton.vue';
  
  export default {
    components: { MyButton },
  };
  </script>
  
  <style >
  .container {
    max-width: 1200px;
  }
  </style>
  