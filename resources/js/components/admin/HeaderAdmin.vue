<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color:#22A7F0">
            <div class="container">
                <div class="navbar-header">
                    <router-link  class="navbar-brand" to="/"><a class="navbar-brand" href="home-admin.php"><img id="logo" src="http://localhost:8000/img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></a></router-link>
                </div>
                <div class="img-wrapper float-right mt-1">
                    <img src="http://localhost:8000/img/menu.png" id="menu-icon-phone" alt="icon-menu" style="width:40px">
                    </div>
                <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto">
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="profiledrop" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img v-bind:src="'/image/profile/' + this.$auth.user().image_name" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" /> ADMIN
                            </a>
                            <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="home-admin.php"><img id="shop-chart" src="http://localhost:8000/img/homelogo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="home-logo"><span style="margin-left: 25px;
                            font-size: 18px;">Home</span></a>
                            <a class="dropdown-item" href="profile-admin.php"><img src="http://localhost:8000/img/user-logo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="user-logo"><span style="margin-left: 25px;
                            font-size: 18px;">Profile</span></a>
                            <router-link class="dropdown-item" to="/databarang" >
                                <img id="shop-chart" src="http://localhost:8000/img/shoplist.png" class="img-display mx-2" style="width:28px;height:30px;" alt="shop-chart"><span style="margin-left: 4px;
                                font-size: 18px;">Admin Panel</span>
                            </router-link>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" @click.prevent="$auth.logout()" ><img id="logout-logo" src="http://localhost:8000/img/logoutlogo.png" class="img-display mx-2" style="width:36px;height:30px;" alt="logout-logo"><span style="margin-left: 14px;
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
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananRingan' } }"><li><a href="#">Makanan Ringan</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananBeku' } }"><li><a href="#">Makanan Beku</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MakananPokok' } }"><li><a href="#">Makanan Pokok</a></li></router-link>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Minuman</li>
                            <div class="menu-content">
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanRingan' } }"><li><a href="#">Minuman Ringan</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanIsotonik' } }"><li><a href="#">Minuman Isotonik</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanSoda' } }"><li><a href="#">Minuman Soda</a></li></router-link>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Kesehatan</li>
                            <div class="menu-content">
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanDiri' } }"><li><a href="#">Perawatan Diri</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanBadan' } }"><li><a href="#">Perawatan Badan</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanRambut' } }"><li><a href="#">Perawatan Rambut</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PerawatanPria' } }"><li><a href="#">Perawatan Pria</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'Obat' } }"><li><a href="#">Obat - obatan</a></li></router-link>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Elektronik</li>
                            <div class="menu-content">
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'Televisi' } }"><li><a href="#">Televisi</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'AksesorisKomputer' } }"><li><a href="#">Aksesoris Komputer</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'AksesorisHP' } }"><li><a href="#">Aksesoris Handphone</a></li></router-link>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Kebutuhan Rumah Tangga</li>
                            <div class="menu-content">
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanKebersihan' } }"><li><a href="#">Peralatan Kebersihan</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanMakan' } }"><li><a href="#">Peralatan Makan</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'PeralatanRT' } }"><li><a href="#">Peralatan Rumah Tangga</a></li></router-link>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Fashion</li>
                            <div class="menu-content">
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'FashionPria' } }"><li><a href="#">Fashion Pria</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'FashionWanita' } }"><li><a href="#">Fashion Wanita</a></li></router-link>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
        </nav>

        <nav id="sidebar" style="height:570px">
            <div class="container">
                <div class="menu-sidebar">
                    <div class="menu-title">
                    <img src="#" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px"/>
                    </div>
                    <hr>
                    <div class="menu-content-sidebar">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Admin Panel</a></li>
                        <li><a href="#">Log Out</a></li>
                    </div>
                    <hr>
                    <div class="menu-title">
                        <a href="#">Makanan</a>
                    </div>
                    <hr>
                    <div class="menu-title">
                        <a href="#">Minuman</a>
                    </div>
                    <hr>
                    <div class="menu-title">
                        <a href="#">Kesehatan</a>
                    </div>        
                    <hr>
                    <div class="menu-title">
                    <a href="#">Elektronik</a>
                    </div> 
                    <hr>
                    <div class="menu-title">
                        <a href="#">Fashion</a>
                    </div> 
                    <hr> 
                    <div class="menu-title">
                    <a href="#">Peralatan Rumah Tangga</a>
                    </div>
                    <hr>
                </div>
            </div>
        </nav>
    </div>
</template>
