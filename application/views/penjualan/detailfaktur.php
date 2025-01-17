<h2 class="page-title mb-3">
    Data Faktur
</h2>

    <input type="hidden" id="cekBarang">
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
            <table class=" table table-bordered table-striped">
                <tr>
                    <th>No Faktur</th>
                    <th><?php echo $penjualan['no_faktur']; ?></th>
                </tr>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <th><?php echo $penjualan['tgltransaksi']; ?></th>
                </tr>
                <tr>
                    <th>Kode Pelanggan</th>
                    <th><?php echo $penjualan['kode_pelanggan']; ?></th>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th><?php echo $penjualan['nama_pelanggan']; ?></th>
                </tr>
                <tr>
                    <th>Jenis Transaksi</th>
                    <th><?php echo ucwords($penjualan['jenistransaksi']); ?></th>
                </tr>
                <tr>
                    <?php if ($penjualan['jenistransaksi'] =="kredit") { ?>
                    <th>Jatuh Tempo</th>
                    <th><?php echo $penjualan['jatuhtempo']; ?></th>
                </tr>
                    <?php } ?>
            </table>
            </div>
        </div>
    </div>
        <div class="col-md-7">
        <div class="card card-sm">
        <div class="card">
    <div class="card-header">
        <h3 class="card-title">PT Robby Toedjo Hardjoe</h3>
  </div>
  <div class="card-body d-flex align-items-center">
              <span class="bg-blue text-white avatar mr-3" style="width: 5rem; height: 5rem;">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
              </span>
                  <div class="mr-3">
                      <h2 id="totalpenjualan" style="font-size: 3.5rem">0</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Barang</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE BARANG</th>
                                <th>NAMA BARANG</th>
                                <th>BERAT BARANG</th>
                                <th>HARGA</th>
                                <th>QTY</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; 
                            $grandtotal = 0;
                            foreach($detail as $d) {
                                $totalharga = $d->harga * $d->qty; 
                                $grandtotal = $grandtotal + $totalharga;
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $d->kode_barang; ?></td>
                                    <td><?php echo $d->nama_barang; ?></td>
                                    <td><?php echo $d->berat; ?> Kg</td>
                                    <td align="right"><?php echo number_format($d->harga, '0', '', '.'); ?></td>
                                    <td><?php echo $d->qty; ?></td>
                                    <td align="right"><?php echo number_format($totalharga, '0', '', '.'); ?></td>
                                </tr>
                            <?php 
                                $no++;
                            } ?>    
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="6"> GRANDTOTAL</th>
                                <th style="text-align:right" id="grandtotal"><?php echo number_format($grandtotal, '0', '', '.'); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<div class="row mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">histori Bayar</h4>
        </div>
        <div class="card-body">
            <a href="#" class="btn btn-success mb-3" id="bayar"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="7" y="9" width="14" height="10" rx="2" /><circle cx="14" cy="14" r="2" /><path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" /></svg>
            Bayar</a>
            <div><?php echo $this->session->flashdata('msg'); ?></div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Bukti</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah Bayar</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $totalbayar = 0;
                    $no = 1;
                    foreach ($bayar as $b) { 
                    $totalbayar = $totalbayar + $b->bayar;
                    ?>
                        
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $b->nobukti; ?></td>
                            <td><?php echo $b->tglbayar; ?></td>
                            <td align="right"><?php echo number_format($b->bayar, '0', '', '.'); ?></td>
                            <td>
                                <a href="#" data-href="<?php echo base_url(); ?>penjualan/hapusbayar/<?php echo $b->nobukti; ?>/<?php echo $penjualan['no_faktur']; ?>"class="btn btn-danger btn-sm hapus"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                            </a>
                            </td>
                        </tr>

                    <?php $no++;
                    } ?>    
                </tbody>
            </table>
        </div>
    </div> 
</div>       
<div class="modal modal-blur fade" id="modalbayar" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Input Bayar</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadforminputbayar"></div>
          </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapusbayar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah Kamu Yakin?</div>
                <div>Ini Akan Menghapus Data Anda!!!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                <a href="#" id="hapusbayar" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){

        var grandtotal = $("#grandtotal").text();
        $("#totalpenjualan").text(grandtotal);

        $(".hapus").click(function() {
        var href = $(this).attr("data-href");
        $("#modalhapusbayar").modal("show");
        $("#hapusbayar").attr("href", href);
        });
        $("#bayar").click(function() {
            var no_faktur = "<?php echo $penjualan['no_faktur']; ?>";
            var grandtotal = "<?php echo $grandtotal; ?>";
            var totalbayar = " <?php echo $totalbayar; ?>";
            $("#modalbayar").modal("show");
            $.ajax({
                type : 'POST',
                url : '<?php echo base_url(); ?>penjualan/inputbayar',
                data : {
                    no_faktur : no_faktur,
                    grandtotal : grandtotal,
                    totalbayar : totalbayar
                },
                cache: false,
                success: function(respond){
                    $("#loadforminputbayar").html(respond);
                }
            });
        });
    });
</script>