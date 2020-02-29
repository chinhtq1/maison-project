<template>

            <div class="col-md-6">
                <div class="card card-default">
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
                            <label>Slide ảnh</label>
                            <input type="file" accept="image/*"
                                :name="input_text" 
                                @change="onFileChange"
                                class="form-control-file" >
                            <img alt="Chưa có ảnh" width="auto" height="200"
                                style="margin-top:15px;margin-bottom: 15px;" 
                                :src="getImageSrc">
                            <br>

                            <input type="text"  v-bind:name="input_type" readonly hidden v-bind:value="type">
                            <input type="text"  v-bind:name="input_text" readonly hidden v-bind:value="image">                                    
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

</template>

<script>
    export default {
        props: ['id', 'value', 'type','placeholder'],

        data(){
            return {
                image: this.value
            }
        },

        computed: {
            input_text() {
                return "slides[" + this.id + "][text]"
            },

            input_type() {
                return "slides[" + this.id + "][type]"
            },

            getImageSrc() {
                if (this.image !== "") {
                    if (this.image.includes("slides/slide-",)){
                        return "/" + this.image
                    }
                    return this.image
                }
                return this.placeholder

            }

        },

        methods: {
            onFileChange(e) {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },

            createImage(file) {
                var image = new Image();
                var reader = new FileReader();
                var vm = this;

                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
        },

        watch: {
            value: function() {
                this.image = this.value
            },
            image: function() {
                this.$root.slides[this.id]["data"] = this.image
            }
        },        

    }
</script>
