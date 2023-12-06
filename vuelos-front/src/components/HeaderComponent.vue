<template>
  <header class="w-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="/inicio">AirLink</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav d-flex">
            <li class="nav-item">
              <router-link class="nav-link active" aria-current="page" :to="'/'"
                >Vuelos</router-link
              >
            </li>
            <li class="nav-item">
              <router-link class="nav-link active" aria-current="page" :to="'/'"
                >Estatus de vuelo</router-link
              >
            </li>
            <li class="nav-item">
              <router-link
                class="nav-link active"
                aria-current="page"
                :to="'/login'"
                >Login</router-link
              >
            </li>
            <li class="nav-item">
              <router-link
                class="nav-link active"
                aria-current="page"
                :to="'/register'"
                >Sign Up</router-link
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>
<script>
export default {
  name: "HeaderComponent",
};
</script>
