<template>
    <v-layout row wrap>
        <v-flex xs12>
            <h2 class="mb-2">Nome do projeto</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque architecto labore ipsum dolor fugit repellat placeat totam? Quo, debitis ullam. Ipsam magni perferendis blanditiis laborum dolore autem. Minus, distinctio quos.</p>
        </v-flex>
        
        <sections/>

        <v-flex xs12>
            <v-btn to="/projects">Voltar</v-btn>
        </v-flex>

        <show-task/>
    </v-layout>
</template>

<script>
import sections from '../sections/List';
import showTask from '../tasks/Show';

export default {
    components: {
        sections,
        'show-task': showTask
    }
}
</script>

