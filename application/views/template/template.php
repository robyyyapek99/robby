
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.14
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Aplikasi Penjualan</title>
    <!-- CSS files -->
    <link href="<?php echo base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/dist/libs/flatpickr/dist/flatpickr.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet"/>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <style>
      body {
      	display: none;
      }

      .help-block{
        color: red;
      }

      .dataTables_filter{
        margin-bottom: 15px;
      }

      .progress-bar {
      background-color: #0070ff;
}

      .markdown>table thead th, .table thead th {
        background: #232e3c;
        color: #ffffff;
      }
    </style>

	<!-- Libs JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Tabler Core -->
    <script src="<?php echo base_url(); ?>assets/dist/js/tabler.min.js"></script>
	
  </head>
  <body class="antialiased">
  <aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
      <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="." class="navbar-brand navbar-brand-autodark">
          <img src="<?php echo base_url(); ?>assets/static/robby.png" width="190" height="55">
        </a>
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="navbar-nav pt-lg-3">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>dashboard" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                </span>
                <span class="nav-link-title">
                  Home
                </span>
              </a>
            </li>
            <?php if($this->session->userdata('level') == "administrator") { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                </span>
                <span class="nav-link-title">
                  Data Master
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>cabang" >
                      Data Cabang
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>pelanggan" >
                      Data Pelanggan
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>barang" >
                      Data Barang
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>barang/harga" >
                      Data Harga
                    </a>  
                  </div>
                </div>
              </div>
            </li>
            <?php } else if($this->session->userdata('level') == "kasir") { ?>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Data Master
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">    
                        <a class="dropdown-item" href="<?php echo base_url(); ?>pelanggan" >
                          Data Pelanggan
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url(); ?>barang/harga" >
                          Data Harga
                        </a>
                      </div>                    
                    </div>
                  </div> 
                </li>
            <?php } ?>
            <?php if($this->session->userdata('level') == "administrator" || $this->session->userdata('level') == "kasir") { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-base" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                </span>
                <span class="nav-link-title">
                  Data Transaksi
                </span>
              </a>
              <div class="dropdown-menu">
                <div class="dropdown-menu-columns">
                  <div class="dropdown-menu-column">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>penjualan" >
                      Data Penjualan
                    </a>  
                  </div>
                </div>
              </div>
            </li>
            <?php } ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                </span>
                <span class="nav-link-title">
                  Data Laporan
                </span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url(); ?>penjualan/laporanpenjualan" >
                  Laporan Penjualan
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </aside>
    <div class="page">
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-fluid">
              <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
              <span class="avatar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
              <span class="badge bg-success"></span></span>
              </span>
                <div class="d-none d-xl-block pl-2">
                  <div class="text-info"><?php echo $this->session->userdata('nama_lengkap'); ?></div>
                  <div class="mt-1 small text-muted"><?php echo ucwords($this->session->userdata('level')); ?> <?php echo ucwords($this->session->userdata('kode_cabang')); ?></div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <a href="<?php echo base_url(); ?>auth/logout" class="dropdown-item"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M21 12h-13l3 -3" /><path d="M11 15l-3 -3" /></svg>
                Keluar
                </a>
                <?php if($this->session->userdata('level') == "administrator") { ?>
                <a href="<?php echo base_url(); ?>user" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                Pengaturan
                </a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </header>
    <div class="page">
      <div class="content">
        <div class="container-fluid">
            <?php echo $contents; ?>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ml-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="<?php echo base_url(); ?>assets/docs/index.html" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="<?php echo base_url(); ?>assets/license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary">Source code</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright © 2024
                    <a href="." class="link-secondary">Robby</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="<?php echo base_url(); ?>assets/changelog.html" class="link-secondary" rel="noopener">v1.0.0-winongo.25</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>