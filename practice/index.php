<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<script src="https://unpkg.com/vue"></script>
<link type="text/css" href="http://davidtkatz.com/public_css/vue.css">
<body>
<div>
    <div><b>Target</b></div>
    User can input title in title box, input content in content box.
    After that user click to submit button we will show the form like that
    "
    Title
    Data time
    Content
    "
</div>
<div>
    <b>Solution</b>

</div>
<div id="app">
    <div class="solution">
        <div>
            <label>Title</label>
        </div>
        <input @click="hideSolution" v-model="note.title" />
        <div>
            <label>Content</label>
        </div>
        <input @click="hideSolution" v-model="note.content"/>
        <div style="margin-top: 10px;">
            <button @click="addNote" >Submit</button>
        </div>
        <hr>
        <div v-for="note in notes">
            <div><b>Title</b></div>
            <div>{{note.title}}</div>
            <div><b>Date</b></div>
            <div>{{note.date}}</div>
            <div><b>Content</b></div>
            <div>{{note.content}}</div>
        </div>
    </div>
</div>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            note: {
                title: '',
                content: '',
            },
            show: false,
            notes: [
                {
                    title: 'test',
                    content: 'content test',
                    time: new Date(Date.now()).toLocaleString()
                }
            ],
        },
        methods:{
            addNote(){
                this.show = true;
                let {title, content} = this.note
                this.notes.push({
                    title,
                    content,
                    date: new Date(Date.now()).toLocaleString()
                })
            },
            hideSolution(){
                this.show = false;
            }
        }

    });
</script>
</body>
</html>