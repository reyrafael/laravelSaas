<template>
        <nav class="">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between">
                    <div class="flex">  
                        <div>
                            <a href="/dashboard" class="flex items-center text-olive-500 hover:text-olive-600 py-4 px-3 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                                <span class="text-xl font-bold " style="">
                                    WorkHub
                                </span>
                            </a>
                        </div>  
                    </div>
                    <div class="hidden lg:flex items-center uppercase space-x-20 text-olive-500 font-semibold">
                        <div>
                            <a href="/services" class="hover:text-gray-900 transition duration-300">services</a>    
                        </div>
                        <div>
                            <a href="/achievements" class="hover:text-gray-900 transition duration-300">achievements</a>  
                        </div>
                        <div>
                            <a href="/careers" class="hover:text-gray-900 transition duration-300">careers</a>
                        </div>
                        <div v-if="!$page.props.user">
                            <a :href="route('login')" class="rounded-full bg-olive-400 hover:bg-olive-600 text-white px-6 p-2 shadow-lg shadow-sm transition duration-300">login</a>  
                        </div>
                        <div v-if="!$page.props.user">
                            <a :href="route('register')" class="rounded-full bg-olive-400 hover:bg-olive-600 text-white px-6 p-2 shadow-lg shadow-sm transition duration-300">register</a>  
                        </div>
                    </div>
                    <div class="lg:hidden flex items-center">
                        <button class="mobile-menu-button">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black bg-gray-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>       
                
            </div>
            <div class="mobile-menu lg:hidden hidden ml-2 uppercase">
                <a href="/services" class="block py-1 text-md hover:text-gray-900 text-olive-500 transition duration-300 focus:outline-none rounded hover:bg-gray-200 px-2 py-2">services</a> 
                <a href="/achievements" class="block py-1 text-md hover:text-gray-900 text-olive-500 transition duration-300 focus:outline-none rounded hover:bg-gray-200 px-2 py-2">achievements</a> 
                <a href="/careers" class="block py-1 text-md hover:text-gray-900 text-olive-500 transition duration-300 focus:outline-none rounded hover:bg-gray-200 px-2 py-2">careers</a>
                <a :href="route('login')" v-if="!$page.props.user" class="py-2 px-2 block rounded-full bg-olive-400 hover:bg-olive-600 text-white  shadow-lg shadow-sm transition duration-300">login</a>  
                <a :href="route('register')" v-if="!$page.props.user" class="py-2 px-2 block mt-1 rounded-full bg-olive-400 hover:bg-olive-600 text-white shadow-lg shadow-sm transition duration-300 mb-2">register</a>  
            </div>
        </nav>
        <div class="splide mt-1" id="card-slider">
	        <div class="splide__track">
		        <ul class="splide__list">
			        <li class="splide__slide">
                        <div class="lg:mr-20 lg:ml-20" id="images">
                            <img src="/images/carousel3.jpg" class="sm:w-full h-full">
                        </div>
                    </li>
			        <li class="splide__slide">  
                        <div class="lg:mr-20 lg:ml-20" id="images">
                            <img src="/images/carousel2.jpg" class="sm:w-full h-full" >
                        </div>
                    </li>
			        <li class="splide__slide"> 
                        <div class="lg:mr-20 lg:ml-20" id="images">
                            <img src="/images/carousel1.jpg" class="sm:w-full h-full" >
                        </div>
                    </li>
		        </ul>
	        </div>  
        </div>
        <div>
            <p v-if="!$page.props.user" class="uppercase absolute bottom-5 left-20 md:mb-20 md:pb-10 md:ml-20 font-bold text-gray-300 text-xl">providing<br> thousands of jobs<br> around the world over 40 years...</p>
        </div>
        <div class="flex justify-between" v-if="!$page.props.user">
           
            <div class="lg:absolute bottom-10 right-0 border-8 border-olive-500 bg-sepia-300 p-5" >
                <a :href="route('register')" type="submit" class="w-full text-center font-bold rounded-full text-gray-100 bg-blue-500 hover:bg-blue-700 p-4 transition duration-700">
                    APPLY NOW!!!
                </a>
                <p class="text-white px-6 p-2 text-base">We don't just look for a job that suits for you ,<br>we take you where your heart goes</p>
            </div>
        </div>
              
</template>
<script>

    
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        },
        mounted(){
            const btn = document.querySelector('button.mobile-menu-button')
            const menu = document.querySelector('.mobile-menu')
            btn.addEventListener("click",()=>{
            menu.classList.toggle("hidden");
            });
            new Splide( '#card-slider',{
                type:'loop',
                speed: 600,
                perPage:1
    
                
            } ).mount();
        }
       
   
  
      
    };
       
</script>
