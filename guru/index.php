<?php
    require '../functions.php';

    if(isset($_POST["login"]))
    {
        $username=$_POST["username"];
        $password=$_POST["password"];

        $result=mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

        //cek username
        //mysqli_num_rows=untuk menghitung ada berapa baris yang akan dikembalikan oleh parameter
        //kalau ada yang dikembalikan nilainya adalah 1 kalau enggak ada nilainya 0
        
        

        if(mysqli_num_rows($result)===1)
        {
            //var_dump($result);
            //cek password
            $row=mysqli_fetch_assoc($result);
            //var_dump($row);

            //digunakan untuk mengecek sebuah string apakah samakah dengan hashnya
            //terdapat 2 parameter (password yang belum diacak, password yang sudah diacak)

            $password = md5($password);
            if ($password==$row["password"])
            {
                //set session
                $_SESSION["login"]=true;
                if($row["hakAkses"]=="guru"){
                    $_SESSION["hakAkses"]="guru";
                }if($row["hakAkses"]=="siswa"){
                    $_SESSION["hakAkses"]="siswa";
                }if($row["hakAkses"]=="admin"){
                    $_SESSION["hakAkses"]="admin";
                    header("Location: ../admin/index.php");
                    exit;

                }
                
                //redirect ke halaman index.php
                header("Location:index.php");
                exit;
            }
        }
        $error=true;
    }
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


<!-- Navigation Login -->
<div class="fixed-top">
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- social icon-->
                <div class="col-sm-2">
                    <ul class="social-network">
                        <li><a href="#" data-toggle="popover" title="Call Us" data-content="+62355 321 381" class="waves-effect waves-dark" href=""><i class="fa fa-phone"></i></a></li>
                        <li><a href="#" data-toggle="popover" title="Address" data-content="Jl. Dr. Wahidin Sudiro Husodo no.12 Kedungwaru, Tulungagung" class="waves-effect waves-dark" href=""><i class="fa fa-home"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="mailto:duniedun@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-9 mt-3" style="text-align: right;">
                    <?php if(isset($error)):?>
                        <p style="color:red;font-style=bold">
                        Username dan Password salah</p>
                    <?php endif?>
</div>
                <div class="col-sm-1">
                    <ul class="social-network">
                        <li><a data-toggle="modal" data-target="#modalLogin"class="waves-effect waves-dark login" href="#">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- Navigation Home -->
<nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear mt-4">
    <div class="container">
        <a class="navbar-brand" href="index.php" style="text-transform: uppercase;">LEARNING MANAGEMENT SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Course List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Teacher List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><b>SMAN 1 KEDUNGWARU</b></h1>
    </div>
