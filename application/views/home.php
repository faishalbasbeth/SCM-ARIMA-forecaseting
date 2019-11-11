<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>PTPN XI PG SEMBORO JEMBER</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img src="<?php echo base_url() ?>assets/images/ptpnxi1.png" alt="tambah surat" height="40px" align="left"/><a class="navbar-brand" href="#">PTPN XI PG SEMBORO JEMBER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          </li>
        </ul>
        <ul class="navbar-nav px-3">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()."index.php/C_Signin/signin";?>">Sign In</a>
          </li>
        </ul>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="<?php echo base_url() ?>assets/images/kantor.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Kantor Pusat</h1>
                <p>Jalan Merak No.1 Surabaya, Jawa Timur, Indonesia</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="<?php echo base_url() ?>assets/images/gupalas.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Semangat Juang Dan Komitmen Tinggi Untuk Hasil Tebu Yang Optimal</h1>
                <p>Berkomitmen Untuk Selalu Membangun Negeri Dari Semua Lini</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="<?php echo base_url() ?>assets/images/sepur.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>PTPN XI Bakti Kami Untuk Negeri</h1>
                <p>
                  Berkomitmen Untuk Selalu Menjadi Perusahaan Agribisnis Berbasis Tebu Yang Selalu Tangguh, Tumbuh Dan Terkemuka
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <?php foreach ($berita as $db) {
           ?>
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?=base_url('assets/images/'.$db->gambar)?>" style="width:150px; height:150" alt="Generic placeholder image" width="140" height="140">
            <h2><?php echo $db->judul ?></h2>
            <p><?php echo substr($db->berita, 0,200) ?></p>
            <p><a class="btn btn-secondary" href="<?php echo base_url('c_beritatampil/berita_tampil/'.$db->id_berita); ?>" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <?php } ?>
        </div><!-- /.row -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2019 Faishal Basbeth</p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url() ?>assets/js/vendor/holder.min.js"></script>
  </body>
</html>
