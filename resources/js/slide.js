/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueSession from 'vue-session'
Vue.use(VueSession)

import draggable from 'vuedraggable'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('text-slide', require('./components/slide/TextSliderComponent.vue').default);
// Vue.component('image-slide', require('./components/slide/ImageSliderComponent.vue').default);
Vue.component('image-slide', require('./components/slide/InputImageComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#slide-app',
    components:{
        draggable,
    },
    data: {
        max_slide: 20,
        min_slide:1,
        current_slide: 0,
        slides: [],
        reload: false,
    },
    display: "Table",
    mounted () {
            axios
            .get('/api/slides/detail/' + window.slideId)
            .then(response => (
                this.slides = typeof(response.data.data.slides) !== 'undefined'?response.data.data.slides:[],
                console.log(response.data.data.slides)
            ))
            .catch(error => {
                return
            })
    
    },

    methods: {
        addSlide(typeSlide, type ) {
            if(this.current_slide++ > this.max_slide) {
                this.$session.set('message', {'text': 'Quá giới hạn số lượng slide', 'type': 'warning'})
                console.log('Quá giới hạn số lượng slide')
                return false
            }

            // this.slide = {
            //     id: this.current_slide ,
            //     title: "Slide " + (this.current_slide )
            // }
            if(type == 0 ) {
                this.slides.push({
                    type: typeSlide,
                    text:''
                })
            }else if (type == 1) {
                this.slides.push({
                    type: typeSlide,
                    text:'',
            })
            }

        },
        
        
        removeSlide(id) {
            this.current_slide--
            this.slides.splice(id,1)
        },

        saveInput($event, id, type) {
            if(type == 0){
                this.slides[id]['text'] = $event.target.innerHTML
            }
        },

        reLoading(){
            console.log("drag remove")
            this.reload = true
            setTimeout(() => {
                this.reload = false
            },100)
        }
    }
});

