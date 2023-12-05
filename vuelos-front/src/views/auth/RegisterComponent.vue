<template>
    <div class="d-flex justify-content-center aling-items-center vh-100 bg-info">
        

        <div class='bg-white m-5 p-5 rounded-5 justify-content-center aling-items-center' style="width:23rem; height:33rem">
        <div class='d-flex justify-content-center'>
            <img src="/assets/A.png" alt="A" style="height: 7rem" />
            </div>
            <h1 class="text-center fw-bold">Sign In</h1>
            <div class="p-3">
                <label for="">Email</label>
                <input style="border:none; border-bottom: 1px black solid;border-radius:0;border-top-left-radius:10px;border-top-right-radius:10px;" v-on:keyup="error=false" v-model="txtEmail" type="email" class="form-control bg-ligth input-group-text">
            </div>
            <div class="p-3">
                <label for="">Password</label>
                <input style="border:none;  border-bottom: 1px black solid;border-radius:0; border-top-left-radius:10px;border-top-right-radius:10px;" v-on:keyup="error=false" v-model="txtPassword" type="password" class="form-control bg-ligth input-group-text">
            </div>
            <div  class='d-flex ap-3 justify-content-center aling-items-center'>
                <router-link class="btn btn-warning mx-4" :to="'/login'">Login</router-link>
                <button @click="login" class="btn btn-dark">Registrar</button>
            </div>
            <div v-if="error" class="p-3 alert alert-danger">
                Credenciales Incorrectas
            </div>
        </div>

    </div>
</template>
<script>
    export default{
        name:'RegisterComponent',
        data(){
            return {
                error:false,
                txtEmail:"test@gmail.com",
                txtPassword:"123123",
            }
        },//npm install vue-router@4
        methods:{
            login(){
                if(this.txtEmail == 'test@gmail.com' && 
                    this.txtPassword == '123123'){
                    console.log("CORRECTO")
                }else{
                    this.error = !this.error
                }
            }
        }
    }
</script>