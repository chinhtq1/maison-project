<template>
<div>
    <select v-model="selected" :name="name" class="form-control">
        <option disabled value="">Please select one</option>
        <option v-for="slide in list" :value="slide.id" 
        :selected="selected==slide.id">ID: {{ slide.id }}  -  {{ slide.title }}</option>
    </select>
    <br>
    <p><b>Bạn đã chọn :</b></p>
    <p style="color: green">{{ getSlide(selected) }}</p>
</div>

</template>

<script>
    export default {
        props: ["name", "value",'type'],
        data () {
            return {
                list: [],
                selected: this.value
            }
        },
        mounted () {
            axios.get('/api/slides/'+ this.type +'?public').then(response => (
                    this.list = response.data.data)).catch(error => {
                    return
            })
        },
        methods:{
            getSlide(id){
                let slide = this.list.find(element => element.id == id)
                if(typeof slide !== 'undefined') return slide.id +" : "+slide.title
                else return  ''
                }
        },
        watch: {
            value: function() {
                this.selected = this.value
            },

        },         
    }
</script>
