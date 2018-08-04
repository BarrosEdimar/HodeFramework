<template>
    <v-layout row wrap>
        <v-flex xs3 v-for="n in 2" :key="n">
            <v-card color="blue-grey darken-2" class="white--text">
                <v-card-title primary-title>
                    <div class="headline">App Mobile Hode</div>
                </v-card-title>
                <v-card-text>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur magni explicabo esse tempora, ipsam ad laudantium commodi dolor consectetur quae, repellat quaerat nulla ipsum! Omnis, accusantium sint! Maxime, eveniet quasi!
                </v-card-text>
                <v-card-actions>
                    <v-btn flat dark :to="'/projects/' + n">Ver +</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>

        <v-flex xs3>
            <projects-create></projects-create>
        </v-flex>
    </v-layout>
</template>

<script>
import ProjectCreate from './Create';

export default {
    components: {
        'projects-create': ProjectCreate
    }
}
</script>
