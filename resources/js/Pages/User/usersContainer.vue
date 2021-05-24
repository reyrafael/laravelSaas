<template>
   <div class="flex justify-between">
       <div>
            Users
       </div>
       <div>
           Status
       </div>
       <div>

       </div>
   </div>
   <div>
       {{user}}
   </div>
   
</template>
<script>

export default 
     {
        components:{
           
        },
        methods:{
            loadUsers(){
                axios.get("user").then(({data}) => (this.users = data))
            }
        },
        created(){
                this.loadUsers();
            }
    
    }
</script>
