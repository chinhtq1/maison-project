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

                        <editor
                        v-bind:name = "input_text"
                        v-model="localValue"
                        api-key="no-api-key"
                        :init="{
                            height: 5,
                            menubar: false,
                            plugins: [
                            'advlist autolink lists link image charmap print preview anchor',
                            'searchreplace visualblocks code fullscreen',
                            'insertdatetime media table paste code help wordcount'
                            ],
                            toolbar:
                            'undo redo | formatselect | bold italic backcolor | \
                            alignleft aligncenter alignright alignjustify | \
                            bullist numlist outdent indent | removeformat | help',
                        }"
                        />

                        <input type="text"  v-bind:name="input_type" readonly hidden v-bind:value="type">                  
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Editor from '@tinymce/tinymce-vue'

    export default {
        props: ['id', 'value', 'type'],

        components: {
            'editor': Editor,
        },

        data(){
            return {
                localValue: this.value
            }
        },

        computed: {
            input_text() {
                return "slides[" + this.id + "][text]"
            },

            input_type() {
                return "slides[" + this.id + "][type]"
            }
        },

        watch: {
            value: function() {
                this.localValue = this.value
            },
            localValue: function() {
                this.$root.slides[this.id]["text"] = this.localValue
            }
        },        

    }
</script>
