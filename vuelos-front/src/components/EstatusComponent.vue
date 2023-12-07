<template lang="">
    <div>
        <HeaderComponent />
        <div class="p-5">
            <div class="d-flex justify-content-between">
                <h4>Vuelos</h4>
            </div>
            <div class="row">
                <table class="table" v-if="statusView == 1">
                    <thead>
                        <tr>
                            <th>ORIGEN</th>
                            <th>DESTINO</th>
                            <th>FECHA</th>
                            <th>ASIENTOS DISPONIBLES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="p in data" v-bind:key="p.id">
                            <td>Francia</td>
                            <td></td>
                            <td></td>
                            <td>$</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
        <FooterComponent />

    </div>
</template>
<script>
import axios from 'axios'
import HeaderComponent from "@/components/HeaderComponent.vue";
import FooterComponent from "@/components/FooterComponent.vue";
export default {
    name: 'EstatusComponent',
    components: {
        HeaderComponent,
        FooterComponent,
    },
    data:() => {
        return {
            data: [],
            url: "http://localhost:8000/api/",
            statusView: 1
        }
    },
    methods: {
        cambiarPantalla() {
            this.getData()
            this.statusView = 1
        },
        getData() {
            axios.get('products').then(res => {
                if (res.data.status == 'success') {
                    this.data = res.data.data
                }
            })
        }
    },
    mounted() {
        this.getData()
    }
}
</script>
<style lang="">
    
</style>