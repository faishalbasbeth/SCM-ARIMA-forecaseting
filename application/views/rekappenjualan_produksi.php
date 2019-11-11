<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>PTPN XI PG SEMBORO</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <img src="<?php echo base_url() ?>assets/images/ptpnxi1.png" alt="tambah surat" height="40px" align="left"/><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PTPN XI PG SEMBORO</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href=""><?php echo $this->session->userdata("nama"); ?></a>
        </li>
      </ul>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url('c_signin/logout')?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Menu/menu_produksi";?>">
                  Dashboard
                  <img src="<?php echo base_url() ?>assets/images/dashboard.png" alt="tambah surat" height="30px" align="left"/>
                </a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Produksi/produksi";?>">
                  <img src="<?php echo base_url() ?>assets/images/produksi.png" alt="tambah surat" height="30px" align="left"/>
                  Produksi
                </a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Penjualan/penjualan";?>">
                  <img src="<?php echo base_url() ?>assets/images/penjualan.png" alt="tambah surat" height="30px" align="left"/>
                  Penjualan
                </a>
              </li>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Produksi/rekap_produksi";?>">
                  <img src="<?php echo base_url() ?>assets/images/rekap.png" alt="tambah surat" height="30px" align="left"/>
                  Rekap Produksi
                </a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url()."index.php/C_Penjualan/rekap_penjualan";?>">
                  <img src="<?php echo base_url() ?>assets/images/rekap.png" alt="tambah surat" height="30px" align="left"/>
                  Rekap Penjualan
                </a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Tebu/totaltebu_produksi";?>">
                  <img src="<?php echo base_url() ?>assets/images/rekap.png" alt="tambah surat" height="30px" align="left"/>
                  Total Tebu
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

          <h2>Data Rekap Penjualan</h2>
          <br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th style="text-align: center;">No</th>
                  <th style="text-align: center;">Tahun</th>
                  <th style="text-align: center;">Produksi / Ton</th>
                  <th style="text-align: center;">Total Berat / Ton</th>
                  <th style="text-align: center;">Sisa</th>
                </tr>
              </thead>

              <?php
              $no = 1;
              foreach ($penjualan as $db) {
                ?>

              <tbody>
                <tr>
                  <td style="text-align: center;"><?php echo $no++ ?></td>
                  <td style="text-align: center;"><?php echo $db->tahun ?></td>
                  <td style="text-align: center;"><?php echo $db->produksi ?></td>
                  <td style="text-align: center;"><?php echo $db->total_berat ?></td>
                  <td style="text-align: center;"><?php echo $db->sisa ?></td>
                </tr>

                <?php } ?>

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url() ?>assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url() ?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  </body>
</html>
