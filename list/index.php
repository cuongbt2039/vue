<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div id="app">
    <ul>
        <li v-for="color in colors" v-if="color.primary">{{color.text}}</li>
    </ul>
</div>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            colors: [
                {
                    text: 'red',
                    primary: true
                },
                {
                    text: 'blue',
                    primary:false
                },
                {
                    text: 'greed',
                    primary:true
                },
                {
                    text: 'yellow',
                    primary:true
                }
            ],
        }
    });
</script>
</body>
</html>