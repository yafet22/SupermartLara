<template>
    <div>
        <section class="kategori">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">DATA TRANSAKSI</h2>
            </div>
            <br>
            <div class="container shop list">
                <div class="row">
                    <div class="col-md-3 order-first mt-2">
                        <li class="list-group-item" >
                            <router-link class="text-dark" to="/databarang" >Data Barang</router-link>
                        </li>

                        <li class="list-group-item">
                            <router-link class="text-dark" to="/datauser">Data User</router-link>
                        </li>

                        <li class="list-group-item bg-primary">
                            <router-link class="text-light" :to="{name: 'datatransaksi' }" >Data Transaksi</router-link>
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
                                            <th class="font-weight-bold">Id</th>
                                            <th class="font-weight-bold">Id User</th>
                                            <th class="font-weight-bold">Total</th>
                                            <th class="font-weight-bold">Status</th>
                                            <th class="font-weight-bold">Tanggal</th>
                                            <th> </th>
                                        </tr>
                                        <tr style="text-align:center;" v-for="transaksi of transaksis" :key="transaksi.id">
                                            <td v-html="transaksi.id"></td>
                                            <td v-html="transaksi.iduser"></td>
                                            <td v-html="transaksi.total"></td>
                                            <td v-html="transaksi.status"></td>
                                            <td v-html="transaksi.created_at.date"></td>
                                            <td>
                                                <button type="button" @click="getDetail(transaksi.id)" data-toggle="modal" data-target="#detailcart" class="btn btn-primary btn-sm btn-block">Detail</button>
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
       
        <!-- Modal start here -->
            <div class="modal fade" id="detailcart" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Isi Cart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive-md">
                                <table id=tableadmin class="table table-md table-bordered" cellpadding="5" cellspacing="0" width="100%">
                                    <tr style="background-color:#4285f4;color:white;text-align:center;">
                                        <th class="font-weight-bold">Id</th>
                                        <th class="font-weight-bold">Id Barang</th>
                                        <th class="font-weight-bold">Jumlah</th>
                                        <th class="font-weight-bold">Total Harga</th>
                                    </tr>
                                    <tr style="text-align:center;" v-for="cart of carts" :key="cart.id">
                                        <td v-html="cart.id"></td>
                                        <td v-html="cart.idbarang"></td>
                                        <td v-html="cart.jumlah"></td>
                                        <td v-html="cart.totalharga"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Modal -->
        </div>
    </div>
</template>

<script>
import {mapActions, mapState} from 'vuex'

export default {
    data(){
        return{
            key :'',
            editbank:'',
            edittopup:'',
            fotobukti:'',
            id:0,
        }
    },
    computed:{
        ...mapState({
            transaksis : state => state.Transaksi.data,
            carts : state => state.Cart.data
        }),
    },
    mounted() {
       
    },
    methods : {
        ...mapActions({
            get : 'Transaksi/getTransaksis',
            getCart : 'Cart/getCart'
        }),
        getDetail(idtransaksi){
            try{
                this.getCart(idtransaksi)
                console.log('success!')
            }
            catch(err)
            {
                console.log(rr)
            }
        }
    },   
    async created(){
        await this.get()
    }
}
</script>
