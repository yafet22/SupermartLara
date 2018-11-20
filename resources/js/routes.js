import ContentIndex from './components/index/ContentIndex.vue'
import Login from './components/layout/Login.vue'
import Register from './components/layout/Register.vue'
import PanelBarang from './components/index/PanelBarang.vue'
import PanelBarang1 from './components/index/PanelBarangOld.vue'
import Layout from './components/index/LayoutBarang.vue'
import PanelBarangAdmin from './components/admin/PanelBarangAdmin.vue'
import LayoutAdmin from './components/admin/LayoutBarangAdmin.vue'

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
        name : 'panelbarang',
        path : '/:kategori',
        component : PanelBarang
    },
    {
        name : 'panelbarang1',
        path : '/barang',
        component : PanelBarang1,
        children: [
            {
                name : 'LayoutBarang',
                path : '/:kategori',
                component : Layout,
            },
        ]
    },
    {
        name : 'panelbarangadmin',
        path : ':kategori',
        component : PanelBarangAdmin
    },
    // {
    //     name : 'Layout',
    //     path : '/layout',
    //     component : Layout
    // },
]