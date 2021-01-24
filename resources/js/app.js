require('./bootstrap');

import Vue from 'vue'

import Hello from './Hello'
import Like from './Like'

new Vue({
    components: {
        Hello,
        Like,
    }
}).$mount('#app')