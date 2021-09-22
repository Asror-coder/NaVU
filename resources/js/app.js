import { createApp } from 'vue'

import App from './components/App.vue'

// import Vue from 'vue'
// import Router from 'vue-router'
// import router from './routes'

// Vue.use(Router)

const app = createApp(App)

app.mount('#app')

require('./bootstrap');
