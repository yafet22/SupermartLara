<template>
    <div>
        <section class="kategori">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">SHOPPING LIST</h2>
            </div>
            <br>
            <div class="container shop list">
                <div class="row">
                <div class="col-md-3">
                    <div style="width:100%" class="card hovercard">
                    <div class="cardheader">

                    </div>
                    <div class="avatar">
                        <img v-bind:src="'images/'+this.$auth.user().image_name" class="img-display mx-2" style="border-radius:50%;"/>;
                    </div>
                    <div class="info">
                        <div class="title" style="font-size:15px">{{ this.$auth.user().email }}</div>
                    </div>
                    <div class="bottom">
                        <br>
                        <a href="#"><button type="button" class="btn btn-primary btn-block">Continue Shopping</button></a>
                    </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="font-weight-bold" style="text-align: center;">Happy Shopping</h2>
                    <div class="table-responsive-md">
                        <table id=tableadmin class="table table-bordered" cellpadding="5" cellspacing="0" width="100%">
                            <tr style="background-color:#4285f4;color:white;text-align:center;">
                                <th class="font-weight-bold">No</th>
                                <th class="font-weight-bold">Nama Barang</th>
                                <th class="font-weight-bold">Jumlah barang</th>
                                <th class="font-weight-bold">Harga</th>
                                <th> </th>
                            </tr>
                            <tr style="text-align:center;" v-for="cart of carts" :key="cart.id">
                                <td v-html="cart.id"></td>
                                <td v-html="cart.namabarang"></td>
                                <td v-html="cart.jumlah"></td>
                                <td v-html="cart.totalharga"></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success" style="display: block; margin: 0 auto;">FINISH BUY</button>
                        </div>
                        <div class="col-md-6">
                            <a href="#"><button type="button" class="btn btn-danger" style="display: block; margin: 0 auto;">CANCEL ALL</button></a>
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
            key :'',
            editbank:'',
            edittopup:'',
            fotobukti:'',
            id:0,
        }
    },
    computed:{
        ...mapState({
            carts : state => state.Cart.data
        }),
    },
    mounted() {
       
    },
    methods : {
        ...mapActions({
            get : 'Cart/getCartbyuser'
        }),
     
    },   
    async created(){
        await this.get(this.$auth.user().id)
    }
}
</script>>

