import Vue from 'vue';

import App from './App.vue';

import { sync } from 'vuex-router-sync';
import store from './store';
import router from './router';

// sync the router with the vuex store.
// this registers `store.state.route`
sync(store, router);

/**
 * 导入element-ui
 */
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
Vue.use(ElementUI);

const app = new Vue({
    router,
    store,
    el: '#app',
    render: h => h(App)
});

export { app, store, router };