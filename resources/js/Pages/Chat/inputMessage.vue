<template>
    <div class="relative border-t border-sepia-300">
        <div class="ml-2 mt-2 mr-2 mb-2 items-center grid grid-cols-9">
            <input type="text" v-model="message" @keyup.enter="sendMessage()" placeholder="Say Something...." class="col-span-7 border-none bg-sepia-100">
            <button @click="sendMessage()" class="place-self-end col-span-2 border border-sepia-500 p-2 px-5 rounded-full hover:bg-sepia-500 text-sepia-500 hover:text-white">
                Send
            </button>
        </div>
    </div>
</template>
<script>
    import Input from '../../Jetstream/Input.vue'

    export default{
        components: {
            Input}
        ,
        props: ['room'],
        data: function(){
            return{
                message: ''
            }
        },
        methods: {
            sendMessage(){
                if(this.message == ' '){
                    return;
                }
                axios.post('/chat/room/' + this.room.id + '/message',{
                    message: this.message
                })
                .then(response =>{
                    if(response.status == 201){
                        this.message = '';
                        this.$emit('messagesent');
                    }
                })
                .catch(error=>{
                    console.log(error);
                })
            }
        }
    }
</script>
<style>
    input:focus{
        outline: 0;
        border:none;
        border-width: 0px;
    }
</style>