<template>
<div class="card-body">
    <div class="input-group input-group-sm">
    <div class="input-group-prepend">
        <a class="btn btn-info" @click="openFileManager">
        <i class="fa fa-picture-o"></i> Choose
        </a>
    </div>
    <input type="text" readonly class="form-control" v-model="main_image" style="max-width: 300px">
    </div>
    <img v-if="main_image" class="mt-3" :src="main_image" width="auto" height="300" style="border: 1px solid #333" />

</div>

</template>

<script>
    export default {
        data(){
            return {
                main_image: null 
            }
        },

        methods: {
            openFileManager () {
                window.open(`/laravel-filemanager?type=image`, 'FileManager','width=900,height=600')
                var self = this
                window.SetUrl = function (items) {
                    console.log(items)
                    self.main_image = items
                }
                    return false
            }
        },

    }
</script>