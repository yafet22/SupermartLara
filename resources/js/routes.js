import ContentIndex from './components/index/ContentIndex.vue'
import Login from './components/layout/Login.vue'
import Register from './components/layout/Register.vue'

export const routes = [
    {
        name : 'home',
        path : '/',
        component : ContentIndex
    },
    {
        name : 'login',
        path : '/login',
        component : Login
    },
    {
        name : 'register',
        path : '/register',
        component : Register
    },
]