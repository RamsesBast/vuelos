<template>
    <div>
      <HeaderComponent />
      
      <div class="cards-container">
      <div v-for="index in 10" :key="index" class="card-wrapper">
        <CardItem
          flightName="Nombre del Vuelo"
          origin="Ciudad de Origen"
          price="100.00"
        />
      </div>
    </div>
  
      <FooterComponent />
    </div>
  </template>
  <script>
  import CardItem from "@/components/CardItem.vue";
import FooterComponent from "@/components/FooterComponent.vue";
  import HeaderComponent from "@/components/HeaderComponent.vue";
  export default {
    name: "RegisterComponent",
    components: {
    HeaderComponent,
    FooterComponent,
    CardItem
},
    data() {
      return {
        error: false,
        txtEmail: "test@gmail.com",
        txtPassword: "123123",
      };
    }, //npm install vue-router@4
    methods: {
      login() {
        if (this.txtEmail == "test@gmail.com" && this.txtPassword == "123123") {
          console.log("CORRECTO");
        } else {
          this.error = !this.error;
        }
      },
    },
  };
  </script>
<style scoped>
.cards-container {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  gap: 1px;
  justify-content: center;
  align-items: center;
  min-height: 100vh;

}

.card-wrapper {
  margin: 15px;
}
</style>