<template>
    <div>
        <section class="register">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">PROFILE</h2>
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
                                            <img  width=auto height=200 v-bind:src="'images/'+user.image_name" class="picture-src" id="wizardPicturePreview" title="">
                                            <!-- belom jalan  -->

                                            <!-- belom jalan -->
                                            <input id="wizard-picture" type="file" name="file" ref="file" v-on:change="handleFileUpload">
                                        </div>
                                        <h6 class="">Choose Picture</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="name" class="form-control" id="nama" placeholder="Enter name" name="nama" v-model="user.username" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="phone" class="form-control" id="phone" placeholder="Enter phone number" name="phone" v-model="user.telp" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" style="display: block; margin: 0 auto;">Cancel</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success" value="Upload" id="submit" name="tambah" style="display: block; margin: 0 auto;" @click="edit">Confirm</button>
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
import {mapActions, mapState} from 'vuex'
export default {
    data(){
        return{
            username:'',
            telp:'',
            image_name:''
        }
    },
    computed:{
        ...mapState({
            user : state => state.User.data
        }),
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
        ...mapActions({
            get : 'User/getUser',
            update : 'User/update',
        }),

        edit(){
            try{
                var payload = {
                    id : this.$auth.user().id,
                    username : this.user.username,
                    telp : this.user.telp,
                    image_name : this.user.image_name,
                }
                this.update(payload)
                alert("Berhasil Update Profile")
                
            }catch(err){
                alert('Gagal Update')
                console.log(err)
            }
        },
        
        handleFileUpload(e){
                this.user.image_name = e.target.files[0];
                console.log(this.username.image_name)
        },
    },
    async created(){
        await this.get(this.$auth.user().id)
    }
}
</script>
