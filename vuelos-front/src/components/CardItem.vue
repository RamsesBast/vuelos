<template>
    <div class="card-item">
      <div class="card-header">
        <h3>Vuelo:  {{ flightName }}</h3>
      </div>
      <div class="card-body">
        <p>Origen:  {{ origin }}</p>
        <p>Precio:  {{ price }}</p>
      </div>
      <div class="card-footer">
        <button @click="buyFlight" class="btn btn-primary">Comprar vuelo</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      flightName: String,
      origin: String,
      price: Number
    },
    methods: {
      buyFlight() {
        

        console.log(`Vuelo ${this.flightName} comprado por ${this.price}`);
      }
    }
  };
  </script>
  
  <style scoped>
  .card-item {
    width: 300px;
    margin: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s;
  }
  
  .card-header {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
  }
  
  .card-body {
    padding: 20px;
  }
  
  .card-footer {
    padding: 10px;
    text-align: center;
  }
  </style>
  