<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div id="app">
    <div
            v-bind:title="randNum"
            v-if="shown"
    >Hover me</div>
</div>

<script>
    var app = new Vue({
        el:'#app',
        data:{
            randNum: Math.floor(Math.random() * 49) + 1,
            shown: false
        }
    });
</script>
</body>
</html>