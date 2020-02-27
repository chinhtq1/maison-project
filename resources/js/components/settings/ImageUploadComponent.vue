<template>
<div class="card-body">
    <div class="input-group input-group-sm">
    <div class="input-group-prepend">
        <a class="btn btn-info" @click="openFileManager">
        <i class="fa fa-picture-o"></i> Choose
        </a>
    </div>
    <input type="text" readonly class="form-control link-image" 
        v-model="main_image" 
        style="max-width: 300px"
        :name="name">
    </div>
    <img class="mt-3" :src="getImageUrl"  height="300" width="auto" style="border: 1px solid #333" />

</div>

</template>

<script>
    export default {
        data(){
            return {
                main_image:  this.value 
            }
        },
        props: ["name", "width", "height", "image_url", "value"],

        methods: {
            openFileManager () {
                window.open(`/laravel-filemanager?type=image`, 'FileManager','width=900,height=600')
                var self = this
                window.SetUrl = function (items) {
                    console.log(items)
                    self.main_image = items
                    self.image_url = null

                }
                    return false
            }
        },
        computed: {
            getImageUrl() {
                if(this.image_url) return this.image_url
                else if (this.main_image) return this.main_image
                return 'https://via.placeholder.com/'+ this.width +'x'+this.height
            }
        },
       watch: {
            value: function() {
                this.main_image = this.value
            },          
        },       
    }
</script>