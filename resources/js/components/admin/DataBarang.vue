<template>
    <div>
        <section class="kategori">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">DATA BARANG</h2>
            </div>
            <br>
            <div class="container shop list">
                <div class="row">
                    <div class="col-md-3 order-first mt-2">
                        <li class="list-group-item bg-primary" >
                            <router-link class="text-light" to="/databarang" >Data Barang</router-link>
                        </li>

                        <li class="list-group-item">
                            <router-link class="text-dark" to="/datauser">Data User</router-link>
                        </li>

                        <li class="list-group-item">
                            <router-link class="text-dark" :to="{name: 'datatransaksi' }" >Data Transaksi</router-link>
                        </li>

                        <li class="list-group-item">
                            <router-link class="text-dark" to="/datatopup">Data Topup</router-link>
                        </li>
                    </div>
                    <div class="col-md-9 order-first mt-2">
                        <div class="row">
                            <div class="col-md-12 order-first mt-2">
                                <div class="pull-right">
                                    <input class="form-control mr-sm-2 " type="text" id="myInput" placeholder="Search by Nama Barang" aria-label="Search">
                                </div>
                                <div class="pull-left">
                                    <a href="#"><button type="button" class="btn btn-success btn-sm">Download Report</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 order-first mt-2">
                                <div class="table-responsive-md">
                                    <table id=tableadmin class="table table-md table-bordered" cellpadding="5" cellspacing="0" width="100%">
                                        <tr style="background-color:#4285f4;color:white;text-align:center;">
                                            <th class="font-weight-bold">No</th>
                                            <th class="font-weight-bold">Id Barang</th>
                                            <th class="font-weight-bold">Nama Barang</th>
                                            <th class="font-weight-bold">Kategori</th>
                                            <th class="font-weight-bold">Harga</th>
                                            <th class="font-weight-bold">Stock</th>
                                            <th> </th>
                                        </tr>
                                        <tr style="text-align:center;" v-for="barang of barang" :key="barang.idbarang">
                                            <td></td>
                                            <td v-html="barang.idbarang"></td>
                                            <td v-html="barang.namabarang"></td>
                                            <td v-html="barang.kategori"></td>
                                            <td v-html="barang.harga"></td>
                                            <td v-html="barang.stock"></td>
                                            <td>
                                                <button type="button" @click="bindData(barang.idbarang)" data-toggle="modal" data-target="#editbarang" class="btn btn-primary btn-sm btn-block">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-block" @click="destroy(barang.idbarang)"  >Hapus</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="wrapper">
            <div class="modal fade" id="editbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                                <div class="wrapper"><img v-bind:src="'/images/' + editimage_name" alt="foto-bahan" class="img-info mx-auto d-block"/></div>
                                <div class="form-group">
                                    <label for="nbarangr">Nama Barang: </label>
                                    <input type="text" class="form-control" id="nbarang" placeholder="Enter name barang" name="nbarang" v-model="editnamabarang">
                                </div>
                                <div class="form-group">
                                    <label for="kbarang">Example select</label>
                                    <select class="form-control" id="kbarang"  v-model="editkategori">
                                        <option v-if="editkategori=='MakananRingan'" value="MakananRingan" selected>Makanan Ringan</option>
                                        <option v-else value="MakananRingan">Makanan Ringan</option>
                                        <option v-if="editkategori=='MakananBeku'" value="MakananBeku" selected>Makanan Beku</option>
                                        <option v-else value="MakananBeku">Makanan Beku</option>
                                        <option v-if="editkategori=='MakananPokok'" value="MakananPokok" selected>Makanan Pokok</option>
                                        <option v-else value="MakananPokok">Makanan Pokok</option>
                                        <option v-if="editkategori=='MinumanRingan'" value="MinumanRingan" selected>Minuman Ringan</option>
                                        <option v-else value="MinumanRingan">Minuman Ringan</option>
                                        <option v-if="editkategori=='MinumanIsotonik'" value="MinumanIsotonik" selected>Minuman Isotonik</option>
                                        <option v-else value="MinumanIsotonik">Minuman Isotonik</option>
                                        <option v-if="editkategori=='MinumanSoda'" value="MinumanSoda" selected>Minuman Soda</option>
                                        <option v-else value="MinumanSoda">Minuman Soda</option>
                                        <option v-if="editkategori=='PerawatanDiri'" value="PerawatanDiri" selected>Perawatan Diri</option>
                                        <option v-else value="PerawatanDiri">Perawatan Diri</option>
                                        <option v-if="editkategori=='PerawatanBadan'" value="PerawatanBadan" selected>Perawatan Badan</option>
                                        <option v-else value="PerawatanBadan">Perawatan Badan</option>
                                        <option v-if="editkategori=='PerawatanRambut'" value="PerawatanRambut" selected>Perawatan Rambut</option>
                                        <option v-else value="PerawatanRambut">Perawatan Rambut</option>
                                        <option v-if="editkategori=='PerawatanPria'" value="PerawatanPria" selected>Perawatan Pria</option>
                                        <option v-else value="PerawatanPria">Perawatan Pria</option>
                                        <option v-if="editkategori=='Televisi'" value="Televisi" selected>Televisi</option>
                                        <option v-else value="Televisi">Televisi</option>
                                        <option v-if="editkategori=='AksesorisKomputer'" value="AksesorisKomputer" selected>Aksesoris Komputer</option>
                                        <option v-else value="AksesorisKomputer">Aksesoris Komputer</option>
                                        <option v-if="editkategori=='AksesorisHP'" value="AksesorisHP" selected>Aksesoris HP</option>
                                        <option v-else value="AksesorisHP">Aksesoris HP</option>
                                        <option v-if="editkategori=='PeralatanKebersihan'" value="PeralatanKebersihan" selected>Peralatan Kebersihan</option>
                                        <option v-else value="PeralatanKebersihan">Peralatan Kebersihan</option>
                                        <option v-if="editkategori=='PeralatanMakanan'" value="PeralatanMakanan" selected>Peralatan Makanan</option>
                                        <option v-else value="PeralatanMakanan">Peralatan Makanan</option>
                                        <option v-if="editkategori=='PeralatanRT'" value="PeralatanRT" selected>Peralatan RT</option>
                                        <option v-else value="PeralatanRT">Peralatan RT</option>
                                        <option v-if="editkategori=='FashionPria'" value="FashionPria" selected>Fashion Pria</option>
                                        <option v-else value="FashionPria">Fashion Pria</option>
                                        <option v-if="editkategori=='FashionWanita'" value="FashionWanita" selected>Fashion Wanita</option>
                                        <option v-else value="FashionWanita">Fashion Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="hbarang">Harga: </label>
                                    <input type="number" class="form-control" id="hbarang" placeholder="Enter harga barang" v-model="editharga" name="hbarang">
                                </div>
                                <div class="form-group">
                                    <label for="sbarang">Stock: </label>
                                    <input type="number" class="form-control" id="sbarang" placeholder="Enter stock barang" v-model="editstock" name="sbarang">
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi: </label>
                                    <textarea class="form-control" rows="3" id="desc" placeholder="Enter deskripsi barang" name="desc" v-model="editdeskripsi"></textarea>
                                    <!-- <input type="text" class="form-control" id="desc" placeholder="Enter deskripsi barang" name="desc"> -->
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file2">
                                                Browse… <input type="file" ref="file2" id="file2" class="custom-file-input"  v-on:change="handleFileUploadEdit">
                                            </span>
                                        </span>
                                        <input type="text"  class="form-control" readonly>
                                    </div>
                                    <img id='img-upload2'/>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" value="Upload" class="btn btn-primary" name="tambah" @click="update" >Save </button>
                            <button id="closeedit" type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
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
            image_name:'',
            editidbarang:'',
            editnamabarang:'',
            editkategori:'',
            editharga:0,
            editstock:0,
            editdeskripsi:'',
            editimage_name:'',
            key:'',
        }
    },
    computed:{
        ...mapState({
            barang : state => state.DataBarang.data
        }),
        filterbyid(){
            let filter = this.barang
            filter = this.barang.filter( b => b.idbarang === this.key )
            return filter
        }
    },
    mounted() {
        $(document).ready( function() {
            $(document).on('change', '.btn-file2 :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
            });

            $('.btn-file2 :file').on('fileselect', function(event, label) {
                
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
                        $('#img-upload2').attr('src', e.target.result);
                    }
                    
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#file2").change(function(){
                readURL(this);
            }); 	
        });
    },
    methods : {
        ...mapActions({
            inputBarang : 'DataBarang/addBarang',
            get : 'DataBarang/getBarang',
            deleteBarang : 'DataBarang/destroy',
            updateBarang : 'DataBarang/update'
        }),

        destroy(id){
            try {
                this.deleteBarang(id);
                console.log("Succes Delete")
            } catch (err) {
               console.log(err) 
            }
        },

        update(){
            try{
                var payload = {
                    idbarang : this.editidbarang,
                    namabarang : this.editnamabarang,
                    kategori : this.editkategori,
                    harga : this.editharga,
                    stock :this.editstock,
                    deskripsi : this.editdeskripsi,
                    image_name :this.editimage_name
                }

                this.updateBarang(payload);
                this.get()
                document.getElementById("closeedit").click();
                document.getElementById("close").click();
                console.log('success!')
            }
            catch(err)
            {
                console.log(rr)
            }
        },

        handleFileUploadEdit(e){
                this.editimage_name = e.target.files[0];
                console.log(this.editimage_name)
        },

        bindData(key){
            this.key=key;
            console.log(this.filterbyid[0]);
            this.editidbarang=key,
            this.editnamabarang=this.filterbyid[0].namabarang,
            this.editkategori=this.filterbyid[0].kategori,
            this.editharga=this.filterbyid[0].harga,
            this.editstock=this.filterbyid[0].stock,
            this.editdeskripsi=this.filterbyid[0].deskripsi,
            this.editimage_name=this.filterbyid[0].image_name
        },
    },   
    async created(){
        await this.get()
    }
}
</script>
