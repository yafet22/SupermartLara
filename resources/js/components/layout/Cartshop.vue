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
                        <img v-bind:src="'images/'+this.$auth.user().image_name" class="img-display mx-2" style="border-radius:50%;"/>
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
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="text-align:center;" v-for="cart of carts" :key="cart.id">
                                <td v-html="cart.id"></td>
                                <td v-html="cart.namabarang"></td>
                                <td v-html="cart.jumlah"></td>
                                <td v-html="cart.totalharga"></td>
                                <td>
                                    <i v-if="hover" @mouseleave="mouseLeave" @click="deleteCart(cart.id)" class="fa fa-trash fa-lg" aria-hidden="true"></i>
                                    <i v-else @mouseover="mouseOver" class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
                                </td>
                                <td>
                                    <i v-if="hover2" @mouseleave="mouseLeave2" @click="tambahCart(cart.id)" class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>
                                    <i v-else @mouseover="mouseOver2" class="fa fa-plus-square fa-lg" aria-hidden="true"></i>
                                </td>
                                <td>
                                    <i v-if="hover3" @mouseleave="mouseLeave3" @click="kurangCart(cart.id)" class="fa fa-minus-square-o fa-lg" aria-hidden="true"></i>
                                    <i v-else @mouseover="mouseOver3" class="fa fa-minus-square fa-lg" aria-hidden="true"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success" @click="finishBuy(carts[0].idtransaksi)" style="display: block; margin: 0 auto;">FINISH BUY</button>
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
            hover:false,
            hover2:false,
            hover3:false
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
            get : 'Cart/getCartbyuser',
            update : 'Cart/update',
            delete : 'Cart/destroy',
            finish : 'Transaksi/finish'
        }),
        finishBuy(idtransaksi)
        {
            try{
                this.finish(idtransaksi)
                this.get(this.$auth.user().id)
            }
            catch(err){
                console.log(err)
            }
        },
        deleteCart(idcart)
        {
            try{
                this.delete(idcart)
                this.get(this.$auth.user().id)
            }
            catch(err){
                console.log(err)
            }
        },
        tambahCart(idcart)
        {
            const payload = {
                id : idcart,
                jumlah : 1
            }

            try{
                this.update(payload)
                this.get(this.$auth.user().id)
            }
            catch(err){
                console.log(err)
            }
        },
        kurangCart(idcart)
        {
            const payload = {
                id : idcart,
                jumlah : -1
            }

            try{
                this.update(payload)
                this.get(this.$auth.user().id)
            }
            catch(err){
                console.log(err)
            }
        },
        mouseOver()
        {
            this.hover = true;   
        },
        mouseLeave()
        {
            this.hover = false;   
        },
        mouseOver2()
        {
            this.hover2 = true;   
        },
        mouseLeave2()
        {
            this.hover2 = false;   
        },
        mouseOver3()
        {
            this.hover3 = true;   
        },
        mouseLeave3()
        {
            this.hover3 = false;   
        }
     
    },   
    async created(){
        await this.get(this.$auth.user().id)
    }
}
</script>>

