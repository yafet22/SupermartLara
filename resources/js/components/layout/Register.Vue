<template>
    <div>
        <section class="register">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">REGISTRATION</h2>
            </div>
            <br>  
            <div class="container formlogin">
                <div class="row">
                    <div class="col-md-4">
                   
                    </div>
                    <div class="col-md-4">
                        <!-- <form> -->
                            <div class="form-group">
                                <div class="container">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img  width=auto height=200 src="image/profile/default-pp.jpg" class="picture-src" id="wizardPicturePreview" title="">
                                            <!-- belom jalan  -->

                                            <!-- belom jalan -->
                                            <input id="wizard-picture" type="file" name="file">
                                        </div>
                                        <h6 class="">Choose Picture</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="name" class="form-control" id="nama" placeholder="Enter name" name="nama" v-model="username" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone" v-model="telp" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" v-model="password" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Confirm Password:</label>
                                <input type="password" class="form-control" id="c-pwd" placeholder="Enter password" name="c-pwd" v-model="checkpassword" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" style="display: block; margin: 0 auto;">Cancel</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success" value="Upload" id="submit" name="tambah" style="display: block; margin: 0 auto;" @click="register">Register</button>
                                </div>
                            </div>
                         <!-- </form> -->
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
            username:'',
            telp:'',
            email:'',
            password:'',
            checkpassword:''
        }
    },
    mounted() {
        $(document).ready(function(){
        // Prepare the preview for profile picture
            $("#wizard-picture").change(function(){
                readURL(this);
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('.picture-src').croppie();
    },
    methods : {
       async register(){
           try{
               await Auth.register(this.username,this.email, this.telp,this.password, this.checkpassword)
               console.log('Berhasil Daftar')
               alert('Anda Berhasil Melakukan Registrasi, Silahkan Registrasi Email Anda')
           }catch(err){
               alert('Registrasi Anda Gagal')
               console.log(err)
           }
       },
    }
}
</script>
