<template>
    <div>
        <header-admin v-if="this.$auth.user().role =='admin'"></header-admin>
        <header-login v-else-if="user.role =='user'" v-bind:data="user" ></header-login>
        <header-index v-else></header-index>
        <router-view :key="$route.fullPath"></router-view>
        <footer-admin v-if="user.role =='admin'"></footer-admin>
        <footer-login v-else-if="user.role =='user'"></footer-login>
        <footer-index v-else></footer-index>
    </div>
</template>

<script>
import HeaderLogin from './afterlogin/HeaderLogin.vue'
import FooterLogin from './afterlogin/FooterLogin.vue'
import HeaderIndex from './index/HeaderIndex.vue';
import FooterIndex from './index/FooterIndex.vue';
import HeaderAdmin from './admin/HeaderAdmin.vue';
import FooterAdmin from './admin/FooterAdmin.vue';
import {mapActions, mapState} from 'vuex'

export default {
    methods: {
      
    },
    components: {
      HeaderIndex,
      FooterIndex,
      HeaderLogin,
      FooterLogin,
      HeaderAdmin,
      FooterAdmin,
    },
     computed:{
        ...mapState({
            user : state => state.LoggedUser.data
        }),
    },

    
}
</script>

