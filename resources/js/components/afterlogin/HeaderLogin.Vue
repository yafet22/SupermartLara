<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color:#22A7F0">
        <div class="container">
            <div class="navbar-header">
                <router-link  class="navbar-brand" to="/"><a class="navbar-brand" href="#"><img id="logo" src="img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></a></router-link>
            </div>
            <div class="img-wrapper float-right mt-1">
                <img src="img/menu.png" id="menu-icon-phone" alt="icon-menu" style="width:40px">
            </div>
            <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav mr-auto">
                    
                </ul>
                <span><router-link to="/cart" ><a href="#"><img id="shop-chart" src="img/shop-chart.png" class="img-display mx-2" style="width:30px;height:30px;" alt="shop-logo"></a></router-link></span>
                <span style="font-size: 18px; color:white;">Saldo : {{ this.$auth.user().saldo }}</span>
                <ul class="nav navbar-nav navbar-right">
                <li id="profiledrop" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img v-bind:src="'images/'+this.$auth.user().image_name" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" />{{ this.$auth.user().email }}
                    </a>
                    <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <router-link class="dropdown-item" to="/" >
                        <img id="shop-chart" src="img/homelogo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="home-logo"><span style="margin-left: 45px;
                        font-size: 18px;">Home</span>
                    </router-link>
                    <router-link class="dropdown-item" to="/profile" >
                        <img src="img/user-logo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="user-logo"><span style="margin-left: 45px;
                        font-size: 18px;">Profile</span>
                    </router-link>
                    <router-link class="dropdown-item" to="/topup" >
                        <img src="img/topup.png" class="img-display mx-2" style="width:30px;height:30px;" alt="user-logo"><span style="margin-left: 45px;
                        font-size: 18px;">Top-up</span>
                    </router-link>
                    <router-link class="dropdown-item" to="/cart" >
                        <img id="shop-chart" src="img/shoplist.png" class="img-display mx-2" style="width:28px;height:30px;" alt="shop-chart"><span style="margin-left: 45px;
                        font-size: 18px;">Shopping List</span>
                    </router-link>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"  @click.prevent="$auth.logout()" ><img id="logout-logo" src="img/logoutlogo.png" class="img-display mx-2" style="width:36px;height:30px;" alt="logout-logo"><span style="margin-left: 40px;
                    font-size: 18px;">Log Out</span></a>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav id="navbar">
        <div class="container">
            <div class="menu-wrapper">
                <ul style="padding-left:0px;">
                    <div class="dropdown">
                        <li class="menu">Makanan</li>
                        <div class="menu-content">
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MakananRingan' } }"><li><a href="#">Makanan Ringan</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MakananBeku' } }"><li><a href="#">Makanan Beku</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MakananPokok' } }"><li><a href="#">Makanan Pokok</a></li></router-link>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Minuman</li>
                        <div class="menu-content">
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MinumanRingan' } }"><li><a href="#">Minuman Ringan</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MinumanIsotonik' } }"><li><a href="#">Minuman Isotonik</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MinumanSoda' } }"><li><a href="#">Minuman Soda</a></li></router-link>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kesehatan</li>
                        <div class="menu-content">
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanDiri' } }"><li><a href="#">Perawatan Diri</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanBadan' } }"><li><a href="#">Perawatan Badan</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanRambut' } }"><li><a href="#">Perawatan Rambut</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PerawatanPria' } }"><li><a href="#">Perawatan Pria</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'Obat' } }"><li><a href="#">Obat - obatan</a></li></router-link>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Elektronik</li>
                        <div class="menu-content">
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'Televisi' } }"><li><a href="#">Televisi</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'AksesorisKomputer' } }"><li><a href="#">Aksesoris Komputer</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'AksesorisHP' } }"><li><a href="#">Aksesoris HandPhone</a></li></router-link>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Kebutuhan Rumah Tangga</li>
                        <div class="menu-content">
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanKebersihan' } }"><li><a href="#">Peralatan Kebersihan</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanMakan' } }"><li><a href="#">Peralatan Makan</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'PeralatanRT' } }"><li><a href="#">Peralatan Rumah Tangga</a></li></router-link>
                        </div>
                    </div>

                    <div class="dropdown">
                        <li class="menu">Fashion</li>
                        <div class="menu-content">
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'FashionPria' } }"><li><a href="#">Fashion Pria</a></li></router-link>
                            <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'FashionWanita' } }"><li><a href="#">Fashion Wanita</a></li></router-link>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>    
    </div> 
</template>

<script>
export default {   
    props: {
        data: Object
    },
}
</script>

