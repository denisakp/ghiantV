<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center">Mes tâches</h1>
                <form v-on:submit.prevent="addTache">
                    <div class="form-group">
                        <label for="Titre">Titre</label>
                        <input v-model="titreTache" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <button v-if="this.isEdit == false" type="submit"
                        class="btn btn-success btn-block mt-3" >Enregistrer</button>

                        <button v-else v-on:click="updateTache()" type="submit"
                        class="btn btn-warning btn-block mt-3" >Mettre à jour</button>
                    </div>

                </form>

                <div class="table-responsive">
                    <table class="table table-bordered ">
                        <tr v-for="(tache, index) in taches" :key="index" v-bind:title="tache.titre">
                            <td class="text-left">{{tache.titre}}</td>
                            <td class="text-right">
                                <button class="btn btn-info" v-on:click="editTache(tache.titre, tache.id)">Modifier</button>
                                <button class="btn btn-danger" v-on:click="deleteTache(tache.id)" >Supprimer</button>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            isEdit: false,
            taches: [],
            id: '',
            titreTache: ''
        }
    },
    mounted(){
       this.getTache();
    },

    methods: {
        getTache(){
            axios.get('/api/taches')
            .then((response)=>{
                this.taches = response.data;
            }).catch((error)=>{
                if(error.response){
                    console.log(error.response.data);
                    console.log(error.response.data);
                }else if(error.request){
                    console.log(error.request);
                }else{
                    console.log('erreur: ', error.message);
                }
                console.log(error.config);
            });
        },

        addTache(){
            axios.post('/api/taches', {titre: this.titreTache})
            .then((response)=>{
                this.titreTache = '';
                this.getTache();
            }).catch((error)=>{
                if(error.response){
                    console.log(error.response.data);
                    console.log(error.response.data);
                }else if(error.request){
                    console.log(error.request);
                }else{
                    console.log('erreur: ', error.message);
                }
                console.log(error.config);
            });
        },

        editTache(titre, id){
            this.id = id;
            this.titreTache= titre;
            this.isEdit = true;
        },
        
        updateTache(){
            axios.put(`/api/taches/${this.id}`, {titre: this.titreTache})
            .then((response)=>{
                this.titreTache = '';
                this.isEdit = false;
                this.getTache();
            }).catch((error)=>{
                if(error.response){
                    console.log(error.response.data);
                    console.log(error.response.data);
                }else if(error.request){
                    console.log(error.request);
                }else{
                    console.log('erreur: ', error.message);
                }
                console.log(error.config);
            });
        },

        deleteTache(id){
            axios.delete(`/api/taches/${id}`)
            .then((response)=>{
             this.titreTache = '';
             this.getTache();
            }).catch((error)=>{
                if(error.response){
                    console.log(error.response.data);
                    console.log(error.response.data);
                }else if(error.request){
                    console.log(error.request);
                }else{
                    console.log('erreur: ', error.message);
                }
                console.log(error.config);
            });
        }
    }
}
</script>
