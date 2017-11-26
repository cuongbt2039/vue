<template>
    <div class="col-md-4" v-on:click="switchCharacter">
        <div class="character-card">
            <div class="card-block">
                <h4 class="card-title">{{character.name}} </h4>
                <p class="card-text">{{character.height}} </p>
                <p class="card-text">{{character.mass}} </p>
                <p class="card-text">{{character.heir_color}} </p>
                <p class="card-text">{{character.eye_color}} </p>
            </div>
        </div>
    </div>

</template>
<script>
    export default{
        props:['id'],
        data(){
            return{
                character:{}
            }
        },
        methods:{
            fetchCharacter(id){
                fetch('https://swapi.co/api/people/'+ id +'?format=json', {
                    method: 'GET'
                }).then(response => response.json())
                    .then(json => this.character = json)
            },
            switchCharacter(){
                let random_id = Math.floor(Math.random()*83) + 1;
                console.log(random_id);
                this.fetchCharacter(random_id);
            }
        },
        created(){
            this.fetchCharacter(this.id)
        }
    }
</script>
