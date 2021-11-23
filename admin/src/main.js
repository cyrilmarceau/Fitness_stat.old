import { createApp } from 'vue';
import App from './App.vue';
import { Layout, Menu } from 'ant-design-vue';

const app = createApp(App).use(Layout).use(Menu);
app.mount('#app');
