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
                            <span class="text-xl font-bold ">
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
            <a href="/services" class="block py-1 text-md hover:text-gray-900 text-olive-500 transition duration-300">services</a> 
            <a href="/achievements" class="block py-1 text-md hover:text-gray-900 text-olive-500 transition duration-300">achievements</a> 
            <a href="/careers" class="block py-1 text-md hover:text-gray-900 text-olive-500 transition duration-300">careers</a>
            <a :href="route('login')" class="py-2 px-2 block rounded-full bg-olive-400 hover:bg-olive-600 text-white  shadow-lg shadow-sm transition duration-300">login</a>  
            <a :href="route('register')" class="py-2 px-2 block mt-1 rounded-full bg-olive-400 hover:bg-olive-600 text-white shadow-lg shadow-sm transition duration-300 mb-2">register</a>  
        </div>
    </nav>
    <div >
        <div class="splide lg:ml-10 lg:mr-10" id="card-slider">
	        <div class="splide__track">
		        <ul class="splide__list">
			        <li class="splide__slide bg-sepia-300 rounded">
                        <div class="text-xl font-semibold mt-20 py-5 ml-10 px-5 mr-10">
                            <p class="">1. PEOPLE TO PEOPLE</p><br><p>
                            We don't believe in just B2C or B2B. Everything we do is P2P - people to people. Unmatched customer 
                            service is our goal, and our teams are here each day to ensure customers get the most return on 
                            their investment. We talk to you like a person and work with you like a partner.</p>
                        </div>
                    </li>
			        <li class="splide__slide bg-green-500 rounded">  
                        <div class="text-xl font-semibold mt-20 py-5 ml-10 px-5 mr-10">
                           2. RIGHT-SIZE OFFERINGS<br><br>
                            Our comprehensive range of offerings allow us to respond to our customer’s specific needs with flexibility 
                            and cost-effective solutions, whether it’s a 10-person small business, mid-size regional company or 
                            an enterprise organization with 10,000+ employees.
                        </div>
                    </li>
			        <li class="splide__slide bg-indigo-500 rounded"> 
                        <div class="text-xl font-semibold mt-20 py-5 ml-10 px-5 mr-10">
                            3. INNOVATION THAT MATTERS<br><br>
                            Every new solution we create is to help you find, hire and manage great talent. 
                            If an innovation doesn't simplify your day, improve the efficiency of your team or
                            save your company money, then it's not successful. And the way we know is because we
                            listen to you every step of the way.
                        </div>
                    </li>
                    <li class="splide__slide bg-purple-500 rounded"> 
                        <div class="text-xl font-semibold mt-20 py-5 ml-10 px-5 mr-10">
                            4. KNOWLEDGE AND DATA<br><br>
                            We have over 21 billion occupation-related data points, millions of 
                            workforce profiles and over 1 million compensation and career path data points to power your human 
                            capital programs. We've been doing this for decades and bring knowledge and insights no one else can.
                        </div>
                    </li>
		        </ul>
	        </div>  
        </div>
        
    </div>
</template>
<script>

    export default {
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
}
</script>