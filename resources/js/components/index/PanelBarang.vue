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

                <div v-if="$route.params.kategori=='MakananRingan' || $route.params.kategori=='MakananBeku' || $route.params.kategori=='MakananPokok'  " class="col-md-3 order-first mt-2">
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

                <div v-if="$route.params.kategori=='PerawatanDiri' || $route.params.kategori=='PerawatanBadan' || $route.params.kategori=='PerawatanRambut' || $route.params.kategori=='PerawatanPria' || $route.params.kategori=='Obat' " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='PerawatanDiri'" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanDiri' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Diri</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanDiri' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Diri</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PerawatanBadan'" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanBadan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Badan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanBadan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Badan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PerawatanRambut'" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanRambut' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Rambut</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanRambut' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Rambut</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PerawatanPria'" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanPria' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Pria</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanPria' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Pria</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='Obat'" :to="{name: 'panelbarang',  params: {  kategori: 'Obat' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Obat-obatan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'Obat' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Obat-obatan</a>
                        </li>
                    </router-link>  
                </div>

                <div v-if="$route.params.kategori=='Televisi' || $route.params.kategori=='AksesorisKomputer' || $route.params.kategori=='AksesorisHP'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='Televisi'" :to="{name: 'panelbarang',  params: {  kategori: 'Televisi' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Televisi</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'Televisi' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Televisi</a>
                        </li>
                    </router-link> 

                    <router-link v-if="$route.params.kategori=='AksesorisKomputer'" :to="{name: 'panelbarang',  params: {  kategori: 'AksesorisKomputer' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Aksesoris Komputer</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'AksesorisKomputer' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Aksesoris Komputer</a>
                        </li>
                    </router-link> 
                    
                    <router-link v-if="$route.params.kategori=='AksesorisHP'" :to="{name: 'panelbarang',  params: {  kategori: 'AksesorisHP' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Aksesoris HP</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'AksesorisHP' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Aksesoris HP</a>
                        </li>
                    </router-link> 
                </div>

                <div v-if="$route.params.kategori=='PeralatanKebersihan' || $route.params.kategori=='PeralatanMakan' || $route.params.kategori=='PeralatanRT'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='PeralatanKebersihan'" :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanKebersihan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Peralatan Kebersihan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanKebersihan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Peralatan Kebersihan</a>
                        </li>
                    </router-link> 

                    <router-link v-if="$route.params.kategori=='PeralatanMakan'" :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanMakan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Peralatan Makan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanMakan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Peralatan Makan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PeralatanRT'" :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanRT' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Peralatan Rumah Tangga</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanRT' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Peralatan Rumah Tangga</a>
                        </li>
                    </router-link>
                </div>

                <div v-if="$route.params.kategori=='FashionPria' || $route.params.kategori=='FashionWanita' " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='FashionPria'" :to="{name: 'panelbarang',  params: {  kategori: 'FashionPria' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Fashion Pria</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'FashionPria' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Fashion Pria</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='FashionWanita'" :to="{name: 'panelbarang',  params: {  kategori: 'FashionWanita' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Fashion Wanita</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarang',  params: {  kategori: 'FashionWanita' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Fashion Wanita</a>
                        </li>
                    </router-link>
                </div>

                <div class="col-md-9 order-last mt-2">
                    <div class="row">
                        <div v-for="barang of filtered" v-bind:key="barang['idbarang']" class="card col-md-3 mx-1 p-3">
                            <img v-bind:src="'/images/' + barang.image_name" class="img-display"/>
                            <p class="text-center lead">{{ barang.namabarang }}</p>
                            <button type="button"  class="btn btn-primary" data-toggle="modal" @click="bindData(barang.idbarang)" v-bind:data-target="'#'+barang.idbarang">Info</button>
                        </div>       
                    </div>
                </div>
            </div>
        </div>

        <div v-for="barang of filtered" v-bind:key="barang['idbarang']" class="modal fade" v-bind:id="barang.idbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button id="closemodal" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="wrapper"><img v-bind:src="'/images/' + barang.image_name" alt="foto-bahan" class="img-info mx-auto d-block"/></div>
                    <div class="info-wrapper"><ul><li><b>Harga</b> : {{ barang.harga }}</li><li><b>Stok</b>  : {{ barang.stock }}</li><li><b>Deskripsi</b>  : {{ barang.deskripsi }}</li> </ul></div>       
                    <div v-if="$auth.user().role =='user'" class="form-group">
                        <input type="number" min="1" class="form-control" id="jumlah" placeholder="Jumlah beli" name="jumlah" v-model="jumlah" required>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" value="tambah" name="tambah" class="btn btn-warning" @click="inputTransaksi" >Masukan chart</button>
                            </div> 
                        </div>
                        
                    </div>
                    <p v-else class="text-center">Lakukan <router-link style="color:white;" to="/login"><a href="#">Login</a></router-link> untuk dapat membeli barang</p>
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
            idbarang:0,
            namabarang:'',
            kategori:'',
            harga:0,
            stock:0,
            deskripsi:'',
            image_name:[],
            jumlah:0
        }
    },
    computed:{
        ...mapState({
            barang : state => state.DataBarang.data,
            transaksi : state => state.Transaksi.transaksi
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
            get : 'DataBarang/getBarang',
            getTransaksi : 'Transaksi/transaksibyUser',
            addTransaksi : 'Transaksi/addTransaksi',
            addCart : 'Cart/addCart'
        }),

        inputTransaksi(){
            const payload = {
                id : this.transaksi.id,
                idbarang : this.idbarang,
                jumlah : this.jumlah
            }

            try{
                
                this.addCart(payload)
                document.getElementById("closemodal").click();
                alert('Barang Masuk ke Cart shop')
                this.jumlah=''
                this.get()
            }
            catch(err){
                console.log(err)
                alert('Terjadi Kesalahan')
            }
        },

        
        
       handleFileUpload(){
        this.image_name = this.$refs.file.files;
       },
       bindData(idbarang){
           this.idbarang=idbarang
       }
    },   
    async created(){
        await this.get(),
        this.addTransaksi(this.$auth.user().id)
        await this.getTransaksi(this.$auth.user().id)
    }
}
</script>
