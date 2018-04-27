import Vue from 'vue';
import VueRouter from 'vue-router';

import HomePage from './components/HomePage.vue';
import NotFoundPage from './components/NotFoundPage.vue';

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: HomePage
        },
        {
            path: '*',
            name: 'not-found',
            component: NotFoundPage
        }
    ]
});
