<div><?php echo $this->session->flashdata('msg'); ?></div>
<form id="formPenjualan" method="POST" action="<?php echo base_url(); ?>penjualan/simpanpenjualan">
    <input type="hidden" id="cekBarang">
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7v-1a2 2 0 0 1 2 -2h2" /><path d="M4 17v1a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v1" /><path d="M16 20h2a2 2 0 0 0 2 -2v-1" /><rect x="5" y="11" width="1" height="2" /><line x1="10" y1="11" x2="10" y2="13" /><rect x="14" y="11" width="1" height="2" /><line x1="19" y1="11" x2="19" y2="13" /></svg>
              </span>
            <input type="text" readonly value="<?php echo $no_faktur; ?>" class="form-control" name="no_faktur" id="no_faktur"placeholder="No Faktur">
            </div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
              </span>
            <input type="text"class="form-control" value="<?php echo date("Y-m-d"); ?>" name="tgltransaksi" id="tgltransaksi" placeholder="Tanggal Transaksi">
            </div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
              </span>
              <input type="hidden" name="kode_pelanggan" id="kode_pelanggan">
            <input type="text" readonly class="form-control" name="namapelanggan" id="namapelanggan" placeholder="Pelanggan">
            </div>
            <div class="mb-3">
                <select name="jenistransaksi" id="jenistransaksi" class="form-select">
                    <option value="">Pilih Jenis Transaksi</option>
                    <option value="tunai">Tunai</option>
                    <option value="kredit">Kredit</option>
                </select>
            </div>
            <div class="input-icon mb-3" id="jt">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
              </span>
            <input type="text" readonly class="form-control" name="jatuhtempo" id="jatuhtempo" placeholder="Jatuh Tempo">
            </div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
              </span>
              <input type="hidden" value="<?php echo $this->session->userdata('id_user'); ?>" name="id_user" id="id_user">
            <input type="text" readonly value="<?php echo $this->session->userdata('id_user') . "-" .$this->session->userdata('nama_lengkap'); ?>" class="form-control" name="username" id="username" placeholder="Kasir">
            </div>
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
                    <div class="col-md-2">
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="6" rx="1" /><line x1="7" y1="17" x2="7" y2="17.01" /><rect x="14" y="4" width="6" height="6" rx="1" /><line x1="7" y1="7" x2="7" y2="7.01" /><rect x="4" y="14" width="6" height="6" rx="1" /><line x1="17" y1="7" x2="17" y2="7.01" /><line x1="14" y1="14" x2="17" y2="14" /><line x1="20" y1="14" x2="20" y2="14.01" /><line x1="14" y1="14" x2="14" y2="17" /><line x1="14" y1="20" x2="17" y2="20" /><line x1="17" y1="17" x2="20" y2="17" /><line x1="20" y1="17" x2="20" y2="20" /></svg>
                            </span>
                            <input type="text" readonly class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="6" rx="1" /><line x1="7" y1="17" x2="7" y2="17.01" /><rect x="14" y="4" width="6" height="6" rx="1" /><line x1="7" y1="7" x2="7" y2="7.01" /><rect x="4" y="14" width="6" height="6" rx="1" /><line x1="17" y1="7" x2="17" y2="7.01" /><line x1="14" y1="14" x2="17" y2="14" /><line x1="20" y1="14" x2="20" y2="14.01" /><line x1="14" y1="14" x2="14" y2="17" /><line x1="14" y1="20" x2="17" y2="20" /><line x1="17" y1="17" x2="20" y2="17" /><line x1="20" y1="17" x2="20" y2="20" /></svg>
                            </span>
                            <input type="text" readonly class="form-control" name="kode_harga" id="kode_harga" placeholder="Kode Harga">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /></svg>
                            </span>
                            <input type="text" readonly class="form-control" name="nama_barang" id="nama_barang"placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                            </span>
                            <input type="text" readonly class="form-control" style="text-align:right" name="harga" id="harga"placeholder="Harga">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect width="6" height="6" x="9" y="5" rx="1" /><line x1="4" y1="7" x2="5" y2="7" /><line x1="4" y1="11" x2="5" y2="11" /><line x1="19" y1="7" x2="20" y2="7" /><line x1="19" y1="11" x2="20" y2="11" /><line x1="4" y1="15" x2="20" y2="15" /><line x1="4" y1="19" x2="20" y2="19" /></svg>
                            </span>
                            <input type="text"class="form-control" name="qty" id="qty" placeholder="Qty">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-primary" id="tambahbarang">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                        Tambah
                        </a>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE BARANG</th>
                                <th>KODE HARGA</th>
                                <th>NAMA BARANG</th>
                                <th>BERAT BARANG</th>
                                <th>HARGA</th>
                                <th>QTY</th>
                                <th>TOTAL</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody id="loaddatabarang"> 

                        </tbody>
                        
                    </table>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary w100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                Simpan
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<div class="modal modal-blur fade" id="modalpelanggan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Data Pelanggan</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <table class="table table-striped table-bordered" id="tabelpelanggan">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE PELANGGAN</th>
                            <th>NAMA PELANGGAN</th>
                            <th>ALAMAT</th>
                            <th>NO HP</th>
                            <th>CABANG</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach ($pelanggan as $p) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $p->kode_pelanggan; ?></td>
                            <td><?php echo $p->nama_pelanggan; ?></td>
                            <td><?php echo $p->alamat_pelanggan; ?></td>
                            <td><?php echo $p->no_hp; ?></td>
                            <td><?php echo $p->nama_cabang; ?></td>
                            <td>
                            <a href="#" class="btn btn-sm btn-primary pilih" data-kodepel="<?php echo $p->kode_pelanggan; ?>" data-namapel="<?php echo $p->nama_pelanggan; ?>">Pilih</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                    } ?>        
                    </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-blur fade" id="modalbarangharga" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Data Harga Barang</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <table class="table table-striped table-bordered" id="tabelharga">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE HARGA</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>SATUAN</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th>KODE CABANG</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        foreach($harga as $h) { ?>

                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $h->kode_harga; ?></td>
                            <td><?php echo $h->kode_barang; ?></td>
                            <td><?php echo $h->nama_barang; ?></td>
                            <td><?php echo $h->satuan; ?></td>
                            <td align='right'><?php echo number_format($h->harga, '0', '', '.'); ?></td>
                            <td><?php echo $h->stok; ?></td>
                            <td><?php echo $h->kode_cabang; ?></td>
                            <td>
                            <a href="#" class="btn btn-sm btn-primary pilihbarang" data-kodeharga="<?php echo $h->kode_harga; ?>" data-kodebarang="<?php echo $h->kode_barang; ?>" data-namabarang="<?php echo $h->nama_barang; ?>"
                            data-harga="<?php echo $h->harga; ?>">Pilih</a>
                            </td>
                        </tr>
                        <?php 
                        $no++; }?>
                    </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('tgltransaksi'), {});
  });