</div>
<!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- Blog Post -->
                <div class="card my-4">
                    <h5 class="card-header">Available Course</h5>
                    <div class="card-body">
                        <div class="media border p-3">
                            <img src="../image/math.png" alt="math" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4>Matematika <small></small></h4>
                                <p>Matematika merupakan salah satu ilmu yang banyak di manfaatkan dalam kehidupan sehari-hari. Baik secara umum maupun secara khusus. Secara umum matematika di gunakan dalam transaksi perdangangan, pertukangan, dll. Hampir di setiap aspek kehidupan ilmu matematika yang di terapkan.</p>      
                            </div>
                        </div>
                        <div class="media border p-3">
                            <img src="../image/kim.png" alt="math" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4>Kimia <small></small></h4>
                                <p>Kimia adalah cabang dari ilmu fisik yang mempelajari tentang susunan, struktur, sifat, dan perubahan materi. Ilmu kimia meliputi topik-topik seperti sifat-sifat atom, cara atom membentuk ikatan kimia untuk menghasilkan senyawa kimia, interaksi zat-zat melalui gaya antarmolekul yang menghasilkan sifat-sifat umum dari materi, dan interaksi antar zat melalui reaksi kimia untuk membentuk zat-zat yang berbeda.</p>      
                            </div>
                        </div>
                        <div class="media border p-3">
                            <img src="../image/bio.png" alt="math" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4>Biologi <small></small></h4>
                                <p>Biologi adalah kajian tentang kehidupan, dan organisme hidup, termasuk struktur, fungsi, pertumbuhan, evolusi, persebaran, dan taksonominya. Ilmu biologi modern sangat luas, dan eklektik, serta terdiri dari berbagai macam cabang, dan subdisiplin. Namun, meskipun lingkupnya luas, terdapat beberapa konsep umum yang mengatur semua penelitian, sehingga menyatukannya dalam satu bidang. Biologi umumnya mengakui sel sebagai satuan dasar kehidupan, gen sebagai satuan dasar pewarisan, dan evolusi sebagai mekanisme yang mendorong terciptanya spesies baru. Selain itu, organisme diyakini bertahan dengan mengonsumsi, dan mengubah energi serta dengan meregulasi keadaan dalamnya agar tetap stabil, dan vital.</p>      
                            </div>
                        </div>
                        <div class="media border p-3">
                            <img src="../image/phy.png" alt="math" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4>Fisika <small></small></h4>
                                <p>Fisika merupakan salah satu mata pelajaran jurusan IPA yang terbilang sulit dipahami dan sangat membosankan. Namun pelajaran fisika juga bisa menjadi keahlian kita ketika kita bisa belajar dengan sungguh-sungguh. Pengertian fisika yaitu berasal dari kata “physic” yang artinya yaitu alam. Jadi ilmu fisika yaitu sebuah ilmu pengetahuan dimana didalamnya mempelajari tentang sifat dan fenomena alam atau gejala alam dan seluruh interaksi yang terjadi didalamnya. </p>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-3">
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Visi</h5>
                    <div class="card-body">
                        “Terwujudnya Layanan Pendidikan Perima Yang Mampu Mengembangkan Warga Sekolah yang Cerdas, Unggul, Inovatif dan Berbudaya”
                    </div>
                </div>
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Misi</h5>
                    <div class="card-body">
                        Menumbuhkan penghayatan terhadap Ajaran Agama yang dianutnya dan juga Budaya Bangsa sehingga menjadi Sumber Kearifan dalam Bertindak.
                        Melaksanakan pembelajaran dan bimbingan secara efektif sehingga setiap peserta didik dapat berkembang secara optimal sesuai dengan potensi yang dimiliki
                        Menerapkan managemen partisipatip dengan melibatkan seluruh warga sekolah dan stakeholder yang berorientasikan kepada kepuasan pelanggan
                        Menumbuhkan semangat keunggulan kepada peserta didik untuk meraih prestasi terbaik dalam setiap kegiatan
                    </div>
                </div>
                <!-- Categories Widget
                <div class="card my-3">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Simba</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Kiboko</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                Side Widget
                <div class="card my-4">
                    <h5 class="card-header">banner</h5>
                    <div class="card-body">
                        <img class="card-img-top" src="https://2.bp.blogspot.com/-vvG5hMTFOro/W6RaoxdAikI/AAAAAAAAK1k/jezYdP7fvfYvt15Jv8a0agrGQE2lMU8YgCKgBGAs/s1600/MASAI-2.jpg" alt="Card image cap">
                    </div>
                </div> -->
            </div>      
        </div>
    </div>
<!-- footer Menu-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-4 col-sm-4">
                <div class="footer_dv">
                    <img class="img-responsive" src="../image/logo.png" alt="about">
                    <p>SMA ini mempunyai sejarah yang agak unik, karena gedungnya berdiri paling lama tapi termasuk SMA yang relatif masih muda. Berdirinya gedung SMA Tulungagung seperti <a class="link-putih" href="about.php">Selengkapnya...</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-4">
                <div class="footer_dv">
                    <h4><center>Sambutan Kepala Sekolah</h4>
                    <div class="line-dash"></div>
                    <ul>
                        <li><a class="a-font"><center>Assalamu’alaikum Wr. Wb
                            Kami Sebagai Institusi Pendidikan Berkomitmen dan berdedikasi Sangat Kuat untuk memberikan pendidikan yang terbaik bagi siswa dan memberikan sarana terbaik untuk pembelajaran siswa Saya Mengucapkan selamat dan menyambut baik atas diluncurkannya website resmi SMARIDUTA.
                            Website ini telah mengalami penyempurnaan dari website yang pernah diluncurkan sebelumnya, hal ini merupakan bukti nyata bahwa seluruh Civitas Akademika SMARIDUTA senantiasa siap dalam mengikuti perkembangan Ilmu pengetahuan dan Teknologi khususnya dalam bidang Teknologi Informasi dan Komunikasi.
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-4">
                <div class="footer_dv">
                    <div>
                        <h4 class="widget-title"><center>Follow us</h4>
                        <ul class="social-nav">
                            <li><a href="#" target="_blank" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li> 
                            <li><a href="#" target="_blank" title="Youtube" rel="nofollow" class="youtube"><i class="fa fa-youtube"></i></a></li>      
                        </ul>
                        <h4 class="widget-title"><center>Contact us</h4>
                            <li class="link-putih"><a href="" tittle="CallUs" class="waves-effect waves-dark"><i class="fa fa-phone"></i></a>  +62355 321 381</li>
                            <li class="link-putih"><a href="" tittle="Home" class="waves-effect waves-dark"><i class="fa fa-home"></i></a>  Kedungwaru, Tulungagung</li>
                            <li class="link-putih"><a href="" tittle="Envelope" class="waves-effect waves-dark"><i class="fa fa-envelope-o"></i></a>  duniedun@gmail.com</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>©2018 Laduni Estu Syalwa</footer>

<!-- LOGIN MODAL -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="">Login</h5>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan NISN Anda" required></br>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Anda" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="login" class="btn btn-primary do-login" onClick="doLogin()">Login</button>
            </div>
            </form>
        </div>
    </div>
</div>
