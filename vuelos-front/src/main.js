import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap'
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.js"
import router from "./routes"
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import axios from 'axios'
axios.defaults.baseURL='http://localhost:8000/api/'

createApp(App)
    .use(router)
    .use(VueSweetalert2)
    .mount('#app')
