<div class="page-pretitle">
    Aplikasi Penjualan
 </div>
    <h2 class="page-title">
         Dashboard
     </h2>
    <div class="alert alert-success" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" class="icon mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
      <circle cx="12" cy="7" r="4" />
      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
      Selamat Datang <b><?php echo $this->session->userdata('nama_lengkap'); ?></b> Sebagai <b><?php echo ucwords($this->session->userdata('level')); ?></b>
    </div>
<div class="row">
<div class="col-md-6 col-xl-3">
    <div class="card card-sm">
        <div class="card-body d-flex align-items-center">
            <span class="bg-red text-white avatar mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="7" r="4" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                </span>
                <div class="mr-3">
                <div class="font-weight-medium">
                      <?php echo $jmlpelanggan; ?> Pelanggan
                </div>
                <div class="text-muted">Data Pelanggan</div>
              </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
           <div class="card-body d-flex align-items-center">
              <span class="bg-blue text-white avatar mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="19" r="2" /><circle cx="17" cy="19" r="2" />
              <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" /></svg>
              </span>
                  <div class="mr-3">
                    <div class="font-weight-medium">
                      <?php echo $jmlpenjualan; ?> Transaksi
                    </div>
                   <div class="text-muted">Transaksi Hari Ini</div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
           <div class="card-body d-flex align-items-center">
              <span class="bg-orange text-white avatar mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
                  <div class="mr-3">
                    <div class="font-weight-medium">
                      <?php echo $jmlcabang; ?> Cabang
                    </div>
                   <div class="text-muted">Jumlah Cabang</div>
              </div>
            </div>
          </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card card-sm">
           <div class="card-body d-flex align-items-center">
              <span class="bg-green text-white avatar mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M17.2 7a6 7 0 1 0 0 10" /><path d="M13 10h-8m0 4h8" /></svg>
              </span>
                  <div class="mr-3">
                    <div class="font-weight-medium">
                      Rp <?php echo number_format($jmlbayar['totalbayar'], '0', '', '.'); ?>
                    </div>
                   <div class="text-muted">Pendapatan Hari Ini</div>
              </div>
            </div>
          </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Grafik Penjualan</h3>
            </div>
            <div class="card-body">
              <?php foreach ($rekappenjualan as $d) {
                $bulan[] = $d->namabulan;
                $totalpenjualan[] = $d->totalpenjualan;
              }
              ?>
                <div id="chart-tasks-overview">"</div>
            </div>
        </div>
    </div>
</div>
<script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
      	window.ApexCharts && (new ApexCharts(document.getElementById('chart-tasks-overview'), {
      		chart: {
      			type: "bar",
      			fontFamily: 'inherit',
      			height: 320,
      			parentHeightOffset: 0,
      			toolbar: {
      				show: false,
      			},
      			animations: {
      				enabled: false
      			},
      		},
      		plotOptions: {
      			bar: {
      				columnWidth: '50%',
      			}
      		},
      		dataLabels: {
      			enabled: false,
      		},
      		fill: {
      			opacity: 1,
      		},
      		series: [{
      			name: "Rp",
      			data: <?php echo json_encode($totalpenjualan); ?>,
      		}],
      		grid: {
      			padding: {
      				top: -20,
      				right: 0,
      				left: -4,
      				bottom: -4
      			},
      			strokeDashArray: 4,
      		},
      		xaxis: {
      			labels: {
      				padding: 0
      			},
      			tooltip: {
      				enabled: false
      			},
      			axisBorder: {
      				show: false,
      			},
      			categories:<?php echo json_encode($bulan); ?>,
      		},
      		yaxis: {
      			labels: {
      				padding: 4
      			},
      		},
      		colors: ["#206bc4"],
      		legend: {
      			show: false,
      		},
      	})).render();
      });
      // @formatter:on
    </script>