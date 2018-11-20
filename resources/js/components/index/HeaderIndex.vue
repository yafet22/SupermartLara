<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color:#22A7F0">
            <div class="container">
                <div class="navbar-header">
                    <router-link  class="navbar-brand" to="/"><img id="logo" src="img/logo-supermarket-supermart.png" alt="logo-imk-supermarket"></router-link>
                </div>
                <div class="img-wrapper float-right mt-1">
                    <img src="img/menu.png" id="menu-icon-phone" alt="icon-menu" style="width: 40px">
                    </div>
                <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav mr-auto">
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li id="loginlink" class="nav-item dropdown">
                            <router-link style="color:white;" to="/login" >Silahkan Login/Register</router-link>
                        <!-- <p><b> <a href="#" style="color:white;">Silahkan Login/Register</a></b></p> -->
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
                                <li><a href="#">Makanan Ringan</a></li>
                                <router-link style="color:black" :to="{name: 'panelbarang',  params: {  kategori: 'MakananBeku' } }"><li><a href="#">Makanan Beku</a></li></router-link>
                                <li><a href="#">Makanan Pokok</a></li>
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
                                <li><a href="#">Perawatan Diri</a></li>
                                <li><a href="#">Perawatan Badan</a></li>
                                <li><a href="#">Perawatan Rambut</a></li>
                                <li><a href="#">Perawatan Pria</a></li>
                                <li><a href="#">Obat - obatan</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Elektronik</li>
                            <div class="menu-content">
                                <li><a href="#">Televisi</a></li>
                                <li><a href="#">Aksesoris Komputer</a></li>
                                <li><a href="#">Aksesoris Handphone</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Kebutuhan Rumah Tangga</li>
                            <div class="menu-content">
                                <li><a href="#">Peralatan Kebersihan</a></li>
                                <li><a href="#">Peralatan Makan</a></li>
                                <li><a href="#">Peralatan Rumah Tangga</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Fashion</li>
                            <div class="menu-content">
                                <li><a href="#">Fashion Pria</a></li>
                                <li><a href="#">Fashion Wanita</a></li>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <nav id="sidebar" style="height:390px">
            <div class="container">
                <div class="menu-sidebar">
                    <div class="menu-title">
                    <a href="#">Login/Register</a>
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
