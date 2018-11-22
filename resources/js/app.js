import VueRouter from 'vue-router'
import { routes } from './routes'
import App from './components/App'
import Vue from 'vue'
import store from './store'
import axios from 'axios';
import VueAxios from 'vue-axios';

Vue.use(VueRouter)
Vue.use(VueAxios, axios);

axios.defaults.baseURL = 'http://localhost:8000/api';

const router = new VueRouter({
    mode: 'history',
    routes
});

Vue.router = router

Vue.use(require('@websanova/vue-auth'), {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'), 
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});

new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
})
.$mount('#app');
