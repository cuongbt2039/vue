<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div id="app">
    <button class="vue-btn" @click="reveal">
        Reveal the Secret Number
    </button>
</div>

<script>
    var app = new Vue({
        el:'#app',
        data:{
            secretNumber: Math.floor(Math.random()*100)+1
        },
        methods:{
            reveal(){
                alert(`Here's the secret number: `+ this.secretNumber);
            }
        }
    });
</script>
</body>
</html>