/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Bootstrap from './bootstrap.js';
import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './components/App'
import Home from './components/Home'
import Service from './components/Service'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/treatments',
            name: 'home',
            component: Home,
        },
        {
            path: '/treatments/:slug',
            name: 'home',
            component: Service,
        },
    ]
});

// inject a handler for `myOption` custom option
Vue.mixin({
    data: function () {
        return {
            get web_url() {
                return "http://localhost:8000/api/";
                //return "https://sacredlighthealing.ca/api/";
            }
        }
    }

})


const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
});
