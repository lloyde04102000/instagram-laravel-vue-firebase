

import { createApp } from 'vue'

import App from './components/App.vue';

require('./bootstrap');
createApp(App, {
    data() {
      return {
        count: 0
      }
    }
  }).mount('#example');
  