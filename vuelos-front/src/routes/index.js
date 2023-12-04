import * as VueRouter from 'vue-router'

import LoginComponent from '@/views/auth/LoginComponent'
import RegisterComponent from '@/views/auth/RegisterComponent'
import InicioComponent from '@/components/InicioComponent'
const routes = [
    {path:'/login', name:'login',component:LoginComponent},
    {path:'/register', name:'register',component:RegisterComponent},
    {path:'/inicio', name:'inicio',component:InicioComponent}
]
const router = VueRouter.createRouter({
    history:VueRouter.createWebHistory(),
    routes
})
export default router