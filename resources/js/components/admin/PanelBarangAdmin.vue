<template>
    <div>
        <div class="container">
            <div class="row">
                <div v-if="$route.params.kategori=='MinumanRingan' || $route.params.kategori=='MinumanIsotonik' || $route.params.kategori=='MinumanSoda'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MinumanRingan'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanIsotonik'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Isotonik</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Isotonik</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanSoda'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Soda</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Soda</a>
                        </li>
                    </router-link>
                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>    
                </div>

                <div v-if="$route.params.kategori=='MakananRingan' || $route.params.kategori=='MakananBeku' || $route.params.kategori=='MinumanPokok'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MakananRingan'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananBeku'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Beku</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Beku</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananPokok'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Pokok</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Pokok</a>
                        </li>
                    </router-link>    

                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>
                </div>
                

                <div class="col-md-9 order-last mt-2">         
                    <div class="row">
                        <div v-for="barang of filtered" v-bind:key="barang['idbarang']" class="card col-md-3 mx-1 p-3">
                            <img v-bind:src="'/image/' + barang.image_name" class="img-display"/>
                            <p class="text-center lead">{{ barang.namabarang }}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#'+barang.idbarang"  >Info</button>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>


        <div id="wrapper">
            <div v-for="barang of barang" v-bind:key="barang['idbarang']" class="modal fade" data-backdrop="false" v-bind:id="barang.idbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="wrapper"><img v-bind:src="'/image/' + barang.image_name" alt="foto-bahan" class="img-info mx-auto d-block"/></div>
                        <div class="info-wrapper"><ul><li><b>Harga</b> : {{ barang.harga }}</li><li><b>Stok</b>  : {{ barang.stok }}</li><li><b>Deskripsi</b>  : {{ barang.deskripsi }}</li> </ul></div>
                        <p class="text-center">Lakukan <router-link style="color:white;" to="/login"><a href="#">Login</a></router-link> untuk dapat membeli barang</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-toggle="modal" v-bind:data-target="'#'+barang.idbarang+'edit'">Edit barang</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Input Barang</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                        
                                <div class="form-group">
                                    <label for="nbarangr">Nama Barang: </label>
                                    <input type="text" class="form-control" id="nbarang" placeholder="Enter name barang" name="nbarang" v-model="namabarang">
                                </div>
                                <div class="form-group">
                                    <label for="kbarang">Kategori: </label>
                                    <input type="text" class="form-control" id="kbarang" placeholder="Enter kategori barang" name="kbarang" v-model="kategori" value="MinumanIsotonik">
                                </div>
                                <div class="form-group">
                                    <label for="hbarang">Harga: </label>
                                    <input type="number" class="form-control" id="hbarang" placeholder="Enter harga barang" v-model="harga" name="hbarang">
                                </div>
                                <div class="form-group">
                                    <label for="sbarang">Stock: </label>
                                    <input type="number" class="form-control" id="sbarang" placeholder="Enter stock barang" v-model="stock" name="sbarang">
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi: </label>
                                    <textarea class="form-control" rows="3" id="desc" placeholder="Enter deskripsi barang" name="desc" v-model="deskripsi"></textarea>
                                    <!-- <input type="text" class="form-control" id="desc" placeholder="Enter deskripsi barang" name="desc"> -->
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input type="file" ref="file" id="file" class="custom-file-input"  v-on:change="handleFileUpload()" multiple>
                                            </span>
                                        </span>
                                        <input type="text"  class="form-control" readonly>
                                    </div>
                                    <img id='img-upload'/>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" value="Upload" class="btn btn-primary" name="tambah" @click="input()" >Save </button>
                            <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</template>

<script>
import {mapActions, mapState} from 'vuex'

export default {
    data(){
        return{
            namabarang:'',
            kategori:'',
            harga:0,
            stock:0,
            deskripsi:'',
            image_name:[],
        }
    },
    computed:{
        ...mapState({
            barang : state => state.DataBarang.data
        }),
        filtered(){
           let filter = this.barang
           filter = this.barang.filter( b => b.kategori === this.$route.params.kategori)
           return filter
        },
    },
    mounted() {
        $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#file").change(function(){
		    readURL(this);
		}); 	
	});
    },
    methods : {
        ...mapActions({
            inputBarang : 'DataBarang/addBarang',
            get : 'DataBarang/getBarang'
        }),

        input(){
            const payload = {
                namabarang : this.namabarang,
                kategori : this.kategori,
                harga : this.harga,
                stock :this.stock,
                deskripsi : this.deskripsi,
                image_name :this.image_name,
            }

            try{
                this.inputBarang(payload)
                console.log('success!')
            }
            catch(err){
                console.log(err)
            }
        },

       handleFileUpload(){
        this.image_name = this.$refs.file.files;
       },
    },   
    async created(){
        await this.get()
    }
}
</script>


