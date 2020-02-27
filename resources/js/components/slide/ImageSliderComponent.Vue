<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-slide-color">
                    <div class="card-header">
                        <h3 class="card-title">Slide {{ id + 1 }}</h3>

                        <div class="card-tools">
                            <button 
                                type="button" 
                                class="btn btn-tool" 
                                data-card-widget="collapse" 
                                data-toggle="tooltip" 
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                            <button 
                                type="button" 
                                class="btn btn-tool" 
                                v-on:click="$emit('remove-slider')"
                                data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <a class="btn btn-info" @click="openFileManager">
                            <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </div>
                        <input type="text" readonly class="form-control link-image" 
                            v-model="main_image"
                            v-bind:name = "input_originUrl"
                            style="max-width: 300px">
                        </div>
                        <img class="mt-3" :src="getImageUrl" width="auto" height="300" style="border: 1px solid #333"/>
                        <input type="text"  v-bind:name="input_type" readonly hidden v-bind:value="type">                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['id', 'value','type', 'image_url'],
        data(){
            return {
                main_image: this.value 
            }
        },
        computed: {
            input_originUrl() {
                return "slides[" + this.id + "][originUrl]"
            },

            input_type() {
                return "slides[" + this.id + "][type]"
            },

            getImageUrl() {
                if(this.image_url) return this.image_url
                else if (this.main_image) return this.main_image
                return 'https://via.placeholder.com/500x300'
            }
        },
        methods: {
            openFileManager () {
                window.open(`/laravel-filemanager?type=image`, 'FileManager','width=900,height=600')
                var self = this
                window.SetUrl = function (items) {
                    self.main_image = items
                    self.$root.slides[self.id]["imageUrl"] = null
                }
                    return false
            }
        },
        watch: {
            value: function() {
                this.main_image = this.value
            },
            main_image: function() {
                this.$root.slides[this.id]["originUrl"] = this.main_image
            }
        },

    }
</script>