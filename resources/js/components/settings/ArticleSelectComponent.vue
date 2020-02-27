<template>
<div>
    <select v-model="selected" multiple class="form-control" :name="name">
    <option :selected="selected.includes(article.id)" v-for="article in list" :value="article.id">ID: {{ article.id }}  -  {{ article.title }}</option>
    </select>
    <br>
    <p><b>Bạn đã chọn hiển thị các bài viết:</b></p>
    <ul>
        <li v-for="item in selected">{{ getArticle(item) }}</li>
    </ul>
</div>

</template>

<script>
    export default {
        props: ["name", "value"],
        data () {
            return {
                list: [],
                selected: this.value? this.value:[]
            }
        },
        mounted () {
            axios.get('/api/articles?public').then(response => (
                    this.list = response.data.data)).catch(error => {
                    return
            })
        },
        methods:{
            getArticle(id){
                let article =  this.list.find(element => element.id == id)
                if(typeof article !== 'undefined')return article['title']
                else return ''
            }
        },
        watch: {
            value: function() {
                this.selected = this.value
            },

        },        
    }
</script>
