<!DOCTYPE html>
<html>
    <head>
        <title>Web Sekolah</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
        <div>
            <div class="kepala"> 
                <img src="gambar/universitas_bina_sarana_informatika_ubsi_depok.jpg" width="50%" height="100%">  
            </div>

            <div id="menu">   
                <ul>
                    <li><a href="index.php?halaman=home">Home</a></li>
                    <li><a href="index.php?halaman=profile">Profile</a></li>
                    <li><a href="index.php?halaman=sejarah">Sejarah</a></li>
                    <li><a href="index.php?halaman=ekskul">Ekskul</a></li>
                    <li><a href="index.php?halaman=berita">Berita</a></li>
                    <li><a href="index.php?halaman=login">Login</a></li>
                </ul>
            </div>

            <div class="konten">   
                <div class="sidebar">   
                    <img src="gambar/bannerkiri.jpg" width="100%" height="100%">  
                </div>

                <div class="berita">   
                    <?php
                        if(isset($_GET['halaman'])){
                            $hal=$_GET['halaman'];
                            
                            switch($hal){
                                case 'home':
                                    include "home.php";
                                    break;
                                    
                                case 'profile':
                                    include "profile.html";
                                    break;

                                case 'sejarah':
                                    include "sejarah.html";
                                    break;
                                    
                                case 'ekskul':
                                    include "ekskul.php";
                                    break;

                                case 'berita':
                                    include "berita.php";
                                    break;

                                case 'login':
                                    include "login.php";
                                    break;

                                case 'tambahberita':
                                    include "tambahberita.php";
                                    break;

                                default :
                                    echo "<h2>Maaf halaman yang anda tuju tidak ada</h2>";
                                    break;
                            }
                        }
                        else{
                            include "home.php";
                        }
                    ?>
                </div>

                <div style="clear:both;"></div>
            </div>

            <div class="kaki">  
                <?php 
                    include "footer.php"
                ?>
            </div>
        </div>
    </body>