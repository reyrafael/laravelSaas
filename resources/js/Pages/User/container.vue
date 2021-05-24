<template>
    <app-layout>
        <template #header>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
                </h2>
            </div> 
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-sepia-100 overflow-hidden shadow-xl sm:rounded-lg">
                   <users-container/>
                </div>
            </div>
        </div>
    </app-layout>
   
</template>
<script>
 import AppLayout from '@/Layouts/AppLayout'

import UsersContainer from './usersContainer.vue'
export default 
     {
        components:{
            AppLayout,
            UsersContainer
            
        }
    }
</script>
