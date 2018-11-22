<template>
    <div>
        <div class="container">
            <div class="row">
                <div v-if="$route.params.kategori=='MinumanRingan' || $route.params.kategori=='MinumanIsotonik' || $route.params.kategori=='MinumanSoda'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MinumanRingan'" :to="{name: 'panelbarang',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarang',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanIsotonik'" :to="{name: 'panelbarang',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Isotonik</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarang',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Isotonik</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanSoda'" :to="{name: 'panelbarang',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Soda</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarang',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Soda</a>
                        </li>
                    </router-link>    
                </div>

                <div v-if="$route.params.kategori=='MakananRingan' || $route.params.kategori=='MakananBeku' || $route.params.kategori=='MinumanPokok'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MakananRingan'" :to="{name: 'panelbarang',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarang',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananBeku'" :to="{name: 'panelbarang',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Beku</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarang',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Beku</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananPokok'" :to="{name: 'panelbarang',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Pokok</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarang',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Pokok</a>
                        </li>
                    </router-link>    
                </div>

                <div class="col-md-9 order-last mt-2">
                    <div class="row">
                        <div v-for="barang of filtered" v-bind:key="barang['idbarang']" class="card col-md-3 mx-1 p-3">
                            <img v-bind:src="'/images/' + barang.image_name" class="img-display"/>
                            <p class="text-center lead">{{ barang.namabarang }}</p>
                            <button type="button"  class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#'+barang.idbarang">Info</button>
                        </div>       
                    </div>
                </div>
            </div>
        </div>

        <div v-for="barang of filtered" v-bind:key="barang['idbarang']" class="modal fade" v-bind:id="barang.idbarang" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="wrapper"><img v-bind:src="'/image/' + barang.image_name" alt="foto-bahan" class="img-info mx-auto d-block"/></div>
                    <div class="info-wrapper"><ul><li><b>Harga</b> : {{ barang.harga }}</li><li><b>Stok</b>  : {{ barang.stock }}</li><li><b>Deskripsi</b>  : {{ barang.deskripsi }}</li> </ul></div>
                    <p class="text-center">Lakukan <router-link style="color:white;" to="/login"><a href="#">Login</a></router-link> untuk dapat membeli barang</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
