<template>
<v-card class="ml-2">
    <v-toolbar color="cyan" dark dense class="mt-2">

        <v-toolbar-title>Categories</v-toolbar-title>

    </v-toolbar>
    <v-card>
        <v-list class="mt-2">
            <v-list-tile v-for="category in categories" :key="category.id">
                <v-list-tile-content >
                    <v-list-tile-title>
                        {{category.name}}
                    </v-list-tile-title>
                </v-list-tile-content>
            </v-list-tile>
        </v-list>
    </v-card>

</v-card>
</template>
<script>
    export default {
        data(){
          return {
              categories:{}
          }
        },
        created(){
            axios.get('/api/category')
                .then(res => this.categories = res.data.data)
        }


    }
</script>
<style>

</style>
