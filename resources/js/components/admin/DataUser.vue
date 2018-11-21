<template>
    <div>
        <section class="kategori">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">DATA USER</h2>
            </div>
            <br>
            <div class="container shop list">
                <div class="row">
                    <div class="col-md-3 order-first mt-2">
                        <li class="list-group-item" >
                            <router-link class="text-dark" to="/databarang" >Data Barang</router-link>
                        </li>

                        <li class="list-group-item bg-primary">
                            <router-link class="text-light" to="/datauser">Data User</router-link>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="text-dark">Data Transaksi</a>
                        </li>

                        <li class="list-group-item">
                            <a href="#" class="text-dark">Konfirmasi</a>
                        </li>
                    </div>
                    <div class="col-md-9 order-first mt-2">
                        <div class="row">
                            <div class="col-md-12 order-first mt-2">
                                <div class="pull-right">
                                    <input class="form-control mr-sm-2 " type="text" id="myInput" placeholder="Search by Nama User" aria-label="Search">
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
                                            <th class="font-weight-bold">Username</th>
                                            <th class="font-weight-bold">Telp</th>
                                            <th class="font-weight-bold">Email</th>
                                            <th class="font-weight-bold">Status Aktif</th>
                                            <th> </th>
                                        </tr>

                                         <tr style="text-align:center;" v-for="user of users" :key="user.id">
                                            <td></td>
                                            <td v-html="user.username"></td>
                                            <td v-html="user.telp"></td>
                                            <td v-html="user.email"></td>
                                            <td v-html="user.aktif"></td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm btn-block">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm btn-block">Hapus</button>
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
    </div>
</template>

<script>
import {mapActions, mapState} from 'vuex'

export default {
    data(){
        return{
          
        }
    },
    computed:{
        ...mapState({
            users : state => state.User.user
        }),
    },
    mounted() {
       
    },
    methods : {
        ...mapActions({
            get : 'User/getAllUser'
        }),
    },   
    async created(){
        await this.get()
    }
}
</script>
