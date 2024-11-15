<div class="page-pretitle">
    Aplikasi Penjualan
 </div>
 <h2 class="page-title"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 7a2 2 0 0 1 2 2v12l-5 -3l-5 3v-12a2 2 0 0 1 2 -2h6z" /><path d="M9.265 4a2 2 0 0 1 1.735 -1h6a2 2 0 0 1 2 2v12l-1 -.6" /></svg>
    Data Penjualan
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <?php if($this->session->userdata('level') == "kasir") { ?>
            <a href="<?php echo base_url(); ?>penjualan/inputpenjualan" class="btn btn-primary mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                Tambah Data
            </a>
            <?php } ?>
<form action="<?php echo base_url(); ?>penjualan/index" method="POST">
<div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7v-1a2 2 0 0 1 2 -2h2" /><path d="M4 17v1a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v1" /><path d="M16 20h2a2 2 0 0 0 2 -2v-1" /><rect x="5" y="11" width="1" height="2" /><line x1="10" y1="11" x2="10" y2="13" /><rect x="14" y="11" width="1" height="2" /><line x1="19" y1="11" x2="19" y2="13" /></svg>
              </span>
            <input type="text" value="<?php echo $no_faktur; ?>" class="form-control" name="no_faktur" id="no_faktur"placeholder="No Faktur">
            </div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
              </span>
            <input type="text" value="<?php echo $namapelanggan; ?>" class="form-control" name="namapelanggan" id="namapelanggan" placeholder="Nama Pelanggan">
            </div>
        <div class="row">
            <div class="col-md-6">
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
              </span>
            <input type="date" value="<?php echo $dari; ?>" class="form-control" name="dari" id="dari" placeholder="Dari">
            </div>
            </div>
            <div class="col-md-6">
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
              </span>
            <input type="date" value="<?php echo $sampai; ?>" class="form-control" name="sampai" id="sampai" placeholder="Sampai">
            </div>
            </div>
        </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
        Cari Data
    </button>
    </div>        
</form>
<div class="mb-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr align="center">
                            <th>NO</th>
                            <th>NO FAKTUR</th>
                            <th>TANGGAL</th>
                            <th>KODE PELANGGAN</th>
                            <th>PELANGGAN</th>
                            <th>JENIS TRANSAKSI</th>
                            <th>JATUH TEMPO</th>
                            <th>TOTAL HARGA</th>
                            <th>TOTAL BAYAR</th>
                            <th>SISA BAYAR</th>
                            <th>KET</th>
                            <th>KASIR</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = $row + 1;
                            foreach($penjualan as $p){ 
                                $sisabayar = $p->totalpenjualan - $p->totalbayar;
                                if($sisabayar > 0){
                                    $ket = "Kredit";
                                    $warna = "bg-red";
                                } else {
                                    $ket = "Lunas";
                                    $warna = "bg-green";
                                }
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><a href="<?php echo base_url(); ?>penjualan/detailfaktur/<?php echo $p->no_faktur; ?>" class="badge bg-azure-lt"><?php echo $p->no_faktur; ?></a></td>
                                <td><?php echo $p->tgltransaksi; ?></td>
                                <td><?php echo $p->kode_pelanggan; ?></td>
                                <td><?php echo $p->nama_pelanggan; ?></td>
                                <td><?php echo $p->jenistransaksi; ?></td>
                                <td><?php echo $p->jatuhtempo; ?></td>
                                <td align="right"><?php echo number_format($p->totalpenjualan, '0', '', '.'); ?></td>
                                <td align="right"><?php echo number_format($p->totalbayar, '0', '', '.'); ?></td>
                                <td align="right"><?php echo number_format($p->totalpenjualan - $p->totalbayar, '0', '', '.'); ?></td>
                                <td align="center">
                                <?php if($sisabayar !=0){ ?>
                                <a href="<?php echo base_url(); ?>penjualan/detailfaktur/<?php echo $p->no_faktur; ?>" class="badge bg-cyan">Bayar</a>
                                <?php } ?>
                                <span class="badge <?php echo $warna; ?>"><?php echo $ket; ?></span></td>
                                <td><?php echo $p->nama_lengkap; ?></td>
                                <td>
                                <a href="#" class="btn btn-danger btn-sm hapus" data-href="<?php echo base_url(); ?>penjualan/hapuspenjualan/<?php echo $p->no_faktur; ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></a>
                                <a href="<?php echo base_url(); ?>penjualan/cetakpenjualan/<?php echo $p->no_faktur; ?>" target="_blank" class="btn btn-primary btn-sm"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><rect x="7" y="13" width="10" height="8" rx="2" /></svg>
                                </td>
                            </tr>
                        <?php 
                            $no++;
                            }
                        ?>
                    </tbody>
                </table>
                <div><?php echo $pagination; ?></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalhapuspenjualan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah Kamu Yakin?</div>
                <div>Ini Akan Menghapus Data Anda!!!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                <a href="#" id="hapuspenjualan" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  	flatpickr(document.getElementById('dari'), {});
    flatpickr(document.getElementById('sampai'), {});
  });
</script>
<script>
    $(function(){
        $(".hapus").click(function() {
        var href = $(this).attr("data-href");
        $("#modalhapuspenjualan").modal("show");
        $("#hapuspenjualan").attr("href", href);
        });
    });
</script> 