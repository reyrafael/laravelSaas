<template>
    <div>
        <div class="p-6 sm:px-5 bg-sepia-100 border-b border-sepia-300">
            <div class="flex items-center text-gray-800">
                <jet-application-logo class="block h-12 w-auto" /> 
                <div class="text-xl flex ">
                         hi there 
                        {{ $page.props.user.name }}
                        !!! Thank You for using WorkHub
                </div>      
            </div>
            <div class="flex justify-center">
                <div class="mt-8 text-2xl text-sepia-900">
                    Welcome to WorkHub Application! 
                </div>
                <div>
                </div>
            </div>
            
        </div>
        <div class="bg-sepia-100">
            <div class="p-6 ">
                <div class="ml-4 text-md text-black leading-7 font-semibold"> 
                    <div class="">
                        <div >
                            <a href="/" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="ml-1">
                                    Home
                                </span>
                            
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <a href="https://www.facebook.com/" class="flex items-center">
                            <img src="/images/facebook.svg" class="h-5 w-5" alt="">
                            <span class="ml-1">fb</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="https://twitter.com" class="flex items-center">
                            <img src="/images/twitter.svg" alt="" class="h-5 w-5">
                            <span class="ml-1">
                                twitter
                            </span>
                             
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
    }
</script>
