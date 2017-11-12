<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div id="app">
    <span>Change the text</span>
    <input v-model="text" placeholder="text ...."/>
    <div>Lowercased: {{lowerText}}</div>
</div>

<script>
    var app = new Vue({
        el:'#app',
        data:{
            text:''
        },
        computed:{
            lowerText(){
                return this.text.toLowerCase();
            }
        }
    });
</script>
</body>
</html>