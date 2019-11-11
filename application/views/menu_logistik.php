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
                <a class="nav-link active" href="<?php echo base_url()."index.php/C_Menu/menu_logistik";?>">
                  Dashboard
                  <img src="<?php echo base_url() ?>assets/images/dashboard.png" alt="tambah surat" height="30px" align="left"/>
                </a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Memberpetani/member_petani";?>">
                  <img src="<?php echo base_url() ?>assets/images/member.png" alt="tambah surat" height="30px" align="left"/>
                  Member Petani
                </a>      
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Tebu/tebu";?>">
                  <img src="<?php echo base_url() ?>assets/images/tebu.png" alt="tambah surat" height="30px" align="left"/>
                  Tebu
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
                <a class="nav-link" href="<?php echo base_url()."index.php/C_Tebu/total_tebu";?>">
                  <img src="<?php echo base_url() ?>assets/images/rekap.png" alt="tambah surat" height="30px" align="left"/>
                  Total Tebu
                </a>      
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Grafik Total Tebu</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
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
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [<?php foreach ($tebu as $db) { ?>
                      <?php echo $db->tahun.','; ?>
                      <?php } ?>],
          datasets: [{
            label: 'Target Lahan',
            data: [<?php foreach ($tebu as $db) { ?>
                      <?php echo $db->lahan.','; ?>
                      <?php } ?>],
            lineTension: 0,
            backgroundColor: 'orange',
            borderColor: 'orange',
            borderWidth: 4,
            pointBackgroundColor: 'orange'
          },{
            label: 'Total Lahan',
            data: [<?php foreach ($tebu as $db) { ?>
                      <?php echo $db->total_lahan.','; ?>
                      <?php } ?>],
            lineTension: 0,
            backgroundColor: 'blue',
            borderColor: 'blue',
            borderWidth: 4,
            pointBackgroundColor: 'blue'
          },{
            label: 'Target Berat',
            data: [<?php foreach ($tebu as $db) { ?>
                      <?php echo $db->berat.','; ?>
                      <?php } ?>],
            lineTension: 0,
            backgroundColor: 'purple',
            borderColor: 'purple',
            borderWidth: 4,
            pointBackgroundColor: 'purple'
          },{
            label: 'Total Berat Tebu',
            data: [<?php foreach ($tebu as $db) { ?>
                      <?php echo $db->total_berat.','; ?>
                      <?php } ?>],
            lineTension: 0,
            backgroundColor: 'red',
            borderColor: 'red',
            borderWidth: 4,
            pointBackgroundColor: 'red'
          },]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