</script>
<script>
    $(function(){
        function hidejatuhtempo() {
            $("#jt").hide();
        }

        function showjt(){
            $("#jt").show();
        }

        function getJatuhtempo() {
            var tgltransaksi = $("#tgltransaksi").val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>penjualan/getJatuhtempo',
                data: {
                    tgltransaksi: tgltransaksi
                },
                cache: false,
                success: function(respond) {
                    $("#jatuhtempo").val(respond);
                }
            });
        }

        function cekBarang(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>penjualan/cekBarang',
                cache: false,
                success: function(respond) {
                    $("#cekBarang").val(respond);
                }
            });
        }

        function loaddatabarang(){
            var id_user = $("#id_user").val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>penjualan/getDatabarangtemp',
                data: {
                    id_user: id_user
                },
                cache: false,
                success: function(respond) {
                   $("#loaddatabarang").html(respond); 
                }
            });
        }

        loaddatabarang();
        cekBarang();
        getJatuhtempo();
        hidejatuhtempo();
        $("#jenistransaksi").change(function(){
            var jenistransaksi = $(this).val();
            if(jenistransaksi == "kredit"){ 
                showjt();               
            } else {
                hidejatuhtempo();
            }
        });

        $("#tgltransaksi").change(function(){
            getJatuhtempo();
        });

        

        $("#formPenjualan").submit(function(){
            var no_faktur = $("#no_faktur").val();
            var tgltransaksi = $("#tgltransaksi").val();
            var kode_pelanggan = $("#kode_pelanggan").val();
            var jenistransaksi = $("#jenistransaksi").val();

            if (no_faktur == ""){
                swal("Peringatan!", "No Faktur Harus Diisi!", "warning");
                return false;
            } else if (tgltransaksi == ""){
                swal("Peringatan!", "Tanggal Transaksi Harus Diisi!", "warning");
                return false;
            } else if (kode_pelanggan == ""){
                swal("Peringatan!", "Pelanggan Harus Diisi!", "warning");
                return false;
            } else if (jenistransaksi == ""){
                swal("Peringatan!", "Jenis Transaksi Harus Diisi!", "warning");
                return false;
            } else {
                return true;
            }
        });

        $("#namapelanggan").click(function(){
            $("#modalpelanggan").modal("show");
        });

        $("#tabelpelanggan").DataTable();

        $(".pilih").click(function(){
            var kodepelanggan = $(this).attr("data-kodepel");
            var namapelanggan = $(this).attr("data-namapel");
            $("#kode_pelanggan").val(kodepelanggan);
            $("#namapelanggan").val(namapelanggan);
            $("#modalpelanggan").modal("hide");
        });

        $("#kode_barang").click(function(){
            $("#modalbarangharga").modal("show");
        });

        $("#tabelharga").DataTable();

        $(".pilihbarang").click(function(){
            var kodebarang = $(this).attr("data-kodebarang");
            var kodeharga = $(this).attr("data-kodeharga");
            var namabarang = $(this).attr("data-namabarang");
            var harga = $(this).attr("data-harga");
            $("#kode_barang").val(kodebarang);
            $("#kode_harga").val(kodeharga);
            $("#nama_barang").val(namabarang);
            $("#harga").val(harga);
            $("#modalbarangharga").modal("hide");
        });


        $("#tambahbarang").click(function(){
            var kode_barang = $("#kode_barang").val();
            var kode_harga = $("#kode_harga").val();
            var harga = $("#harga").val();
            var qty = $("#qty").val();
            var id_user = $("#id_user").val();

            if(kode_barang == "") {
                swal("Peringatan!", "Kode Barang Harus Diisi!", "warning");
            } else if (qty == "" || qty == 0) {
                swal("Peringatan!", "Qty Harus Diisi!", "warning");
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>penjualan/simpanbarangtemp',
                    data: {
                        kode_barang: kode_barang,
                        kode_harga: kode_harga,
                        harga: harga,
                        qty: qty,
                        id_user: id_user
                    },
                    cache : false,
                    success : function(respond) {
                        if(respond == 1) {
                            swal("Peringatan!", "Data Sudah Ada!", "warning");
                        } else {
                            loaddatabarang();
                        }
                    }
                });
            }
           
        });    
    });
</script>