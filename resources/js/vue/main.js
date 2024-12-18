import { createApp } from 'vue';

import Oruga from '@oruga-ui/oruga-next';
import '@oruga-ui/theme-oruga/dist/oruga.css';

import App from './App.vue';

const app = createApp(App);
app.use(Oruga);
app.mount('#app');
