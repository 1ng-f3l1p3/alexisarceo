import { createApp } from 'vue';
import MainPage from './components/MainPage.vue';

const app = createApp({});

app.component('main-page', MainPage);

app.mount('#app');
