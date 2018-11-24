<template>
    <div>
        <section class="kategori">
            <div class="container title_hightlight">
                <h2 class="font-weight-bold">TOP UP POINT</h2>
            </div>
            <br>
            <div class="container shop list">
                <div class="row">
                <div class="col-md-5 order-first mt-2">      
                        <div class="form-group">
                        <label for="nama">Nominal Top Up:</label>
                        <input type="number" min="10000" step="100" class="form-control" id="saldo" v-model="topup" placeholder="Enter Nominal" name="saldo" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Bank:</label>
                            <div class="radio">
                            <label><input type="radio" name="optradio" v-model="bank" checked value="Mandiri"> Mandiri-Jose(123456789)</label>
                            </div>
                            <div class="radio">
                            <label><input type="radio" name="optradio" v-model="bank" value="BRI"> BRI-Jose(123456788)</label>
                            </div>
                            <div class="radio">
                            <label><input type="radio" name="optradio" v-model="bank" value="BCA"> BCA-Jose(123456777)</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" @click="input" style="display: block; margin: 0 auto;">Beli</button>

                </div>
                <div class="col-md-7 order-first mt-2">
                <h2 class="font-weight-bold" style="text-align: center;">DATA TOP UP POINT</h2>
                    <div class="table-responsive-md">
                        <table id=tabletopup class="table table-bordered" cellpadding="5" cellspacing="0" width="100%">
                            <tr style="background-color:#4285f4;color:white;text-align:center;">
                                <th class="font-weight-bold">No</th>
                                <th class="font-weight-bold">Id Transaksi</th>
                                <th class="font-weight-bold">Jumlah TopUp</th>
                                <th class="font-weight-bold">Bank</th>
                                <th class="font-weight-bold">Status</th>
                                <th> </th>
                            </tr>
                            <tr style="text-align:center;" v-for="topup of topups" :key="topup.id">
                                <td></td>
                                <td v-html="topup.id"></td>
                                <td v-html="topup.topup"></td>
                                <td v-html="topup.bank"></td>
                                <td v-html="topup.verifikasi"></td>
                                <td>
                                    <button v-if="topup.verifikasi=='UNCONFIRMED'" type="button" @click="bindData(topup.id)" data-toggle="modal" data-target="#konfirmasitopup"  class="btn btn-warning btn-sm btn-block">KONFIRMASI</button>
                                    <button v-else-if="topup.verifikasi=='WAITING' || topup.verifikasi=='CONFIRMED'" type="button" @click="bindData(topup.id)" data-toggle="modal" data-target="#konfirmasitopup"  class="btn btn-primary btn-sm btn-block" disabled>KONFIRMASI</button>
                                </td>
                            </tr>
                        </table>
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
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Upload Bukti Pembayaran</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Browse… <input type="file" ref="file" id="file" name="file" v-on:change="handleFileUpload">
                                        </span>
                                    </span>
                                    <input type="text"  class="form-control" readonly>
                                </div>
                                <img id='img-upload'/>  
                            </div>  
                            <button class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                            <button type="submit" value="Upload" class="btn btn-primary pull-right" @click="confirm" name="simpan">Save </button>
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
            bank :'',
            topup:0,
            key :'',
            editbank:'',
            edittopup:'',
            fotobukti:'',
        }
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
    methods : {
        ...mapActions({
            get : 'Topup/getTopupbyUser',
            doTopup : 'Topup/addTopup',
            sendConfirm : 'Topup/sendconfirm'
        }),

        input(){
            try{
                var payload = {
                    bank : this.bank,
                    topup : this.topup,
                    id : this.$auth.user().id
                }
                this.doTopup(payload)
                this.get(this.$auth.user().id)
                console.log('success!')
            }
            catch(err)
            {
                console.log(rr)
            }
        },

        confirm(){
            try{
                let payload = new FormData();
                payload.append('fotobukti',this.fotobukti)
                payload.append('id',this.key)
                console.log(payload.get("fotobukti"))
                this.sendConfirm(payload)
                this.get(this.$auth.user().id)
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
        },

        handleFileUpload(e){
            this.fotobukti = e.target.files[0];
            console.log(this.fotobukti)
        },

    },   
    async created(){
        await this.get(this.$auth.user().id)
    }
}
</script>

