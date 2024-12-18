import { createApp } from 'vue';

import axios from 'axios';

import Oruga from '@oruga-ui/oruga-next';
import '@oruga-ui/theme-oruga/dist/oruga.css';

import '@mdi/font/css/materialdesignicons.min.css';

import App from './App.vue';

const app = createApp(App);
app.use(Oruga);

app.config.globalProperties.$axios = axios;
window.axios = axios;

app.mount('#app');
