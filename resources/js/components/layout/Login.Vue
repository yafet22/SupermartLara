<template>
    <div>
        <section class="login">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">LOGIN</h2>
            </div>
            <br>
            <div class="container logologin">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <img id="loginform" src="img/user-logo.png" style="width:50%;">
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
            <div class="container formlogin">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="inputemail" placeholder="Enter email" name="email" v-model="email" >
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="inputpwd" placeholder="Enter password" name="pwd" v-model="password">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success" style="display: block; margin: 0 auto;" @click="login">Login</button>
                                </div>
                                <div class="col-md-6">
                                    <router-link to="/register"><button type="button" class="btn btn-primary" style="display: block; margin: 0 auto;">Daftar</button></router-link> 
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </section>
    </div> 
</template>


<script>
import Auth from '../../auth'

export default {
    data(){
        return{
            email:'',
            password:'',
        }
    },
    methods : {
        async login(){
            var app = this
            this.$auth.login({
                params: {
                    email: app.email,
                    password: app.password
                }, 
                success: function () 
                {
                    alert('Login Berhasil')
                },
                error: function () {
                    alert('Terjadi Kesalahan Login')
                },
                rememberMe: true,
                redirect: '/',
                fetchUser: true,
            });       
        },
    //    async login(){
    //        try{
    //            await Auth.authenticate(this.email,this.password)
    //            console.log('Berhasil Login')
    //            alert('Login Berhasil')
    //            this.$router.push({ name: 'home'})
    //        }catch(err){
    //            alert('Email/Password Salah')
    //            console.log(err)
    //        }
    //    },
    }
}
</script>
