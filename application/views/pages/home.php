<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teknologi Informasi - ITS</title>
    <meta name="description" content="aditbelajarweb,tk, tempat adit belajar web>
  <meta name="keywords" content="berisi web gajelas untuk adit belajar">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/jquery.bxslider.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- =======================================================
      Theme Name: Baker
      Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<div class="loader"></div>
<div id="myDiv">
    <!--HEADER-->
    <div class="header">
        <div class="bg-color">
            <header id="main-header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Teknologi Informasi </span></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="#main-header">Home</a></li>
                                <li class=""><a href="#service">VISI DAN MISI</a></li>
                                <li class=""><a href="#portfolio">Profil Lulusan</a></li>
                                <li class=""><a href="#testimonial">Peluang Kerja</a></li>
                                <li class=""><a href="#blog">Fasilitas</a></li>
                                <li class=""><a href="#seleksimasuk">Seleksi Masuk</a></li>
                                <li class=""><a href="#contact">Hubungi Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="banner-info text-center wow fadeIn delay-05s">
                            <h1 class="bnr-title">Fakultas Teknologi Informasi dan Komunikasi</h1>
                            <h2 class="bnr-sub-title">Teknologi Informasi</h2>
                            <h3 class="bnr-sutitle">Institut Teknologi Sepuluh Nopember<br>Surabaya</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ HEADER-->
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 id="modal-header-text" class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p id="modal-body-text">Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">VISI</h2>
                    <p class="sub-title pad-bt15">Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Tekologi berbasis Internet (Internet of Things)
                        untuk mendukung pembangunan Smart City secara berkelanjutan hingga tahun 2022</p>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">MISI</h2>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="text-justify">Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas
                        serta fasilitas yang memadai</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="text-justify">Melaksanakan penilitian yang bermutu di bidang Keamanan Siber dan Internet of Things untuk teknologi Smart City</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="text-justify">Menjalin kemitraan dengan instansi dalam maupun luar negeri</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <p class="text-justify">Menyelenggarakan pengabdian kepada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah</p>
                </div>
                <div class="col-md-12">
                    <hr class="bottom-line">
                </div>
            </div>
        </div>
    </section>
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">PROFIL LULUSAN</h2>
                </div>
                <hr class="bottom-line">
                <?php
                foreach ($profil as $new_item) {
                    echo "<div class=\"col-md-6 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15\">";
                    echo "<h2>" . $new_item['lulusan'] . "</h2>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </section>
    <!---->
    <section id="testimonial" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2 class="service-title pad-bt15">Jenis Peluang Kerja</h2>
                <hr class="bottom-line">

            </div>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                        echo "<div <div class=\"item active\">";
                        echo "<h4>" . $peluang[0]['peluangkerja'] . "</h4>";
                        echo "</div>";
                        for($x=1;$x<=sizeof($peluang)-1;$x++) {
                            echo "<div <div class=\"item\">";
                            echo "<h4>" . $peluang[$x]['peluangkerja'] . "</h4>";
                            echo "</div>";
                        }

                    ?>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!---->
    <section id="blog" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">FASILITAS</h2>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="<?php echo base_url('assets/img/comlab.jpg') ?>" class="img-responsive">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>Laboratorium.</h2>
                            <p>Terdapat 2 laboratorium komputer (Lab Keamanan Siber dan Lab Teknologi Smart City). Seluruh komputer telah dilengkapi oleh perangkat lunak yang dapat digunakan untuk mendukung kegiatan praktikum maupun akademis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="<?php echo base_url('assets/img/ruangbaca.jpg') ?>" class="img-responsive">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>Ruang Baca.</h2>
                            <p>Memiliki berbagai macam koleksi mulai dari fiksi hingga materi perkuliahan. Dari bahan cetak hingga koleksi digital. Selain itu juga menyediakan publikasi serial harian dan bulanan seperti surat kabar dan majalah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="blog-sec">
                        <div class="blog-img">
                            <a href="">
                                <img src="<?php echo base_url('assets/img/ruangkelas.jpg') ?>" class="img-responsive">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h2>Ruang Kelas.</h2>
                            <p>Setiap ruang kelas dilengkapi dengan pendingin ruangan dan LCD serta akses internet gratis yang dapat mendukung kegiatan akademis mahasiswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <section id="seleksimasuk" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="service-title pad-bt15">Seleksi Masuk</h2>
                    <hr class="bottom-line">
                </div>
                <div class="col-md-6 text-center">
                    <h2>SNMPTN</h2>
                    <a href="https://smits.its.ac.id/sarjana/#snmptn" target="_blank">https://smits.its.ac.id/sarjana/#snmptn</a>
                </div>
                <div class="col-md-6 text-center">
                    <h2>SBMPTN</h2>
                    <a href="https://smits.its.ac.id/sarjana/#sbmptn" target="_blank">https://smits.its.ac.id/sarjana/#sbmptn</a>
                </div>
                <div class="col-md-12 text-center">
                    <h2>PKM</h2>
                    <a href="https://smits.its.ac.id/sarjana/#pkm" target="_blank">https://smits.its.ac.id/sarjana/#pkm</a>
                    <link>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center white">
                    <h2 class="service-title pad-bt15">HUBUNGI KAMI</h2>
                    <hr class="bottom-line white-bg">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="loction-info white">
                        <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Jalan Raya ITS, Keputih, Sukolilo, Kota SBY, Jawa Timur</p>
                        <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>teknologi.informasi@its.ac.id</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form">
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="col-md-6 padding-right-zero">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-submit">SUBMIT</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <footer id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <p>Teknologi Informasi</p>
                    <p>Fakultas Teknologi Informasi</p>
                    <p>Institut Teknologi Sepuluh Nopember</p>
                    <p><b id="hitcounter">Visitors Counter: <?php echo $counter?></b></p>
                    <p>&copy; Baker Theme. All Rights Reserved.</p>
                    <a href="index.php/admin">Admin Panel</a>
                </div>
            </div>
        </div>
    </footer>
    <!---->
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.bxslider.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $to = "adit393270@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission: " . $_POST['subject'];
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . ":\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(!empty($from) && !empty($name) && !empty($subject && !empty($message))) {
        if(mail($to,$subject,$message,$headers) && mail($from,$subject2,$message2,$headers2)) {
            echo "<script>
                document.getElementById(\"modal-header-text\").innerText=\"Sukses\"; 
                document.getElementById(\"modal-body-text\").innerText=\"Pesan anda telah terkirim\"; 
                $(\"#myModal\").modal() 
        </script>" ;
        } else {
            echo "<script>
                document.getElementById(\"modal-header-text\").innerText=\"Error\"; 
                document.getElementById(\"modal-body-text\").innerText=\"Terjadi kesalahan dalam mengirim pesan. Mohon dicoba ulang \"; 
                $(\"#myModal\").modal() 
        </script>" ;
        }
    }
    else {
        echo "<script>
                document.getElementById(\"modal-header-text\").innerText=\"Error\"; 
                document.getElementById(\"modal-body-text\").innerText=\"Terdapat kolom yang belum diisi ketika mengirim pesan. \"; 
                $(\"#myModal\").modal() 
        </script>" ;
    }
}
?>

