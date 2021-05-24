<template>
    <div v-if="$page.props.user.name != message.user.name">
        <div class="flex" >
            <div class="font-semibold text-md" >
                {{message.user.name}}:
             
            </div>
            <div class="ml-2">
             {{message.message}}
            </div>   
        </div>
        <div class="text-xs text-gray-600">
            {{moment(message.created_at).fromNow()}}
        </div>   
    </div>
    <div v-if="$page.props.user.name == message.user.name">
        <div class="flex justify-end"> 
            <div>
                {{message.message}}
            </div>  
        </div>
        <div class="text-xs text-gray-600 flex justify-end">
            {{moment(message.created_at).fromNow()}}
        </div>   
    </div>
    
</template>

<script>
var moment = require('moment');
    export default{
        props: ['message'],
        data(){
            return{
                moment:moment
            }
        }
    }

</script>