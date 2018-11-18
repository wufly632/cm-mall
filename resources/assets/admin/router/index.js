import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

//定义路由
const baseRoutes = [
    { path: '', redirect: '/setting' }
];

//导入模块
import Home from '../component/Home';

//动态路由匹配
const router = new VueRouter({
    mode: 'hash',
    // base: '/admin/',
    routes: [
        {
            path: '/',
            component: Home,
            children: [...baseRoutes]
        }
    ]
});

export default router;