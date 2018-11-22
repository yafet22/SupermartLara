<template>
    <div>
        <div class="container">
            <div class="row">
                <div v-if="$route.params.kategori=='MinumanRingan' || $route.params.kategori=='MinumanIsotonik' || $route.params.kategori=='MinumanSoda'" class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MinumanRingan'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanIsotonik'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Isotonik</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Isotonik</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanSoda'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Soda</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Soda</a>
                        </li>
                    </router-link>
                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>    
                </div>

                <div v-if="$route.params.kategori=='MakananRingan' || $route.params.kategori=='MakananBeku' || $route.params.kategori=='MinumanPokok'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MakananRingan'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananBeku'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Beku</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Beku</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananPokok'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Pokok</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Pokok</a>
                        </li>
                    </router-link>    

                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>
                </div>

                <div v-if="$route.params.kategori=='PerawatanDiri' || $route.params.kategori=='PerawatanBadan' || $route.params.kategori=='PerawatanRambut' || $route.params.kategori=='PerawatanPria' || $route.params.kategori=='Obat' " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='PerawatanDiri'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanDiri' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Diri</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanDiri' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Diri</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PerawatanBadan'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanBadan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Badan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanBadan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Badan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PerawatanRambut'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanRambut' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Rambut</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanRambut' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Rambut</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PerawatanPria'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanPria' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Perawatan Pria</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanPria' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Perawatan Pria</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='Obat'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'Obat' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Obat-obatan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'Obat' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Obat-obatan</a>
                        </li>
                    </router-link>  
                    <br>                  
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                            Input Barang     
                    </button>
                </div>

                <div v-if="$route.params.kategori=='Televisi' || $route.params.kategori=='AksesorisKomputer' || $route.params.kategori=='AksesorisHP'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='Televisi'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'Televisi' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Televisi</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'Televisi' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Televisi</a>
                        </li>
                    </router-link> 

                    <router-link v-if="$route.params.kategori=='AksesorisKomputer'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'AksesorisKomputer' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Aksesoris Komputer</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'AksesorisKomputer' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Aksesoris Komputer</a>
                        </li>
                    </router-link> 
                    
                    <router-link v-if="$route.params.kategori=='AksesorisHP'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'AksesorisHP' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Aksesoris HP</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'AksesorisHP' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Aksesoris HP</a>
                        </li>
                    </router-link> 

                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>
                </div>

                <div v-if="$route.params.kategori=='PeralatanKebersihan' || $route.params.kategori=='PeralatanMakan' || $route.params.kategori=='PeralatanRT'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='PeralatanKebersihan'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanKebersihan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Peralatan Kebersihan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanKebersihan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Peralatan Kebersihan</a>
                        </li>
                    </router-link> 

                    <router-link v-if="$route.params.kategori=='PeralatanMakan'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanMakan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Peralatan Makan</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanMakan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Peralatan Makan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='PeralatanRT'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanRT' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Peralatan Rumah Tangga</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanRT' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Peralatan Rumah Tangga</a>
                        </li>
                    </router-link>

                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>
                </div>

                <div v-if="$route.params.kategori=='FashionPria' || $route.params.kategori=='FashionWanita' " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='FashionPria'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'FashionPria' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Fashion Pria</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'FashionPria' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Fashion Pria</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='FashionWanita'" :to="{name: 'panelbarangadmin',  params: {  kategori: 'FashionWanita' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Fashion Wanita</a>
                        </li>
                    </router-link>
                    <router-link v-else :to="{name: 'panelbarangadmin',  params: {  kategori: 'FashionWanita' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Fashion Wanita</a>
                        </li>
                    </router-link>

                    <br>
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#inputbarang">
                        Input Barang     
                    </button>
                </div>

                <div class="col-md-9 order-last mt-2">         
                    <div class="row">
                        <div v-for="barang of filtered" v-bind:key="barang['idbarang']" class="card col-md-3 mx-1 p-3">
                            <img v-bind:src="'/images/' + barang.image_name" class="img-display"/>
                            <p class="text-center lead">{{ barang.namabarang }}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#'+barang.idbarang"  >Info</button>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>


        <div id="wrapper">
            <div v-for="barang of barang" v-bind:key="barang['idbarang']" class="modal fade" data-backdrop="false" v-bind:id="barang.idbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                        <button id="closeinfo" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="wrapper"><img v-bind:src="'/images/' + barang.image_name" alt="foto-bahan" class="img-info mx-auto d-block"/></div>
                        <div class="info-wrapper"><ul><li><b>Harga</b> : {{ barang.harga }}</li><li><b>Stok</b>  : {{ barang.stok }}</li><li><b>Deskripsi</b>  : {{ barang.deskripsi }}</li> </ul></div>
                        <p class="text-center">Lakukan <router-link style="color:white;" to="/login"><a href="#">Login</a></router-link> untuk dapat membeli barang</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" @click="bindData(barang.idbarang)" data-toggle="modal" data-target="#editbarang">Edit barang</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Input Barang</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="nbarangr">Nama Barang: </label>
                                    <input type="text" class="form-control" id="nbarang" placeholder="Enter name barang" name="nbarang" v-model="namabarang">
                                </div>
                                <div class="form-group">
                                    <label for="kbarang">Kategori</label>
                                    <select class="form-control" id="kbarang" v-model="kategori" >
                                        <option value="MakananRingan" selected>Makanan Ringan</option>
                                        <option value="MakananBeku" >Makanan Beku</option>
                                        <option value="MakananPokok" >Makanan Pokok</option>
                                        <option value="MinumanRingan" >Minuman Ringan</option>
                                        <option value="MinumanIsotonik" >Minuman Isotonik</option>
                                        <option value="MinumanSoda" >Minuman Soda</option>
                                        <option value="PerawatanDiri" >Perawatan Diri</option>
                                        <option value="PerawatanBadan" >Perawatan Badan</option>
                                        <option value="PerawatanRambut" >Perawatan Rambut</option>
                                        <option value="PerawatanPria" >Perawatan Pria</option>
                                        <option value="Televisi" >Televisi</option>
                                        <option value="AksesorisKomputer" >Aksesoris Komputer</option>
                                        <option value="AksesorisHP" >Aksesoris HP</option>
                                        <option value="PeralatanKebersihan" >Peralatan Kebersihan</option>
                                        <option value="PeralatanMakan" >Peralatan Makan</option>
                                        <option value="PeralatanRT" >Peralatan Rumah Tangga</option>
                                        <option value="FashionPria" >Fashion Pria</option>
                                        <option value="FashionWanita" >Fashion Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="hbarang">Harga: </label>
                                    <input type="number" class="form-control" id="hbarang" placeholder="Enter harga barang" v-model="harga" name="hbarang">
                                </div>
                                <div class="form-group">
                                    <label for="sbarang">Stock: </label>
                                    <input type="number" class="form-control" id="sbarang" placeholder="Enter stock barang" v-model="stock" name="sbarang">
                                </div>
                                <div class="form-group">
                                    <label for="desc">Deskripsi: </label>
                                    <textarea class="form-control" rows="3" id="desc" placeholder="Enter deskripsi barang" name="desc" v-model="deskripsi"></textarea>
                                    <!-- <input type="text" class="form-control" id="desc" placeholder="Enter deskripsi barang" name="desc"> -->
                                </div>
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-default btn-file">
                                                Browse… <input type="file" ref="file" id="file" class="custom-file-input"  v-on:change="handleFileUpload">
                                            </span>
                                        </span>
                                        <input type="text"  class="form-control" readonly>
                                    </div>
                                    <img id='img-upload'/>
                                </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" value="Upload" class="btn btn-primary" name="tambah" @click="input()" >Save </button>
                            <button id="close" type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                        <option v-if="editkategori=='AksesorisKomputer'" value="AksesorisKomputer" selected>AksesorisKomputer</option>
                                        <option v-else value="AksesorisKomputer">AksesorisKomputer</option>
                                        <option v-if="editkategori=='AksesorisHP'" value="AksesorisHP" selected>Aksesoris HP</option>
                                        <option v-else value="AksesorisHP">Aksesoris HP</option>
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
                                                Browse… <input type="file" ref="file" id="file2" class="custom-file-input"  v-on:change="handleFileUpload">
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
</template>

<script>
import {mapActions, mapState} from 'vuex'

export default {
    data(){
        return{
            idbarang:'',
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
        filtered(){
           let filter = this.barang
           filter = this.barang.filter( b => b.kategori === this.$route.params.kategori)
           return filter
        },
        filterbyid(){
            let filter = this.barang
            filter = this.barang.filter( b => b.idbarang === this.key )
            return filter
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
            updateBarang : 'DataBarang/update',
        }),

        input(){
            try{
                let payload = new FormData();
                payload.append('namabarang',this.namabarang);
                payload.append('kategori',this.kategori);
                payload.append('harga',this.harga);
                payload.append('stock',this.stock);
                payload.append('deskripsi',this.deskripsi);
                payload.append('image_name',this.image_name);
                console.log(this.image_name);
                this.inputBarang(payload)
                document.getElementById("close").click();
                this.setInit()
                console.log('success!')
            }
            catch(err){
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
                document.getElementById("closeedit").click();
                document.getElementById("closeinfo").click();
                this.setInitEdit()
                this.get()
                console.log('success!')
            }
            catch(err)
            {
                console.log(rr)
            }
        },

        handleFileUpload(e){
                this.image_name = e.target.files[0];
        },

        handleFileUploadEdit(e){
                this.editimage_name = e.target.files[0];
        },

        setInit(){
                this.namabarang='',
                this.kategori='',
                this.harga=0,
                this.stock=0,
                this.deskripsi='',
                this.image_name=''
        },

        setInitEdit(){
                this.editnamabarang='',
                this.editkategori='',
                this.editharga=0,
                this.editstock=0,
                this.editdeskripsi='',
                this.editimage_name=''
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


