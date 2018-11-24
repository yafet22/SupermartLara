import ContentIndex from './components/index/ContentIndex.vue'
import Login from './components/layout/Login.vue'
import Register from './components/layout/Register.vue'
import TopUp from './components/layout/TopUp.vue'
import Cart from './components/layout/Cartshop.vue'
import PanelBarang from './components/index/PanelBarang.vue'
import PanelBarang1 from './components/index/PanelBarangOld.vue'
import Layout from './components/index/LayoutBarang.vue'
import PanelBarangAdmin from './components/admin/PanelBarangAdmin.vue'
import DataBarang from './components/admin/DataBarang.vue'
import DataUser from './components/admin/DataUser.vue'
import DataTopup from './components/admin/DataTopup.vue'
import DataTransaksi from './components/admin/DataTransaksi.vue'

export const routes = [
    {
        name : 'home',
        path : '/',
        component : ContentIndex
    },
    {
        name : 'topup',
        path : '/topup',
        component : TopUp,
        meta: {
            auth: true
        },
    },
    {
        name : 'cart',
        path : '/cart',
        component : Cart,
        meta: {
            auth: true
        },
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
        name : 'datatopup',
        path : '/datatopup',
        component : DataTopup
    },
    {
        name : 'datatransaksi',
        path : '/datatransaki',
        component : DataTransaksi
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