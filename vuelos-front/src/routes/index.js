import * as VueRouter from 'vue-router'

import LoginComponent from '@/views/auth/LoginComponent'
import RegisterComponent from '@/views/auth/RegisterComponent'
import InicioComponent from '@/components/InicioComponent'
import VuelosComponent from '@/views/auth/VuelosComponent'
const routes = [
    {path:'/login', name:'login',component:LoginComponent},
    {path:'/register', name:'register',component:RegisterComponent},
    {path:'/inicio', name:'inicio',component:InicioComponent},
    {path:'/vuelos', name:'vuelos',component:VuelosComponent}
]
const router = VueRouter.createRouter({
    history:VueRouter.createWebHistory(),
    routes
})
export default router