<template>
    <div>
        <header-index></header-index>
        <router-view></router-view>
        <footer-index></footer-index>
    </div>
</template>

<script>
import HeaderIndex from './index/HeaderIndex.vue';
import HeaderLogin from './afterlogin/HeaderLogin.vue';
import FooterIndex from './index/FooterIndex.vue';
import FooterLogin from './afterlogin/FooterLogin.vue'
import ContentIndex from './index/ContentIndex.vue';
import { mapGetters,mapState } from 'vuex'
export default {
    data() {
      return {
          
      }
    },
    methods: {
      
    },
    components: {
      HeaderIndex,
      FooterIndex,
      ContentIndex,
      HeaderLogin,
      FooterLogin,
    },
    computed: {
        ...mapState({
            role : state => state.data.role
        })
    }
    
    
}
</script>

