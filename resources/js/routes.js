import ContentIndex from './components/index/ContentIndex.vue'
import Login from './components/layout/Login.vue'
import Register from './components/layout/Register.vue'
import PanelBarang from './components/index/PanelBarang.vue'
import PanelBarang1 from './components/index/PanelBarangOld.vue'
import Layout from './components/index/LayoutBarang.vue'
import PanelBarangAdmin from './components/admin/PanelBarangAdmin.vue'
import DataBarang from './components/admin/DataBarang.vue'
import DataUser from './components/admin/DataUser.vue'

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
    {
        name : 'databarang',
        path : '/databarang',
        component : DataBarang
    },
    {
        name : 'datauser',
        path : '/datauser',
        component : DataUser
    },
    {
        name : 'panelbarang',
        path : '/:kategori',
        component : PanelBarang
    },
    {
        name : 'panelbarangadmin',
        path : '/admin/:kategori',
        meta: {
            auth: true
        },
        component : PanelBarangAdmin
    },

]