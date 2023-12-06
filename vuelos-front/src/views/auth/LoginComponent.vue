<template>
  <div>
    <HeaderComponent />
    <div
      class="d-flex justify-content-center aling-items-center vh-100 bg-info"
    >
      <div
        class="bg-white m-5 p-5 rounded-5 justify-content-center aling-items-center"
        style="width: 23rem; height: 33rem"
      >
        <div class="d-flex justify-content-center">
          <img src="../../assets/A.png" alt="A" style="height: 7rem" />
        </div>
        <h1 class="text-center fw-bold">Login</h1>
        <div class="p-3">
          <label for="">Email</label>
          <input
            style="
              border: none;
              border-bottom: 1px black solid;
              border-radius: 0;
              border-top-left-radius: 10px;
              border-top-right-radius: 10px;
            "
            v-on:keyup="error = false"
            v-model="txtEmail"
            type="email"
            class="form-control bg-ligth input-group-text"
          />
        </div>
        <div class="p-3">
          <label for="">Password</label>
          <input
            style="
              border: none;
              border-bottom: 1px black solid;
              border-radius: 0;
              border-top-left-radius: 10px;
              border-top-right-radius: 10px;
            "
            v-on:keyup="error = false"
            v-model="txtPassword"
            type="password"
            class="form-control bg-ligth input-group-text"
          />
        </div>
        <div class="d-flex ap-3 justify-content-center aling-items-center">
          <router-link class="btn btn-outline-info mx-4" :to="'/register'"
            >Registro</router-link
          >
          <button @click="login" class="btn btn-dark">Ingresar</button>
        </div>
        <div v-if="error" class="p-3 alert alert-danger">
          Credenciales Incorrectas
        </div>
      </div>
    </div>
    <FooterComponent />
  </div>
</template>
<script>
import FooterComponent from "@/components/FooterComponent.vue";
import HeaderComponent from "@/components/HeaderComponent.vue";

export default {
  name: "LoginComponent",
  components: {
    HeaderComponent,
    FooterComponent,
  },
  data() {
    return {
      error: false,
      txtEmail: "test@gmail.com",
      txtPassword: "123123",
    };
  },
  methods: {
    login() {
      if (this.txtEmail == "test@gmail.com" && this.txtPassword == "123123") {
        this.$router.push("/payment");
      } else {
        this.error = !this.error;
      }
    },
  },
};
</script>
