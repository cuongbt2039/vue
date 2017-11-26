<template>
    <div id="app">
        <h3>{{title}}</h3>
        <div class="col-md-12">
            <Character
                    v-for="(id, idex) in initial_ids"
                :id="id"
            />
        </div>

    </div>
</template>
<script>
    import Character from './components/Character.vue'
    export default{
        name: 'app',
        data(){
            return {
                title: 'Generate Your Team',
                initial_ids:[1, 13, 14]
            }
        },
        methods:{
            fetchCharacter(){
                fetch('https://swapi.co/api/people/1?format=json', {
                    method: 'GET'
                }).then(response => response.json())
                    .then(json =>console.log(json))
            }
        },
        components:{
            Character
        }
    }
</script>