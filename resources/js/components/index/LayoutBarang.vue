<template>
    <div>
        <div class="row">
            <div v-for="barang of data.data" v-bind:key="barang['idbarang']" class="card col-md-3 mx-1 p-3">
                <img v-bind:src="'/image/' + barang.image_name" class="img-display"/>
                <p class="text-center lead">{{ barang.namabarang }}</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#'+barang.idbarang"  >Info</button>
            </div>  
        </div> 

        <div v-for="barang of data.data" v-bind:key="barang['idbarang']" class="modal fade" data-backdrop="false" v-bind:id="barang.idbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Auth from '../../auth'

export default {
    data(){
        return{
            data:'',
        }
    },
    methods : {
       async getbarang(){
           try{
               this.data = await Auth.getBarangbyKategori(this.$route.params.kategori);
               console.log('Berhasil Get Barang')
           }catch(err){
               console.log(err)
           }
       },
    },
    beforeMount(){
        this.getbarang()
    }
    
    
}
</script>