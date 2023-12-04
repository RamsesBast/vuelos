<template>
    <div class="d-flex justify-content-center">
           
        <div>
            <h1 class=" text-center">Log In</h1>
            <div class="p-3">
                <label for="">Email</label>
                <input v-on:keyup="error=false" v-model="txtEmail" type="email" class="form-control">
            </div>
            <div class="p-3">
                <label for="">Password</label>
                <input v-on:keyup="error=false" v-model="txtPassword" type="password" class="form-control">
            </div>
            <div class="ap-3">
                <router-link class="btn btn-outline-info mx-4" :to="'/register'">Registro</router-link>
                <button @click="login" class="btn btn-dark">Ingresar</button>
            </div>
            <div v-if="error" class="p-3 alert alert-danger">
                Credenciales Incorrectas
            </div>
        </div>

    </div>
</template>
<script>
    export default{
        name:'LoginComponent',
        data(){
            return {
                error:false,
                txtEmail:"test@gmail.com",
                txtPassword:"123123",
            }
        },
        methods:{
            login(){
                if(this.txtEmail == 'test@gmail.com' && 
                    this.txtPassword == '123123'){
                   this.$router.push('/payment')
                }else{
                    this.error = !this.error
                }
            }
        }
    }
</script>