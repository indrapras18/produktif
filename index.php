<?php 
ob_start();
include 'koneksi.php'; 

session_start();
if (!isset($_SESSION['username'])) header("location:login.php");
if ($_SESSION['username'] == "admin") {
  header("location:admin.php");
}

?>
<!DOCTYPE html>
<html>
<style type="text/css">
  #video{

    padding: 30px;
    margin-top: 60px;
  }
</style>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICONIC SITUBONDO.com</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="#" class="navbar-brand navbar-link"><img src="assets/img/logo.png"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="#home">HOME</a></li>
          <li role="presentation"><a href="#news">NEWS</a></li>
          <li role="presentation"><a href="#gallery">GALLERY</a></li>
          <li role="presentation"><a href="#about">ABOUT</a></li>
          <li><a href="logout.php">LOG OUT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
      <p>Hal hal yang dapat menjadi refrensi tujuan anda dalam mncari destinasi wisata.</p>
     <marquee> <h1>ICONIC SITUBONDO</h1></marquee>
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>The Culture of Situbondo</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-map-marker"></i>
            <h3>STRATEGIC</h3>
            <p class="text-justify"><strong>Kabupaten Situbondo </strong>merupakan salah satu Kabupaten di Jawa Timur yang letaknya berada di ujung timur Pulau Jawa bagian utara dengan posisi antara 7°35′ – 7°44′ Lintang Selatan dan 113°30′ - 114°42′ Bujur Timur Letak Kabupaten Situbondo di sebelah utara berbatasan dengan Selat Madura, sebelah timur berbatasan dengan Selat Bali, sebelah selatan dengan Kabupaten Bondowoso dan Kabupaten Banyuwangi serta sebelah barat berbatasan dengan Kabupaten Probolinggo.</p>
          </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-tree-conifer"></i>
            <h3>CLIMATE</h3>
            <p class="text-justify"><strong>Temperatur</strong> rata – rata di wilayah Situbondo berkisar 24,7° C – 27,9° C dengan rata–rata curah hujan antara 994 mm – 1.503 mm per tahunnya sehingga daerah ini menurut Klasifikasi Iklim Schmidt dan Fergusson tergolong daerah kering. Kabupaten Situbondo berada pada ketinggian antara 0 – 1.250 m di atas permukaan laut.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-camera"></i>
            <h3>EXOTIC</h3>
            <p class="text-justify"><strong>Destinasi</strong> Eksotik di Taman Nasional Baluran. Tak salah jika sebutannya adalah "Little Africa", hamparan padang sabana yang membentang luas diantara Kabupaten Situbondo & Banyuwangi ini menyimpan reputasi bak benua hitam yang tersohor itu.

.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container atas -->

  <!-- container bawah -->
  <div class="container bawah">
    <h1>The Culture of Indonesia</h1>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/1.jpg" width="300px">
        <h3>STRATEGIC</h3>
        <p class="text-center"><strong>Kabupaten Situbondo</strong> merupakan salah satu Kabupaten di Jawa Timur yang letaknya berada di ujung timur Pulau Jawa bagian utara dengan posisi antara 7°35′ – 7°44′ Lintang Selatan dan 113°30′ - 114°42′.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/2.jpg" width="300px">
        <h3>CLIMATE</h3>
        <p class="text-center"><strong>Temperatur</strong> rata – rata di wilayah Situbondo berkisar 24,7° C – 27,9° C.</p>
      </div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/3.jpg" width="300px">
        <h3>EXOTIC</h3>
        <p class="text-center"><strong>Destinasi</strong> Eksotik di Taman Nasional Baluran. Tak salah jika sebutannya adalah "Little Africa".</p>
      </div>
    </div>
  </div>
  <!-- container bawah -->

  <!-- container news -->

  <div id="news">
    <center><h1>News</h1></center>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/1.jpg">
          <div class="caption">
            <h3>Picture 1</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/6.jpg">
          <div class="caption">
            <h3>Picture 2</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/3.jpg">
          <div class="caption">
            <h3>Picture 3</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/4.jpg">
          <div class="caption">
            <h3>Picture 4</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus...</p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container news -->

  <!-- gallery -->
  <div id="gallery">
    <div class="container">
      <h1>Gallery</h1>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="satu"><img class="img-responsive" src="assets/img/3.jpg" width="3000px"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="assets/img/2.jpg" width="300px"></div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu"><img class="img-responsive" src="assets/img/7.jpg" width="300px"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="dua"><img class="img-responsive" src="assets/img/5.jpg" width="600px"></div>
      </div>
    </div>
  </div>
  <!-- gallery -->

<!-- video -->
   <div id="video">
    <div class="container">
    <video autoplay width="1100" height="300">
      <source src="assets/video/jaya.mp4" type="video/mp4">
    </video>
  </div>
  </div>
<!-- video -->

  <!-- about -->
  <form method="POST">
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="assets/img/logoo.png" width="180px"></h1>
        <h2>Tujuan</h2>
        <p>Disini kami akan memperkenalkan kepada kalian semua tentang keindahan alam dan destinasi wisata yang ada di kabupaten Situbondo</p>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="input-group input-group-lg">
            <input type="text" name="nama" class="form-control" placeholder="nama">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="input-group input-group-lg">
            <input type="email" name="email" class="form-control" placeholder="email" required>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="input-group input-group-lg">
            <p><textarea type="text" name="komentar" class="komentar"></textarea></p>
            <div class="input-group-btn">
              <button class="btn btn-primary" name="btn" type="submit">kirim</button>
            </div>
          </div>
        </div>
    </div>
  </div>
  </form>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">iCONIC</h5>
    </div>
  </div>
  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

  <style type="text/css">
    html{
       scroll-behavior: smooth;
    }
    textarea{
      color: black;
      width:500px;
    }
    button{
      margin-top:-15px;
    }
  </style>
</body>

</html>
<?php
if (isset($_POST['btn'])){
$sql = mysqli_query($koneksi,"INSERT INTO situbondo VALUES('','$_POST[nama]',sha1('$_POST[email]'),'$_POST[komentar]')");
}
  ?>
<?php 
mysqli_close($koneksi);
ob_end_flush();
 ?>