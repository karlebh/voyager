require('./bootstrap');

import Vue from 'vue'

import Hello from './Hello'

new Vue({
    components: {
        Hello
    }
}).$mount('#app')