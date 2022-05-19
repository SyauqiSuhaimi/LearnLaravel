require('./bootstrap');

import {createApp} from 'vue'
import Footer from '../views/components/Footer.vue'

const app = createApp({});

app.component('Footer', Footer);

app.mount('#app');