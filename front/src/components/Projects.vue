<template>
    <v-layout row wrap>
        <v-flex xs12>
            <h2 class="display-1 mb-4">Projetos</h2>
        </v-flex>

        <v-container grid-list-md>
            <router-view></router-view>
        </v-container>
        
    </v-layout>
</template>

<script>
export default {
    data() {
        return {
            mensagem: 'Olá mundo'
        }
    },
    mounted() {
        console.log('Estamos pronto para trabalhar');
    }
}
</script>


<style>
    .title {
        background-color: rgb(255,150,0);
        color: #fff;
    }
</style>

