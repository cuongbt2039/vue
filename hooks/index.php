<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div id="app">
    <div class="">Count: {{count}}
        <button class="vue-btn" @click="increment">Increment</button>
    </div>
</div>

<script>
    var app = new Vue({
        el:'#app',
        data:{
            count: 0
        },
        methods:{
            increment(){
                this.count++
            }
        },
        updated(){
            console.log('this.count', this.count);
        }
    });
</script>
</body>
</html>