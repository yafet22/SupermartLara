<template>
    <div>
        <section class="kategori">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">DATA TOPUP</h2>
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

                        <li class="list-group-item">
                            <a href="#" class="text-dark">Data Transaksi</a>
                        </li>

                        <li class="list-group-item bg-primary">
                            <router-link class="text-light" to="/datatopup">Data Topup</router-link>
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
                                        <tr style="text-align:center;" v-for="topup of topups" :key="topup.id">
                                            <td></td>
                                            <td v-html="topup.id"></td>
                                            <td v-html="topup.iduser"></td>
                                            <td v-html="topup.topup"></td>
                                            <td v-html="topup.bank"></td>
                                            <td v-html="topup.verifikasi"></td>
                                            <td>
                                                <button v-if="topup.verifikasi=='WAITING'" type="button" @click="bindData(topup.id)" data-toggle="modal" data-target="#konfirmasitopup" class="btn btn-warning btn-sm btn-block">Verifikasi</button>
                                                <button v-else-if="topup.verifikasi=='CONFIRMED'" type="button" class="btn btn-dark btn-sm btn-block" disabled>Confirmed</button>
                                                <button v-else-if="topup.verifikasi=='UNCONFIRMED'" type="button" class="btn btn-dark btn-sm btn-block" disabled>UnConfirmed</button>
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
            <div class="modal fade" id="konfirmasitopup" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pembayaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <div class="wrapper"><img v-bind:src="'/images/bukti/' + fotobukti" alt="foto-bahan" class="img-info mx-auto d-block"/></div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nominal Topup </label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" v-model="edittopup"  name="topup" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Bank </label>
                                <div class="col-sm-8">
                                <input type="text" class="form-control" v-model="editbank" name="bank" readonly>
                                </div>
                            </div>
                            <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="Upload" class="btn btn-primary pull-right" @click="konfirmasi" name="simpan">Save </button>
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
            topups : state => state.Topup.data
        }),
        filterbyid(){
            let filter = this.topups
            filter = this.topups.filter( t => t.id === this.key )
            return filter
        }
    },
    mounted() {
       
    },
    methods : {
        ...mapActions({
            get : 'Topup/getTopups',
            confirm : 'Topup/confirm'
        }),

        konfirmasi(){
            try{
                this.confirm(this.id)
                this.get()
                console.log('success!')
            }
            catch(err)
            {
                console.log(rr)
            }
        },

        bindData(key){
            this.key=key;
            console.log(this.filterbyid[0])
            this.editbank=this.filterbyid[0].bank
            this.edittopup=this.filterbyid[0].topup
            this.fotobukti=this.filterbyid[0].fotobukti
            this.id=this.filterbyid[0].id
        },
    },   
    async created(){
        await this.get()
    }
}
</script>
