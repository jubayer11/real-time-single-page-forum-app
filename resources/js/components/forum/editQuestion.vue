<template>
<v-card>
    <v-container fluid>
        <v-form

                @submit.prevent="update"

        >
            <v-text-field
                    label="Title"
                    v-model="form.title"
                    type="text"
                    required
            ></v-text-field>

            <markdown-editor v-model="form.body"></markdown-editor>


            <v-card-actions>
                <v-btn icon small type="submit">
                    <v-icon color="teal">save</v-icon>
                </v-btn>
                <v-btn icon small @click="cancel">
                    <v-icon color="black">cancel</v-icon>
                </v-btn>
            </v-card-actions>








        </v-form>
    </v-container>

</v-card>


</template>
<script>
    export default {
        props:['data'],
        data(){
            return {
                form:{
                    title:null,
                    body:null
                },


            }


        },
        created()
        {
            this.form =this.data
        },

        methods:{
            update(){
                axios.patch(`/api/question/${this.form.slug}`,this.form)
                    .then(res =>this.cancel())


            },
            cancel(){
                EventBus.$emit('cancelEditing')
            }
        }

    }
</script>
<style>

</style>
