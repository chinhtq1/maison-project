<template>
<editor
	@onKeyUp="$emit('save-input', $event)"
	v-bind:name ="name"
	v-model="localValue"
	api-key="no-api-key"
	:init="{
		height: 5,
		menubar: false,
		force_br_newlines : true,
		force_p_newlines : true,
		forced_root_block : '',
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
</template>

<script>
    import Editor from '@tinymce/tinymce-vue'

    export default {
		props:["name", "value"],
		        data(){
            return {
                localValue: this.value
            }
        },
        components: {
            'editor': Editor,
        },
        watch: {
            value: function() {
                this.localValue = this.value
            },

        },  
    }
</script>
