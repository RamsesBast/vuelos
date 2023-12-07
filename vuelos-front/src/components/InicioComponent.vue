<template lang="">
  <div class="bg-info justify-content-center aling-items-center">
    <HeaderComponent />

    <div style="border-radius: 15px" class="d-flex container bg-white p-5 m-5">
      <div class="row justify-content-center aling-items-center">
        <div
          style="border-radius: 15px; width: 35rem"
          class="p-3 col-4 justify-content-center aling-items-center"
        >
          <input
            style="margin-left: 25%; border-color: blue"
            type="radio"
            class="bg-info form-check-input form-check-inline"
            name="tipo_vuelo"
            value="Simple"
            id=""
            checked
          />Simple
          <input
            style="margin-left: 10%; border-color: blue"
            type="radio"
            class="bg-info form-check-input form-check-inline"
            name="tipo_vuelo"
            value="Redondo"
            id=""
          />Redondo <br />
          <br />
          <div class="row mx-auto">
            <div class="col-4 mx-auto">
              <h5>Origen</h5>
              <DropDown :options="Vuelos" /> <br />
            </div>
            <div class="col-4 mx-auto">
              <h5>Destino</h5>
              <DropDown :options="Vuelos" />
            </div>
          </div>
          <div class="row mx-auto">
            <div class="col-4 mx-auto">
              <h5>Fecha de salida</h5>
              <input
                style="
                  border: none;
                  border-bottom: 1px black solid;
                  border-radius: 0;
                  border-top-left-radius: 10px;
                  border-top-right-radius: 10px;
                "
                type="date"
                name=""
                id=""
              />
            </div>
            <div class="col-4 mx-auto">
              <h5>Fecha de regreso</h5>
              <input
                style="
                  border: none;
                  border-bottom: 1px black solid;
                  border-radius: 0;
                  border-top-left-radius: 10px;
                  border-top-right-radius: 10px;
                "
                type="date"
                name=""
                id=""
              />
            </div>
          </div>
          <br />
          <h5 class="d-flex justify-content-center">Número de pasajeros</h5>
          <input
            class="d-flex justify-content-center aling-items-center"
            style="
              border: none;
              border-bottom: 1px black solid;
              border-radius: 0;
              border-top-left-radius: 10px;
              border-top-right-radius: 10px;
              margin-left: 30%;
            "
            type="number"
            name=""
            id=""
          />
          <br />
          <br />
          <Button style="margin-left: 45%" class="btn btn-primary"
            >Buscar</Button
          >
        </div>
        <div style="margin-top: -25px" class="p-5col-5 w-40">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner m-5 p-5col-5">
              <div class="carousel-item active">
                <img
                  src="../assets/A.png"
                  style="margin-left: 20%"
                  class="d-block w-40"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../assets/A.png"
                  style="margin-left: 20%"
                  class="d-block w-40"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="../assets/A.png"
                  style="margin-left: 20%"
                  class="d-block w-40"
                  alt="..."
                />
              </div>
            </div>
            <buttons
              style=""
              class="carousel-control-prev bg-info"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon bg-info"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Anterior</span>
            </buttons>
            <button
              style=""
              class="carousel-control-next bg-info"
              type="button"
              data-bs-target="#carouselExample"
              data-bs-slide="next"
            >
              <span
                style=""
                class="carousel-control-next-icon bg-info"
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
import axios from "axios";

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

      Vuelos: [],
      //Vuelos2: ["Option1", "Option2", "Option3"],
    };
  },
  methods: {
    getData() {
      let arreglo = this.Vuelos;
      axios
        .get("airlines")
        .then((response) => {
          if (response.data.status === "success") {
            //console.log(response);
            response.data.data.map(function (value) {
              //console.log(value.nombre);
              arreglo.push(value.pais);
            });
          }
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
      //console.log(this.airlines);
    },
  },
  mounted() {
    //console.log(this.airlines);
    this.getData();
  },
};
</script>
<style lang=""></style>
