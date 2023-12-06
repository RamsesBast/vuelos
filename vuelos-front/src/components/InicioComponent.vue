<template lang="">
  <div class="bg-ligth">
    <HeaderComponent />

    <div class="container">
      <div class="row">
        <div class="col-4">
          <input type="radio" class="form-check-input"  name="tipo_vuelo" value="Simple" id="" checked />Simple
          <input type="radio" class="form-check-input"  name="tipo_vuelo" value="Redondo" id="" />Redondo
          <br> <br>
          <div class="row mx-auto">
            <div class="col-4 mx-auto">
              <h5>Origen</h5>
              <DropDown :options="Vuelos" /> <br>
            </div>
            <div class="col-4 mx-auto">
              <h5>Destino</h5>
              <DropDown :options="Vuelos2" />
            </div>
          </div>
          <div class="row mx-auto">
            <div class="col-4 mx-auto">
              <h5>Fecha de salida</h5>
              <input type="date" name="" id="" />
            </div>
            <div class="col-4 mx-auto">
              <h5>Fecha de regreso</h5>
              <input type="date" name="" id="" />
            </div>
          </div> <br>
          <h5>Número de pasajeros</h5>
          <input type="number" name="" id="" />
          <br />  <br>
          <Button class="btn btn-primary">Buscar</Button>
        </div>
        <div class="col-5 mx-auto">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/logo.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="../assets/logo.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="../assets/logo.png" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <FooterComponent />
  </div>
</template>
<script>
import HeaderComponent from "@/components/HeaderComponent.vue";
import DropDown from "@/components/DropDown.vue";
import FooterComponent from "@/components/FooterComponent.vue";

export default {
  name: "InicioComponent",
  components: {
    HeaderComponent,
    DropDown,
    FooterComponent,
  },
  data: () => {
    return {
      selected: "",
      Vuelos: ["Option1", "Option2", "Option3"],
      Vuelos2: ["Option1", "Option2", "Option3"],
    };
  },
  methods: {},
};
</script>
<style lang=""></style>
