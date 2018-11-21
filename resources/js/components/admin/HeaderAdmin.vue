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
                            <img src="#" class="img-display mx-2" style="border-radius:50%;width:35px;height:35px" />
                            </a>
                            <div class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="home-admin.php"><img id="shop-chart" src="img/homelogo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="home-logo"><span style="margin-left: 25px;
                            font-size: 18px;">Home</span></a>
                            <a class="dropdown-item" href="profile-admin.php"><img src="img/user-logo.png" class="img-display mx-2" style="width:30px;height:30px;" alt="user-logo"><span style="margin-left: 25px;
                            font-size: 18px;">Profile</span></a>
                            <router-link class="dropdown-item" to="/databarang" >
                                <img id="shop-chart" src="img/shoplist.png" class="img-display mx-2" style="width:28px;height:30px;" alt="shop-chart"><span style="margin-left: 4px;
                                font-size: 18px;">Admin Panel</span>
                            </router-link>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout-proses.php"><img id="logout-logo" src="img/logoutlogo.png" class="img-display mx-2" style="width:36px;height:30px;" alt="logout-logo"><span style="margin-left: 14px;
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
                                <li><a href="../makanan/makanan-ringan-admin.php">Makanan Ringan</a></li>
                                <li><a href="../makanan/makanan-beku-admin.php">Makanan Beku</a></li>
                                <li><a href="../makanan/makanan-pokok-admin.php">Makanan Pokok</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Minuman</li>
                            <div class="menu-content">
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanRingan' } }"><li><a href="#">Minuman Ringan</a></li></router-link>
                                <router-link style="color:black" :to="{name: 'panelbarangadmin',  params: {  kategori: 'MinumanIsotonik' } }"><li><a href="#">Minuman Isotonik</a></li></router-link>
                                <li><a href="../minuman/minuman-soda-admin.php">Minuman Soda</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Kesehatan</li>
                            <div class="menu-content">
                                <li><a href="../kesehatan/perawatan-diri-admin.php">Perawatan Diri</a></li>
                                <li><a href="../kesehatan/perawatan-badan-admin.php">Perawatan Badan</a></li>
                                <li><a href="../kesehatan/perawatan-rambut-admin.php">Perawatan Rambut</a></li>
                                <li><a href="../kesehatan/perawatan-pria-admin.php">Perawatan Pria</a></li>
                                <li><a href="../kesehatan/obat-obatan-admin.php">Obat - obatan</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Elektronik</li>
                            <div class="menu-content">
                                <li><a href="../elektronik/televisi-admin.php">Televisi</a></li>
                                <li><a href="../elektronik/aksesoris-komputer-admin.php">Aksesoris Komputer</a></li>
                                <li><a href="../elektronik/aksesoris-handphone-admin.php">Aksesoris Handphone</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Kebutuhan Rumah Tangga</li>
                            <div class="menu-content">
                                <li><a href="../kebutuhan rumah tangga/peralatan-kebersihan-admin.php">Peralatan Kebersihan</a></li>
                                <li><a href="../kebutuhan rumah tangga/peralatan-makan-admin.php">Peralatan Makan</a></li>
                                <li><a href="../kebutuhan rumah tangga/peralatan-rumah-tangga-admin.php">Peralatan Rumah Tangga</a></li>
                            </div>
                        </div>

                        <div class="dropdown">
                            <li class="menu">Fashion</li>
                            <div class="menu-content">
                                <li><a href="../fashion/fashion-pria-admin.php">Fashion Pria</a></li>
                                <li><a href="../fashion/fashion-wanita-admin.php">Fashion Wanita</a></li>
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
                        <li><a href="../../home-admin.php">Home</a></li>
                        <li><a href="../../profile-admin.php">Profile</a></li>
                        <li><a href="../../index-admin.php">Admin Panel</a></li>
                        <li><a href="../../logout-proses.php">Log Out</a></li>
                    </div>
                    <hr>
                    <div class="menu-title">
                        <a href="../makanan/makanan-ringan-admin.php">Makanan</a>
                    </div>
                    <hr>
                    <div class="menu-title">
                        <a href="../minuman/minuman-ringan-admin.php">Minuman</a>
                    </div>
                    <hr>
                    <div class="menu-title">
                        <a href="../kesehatan/perawatan-diri-admin.php">Kesehatan</a>
                    </div>        
                    <hr>
                    <div class="menu-title">
                    <a href="../elektronik/televisi-admin.php">Elektronik</a>
                    </div> 
                    <hr>
                    <div class="menu-title">
                        <a href="../fashion/fashion-pria-admin.php">Fashion</a>
                    </div> 
                    <hr> 
                    <div class="menu-title">
                    <a href="../kebutuhan rumah tangga/peralatan-kebersihan-admin.php">Peralatan Rumah Tangga</a>
                    </div>
                    <hr>
                </div>
            </div>
        </nav>
    </div>
</template>
