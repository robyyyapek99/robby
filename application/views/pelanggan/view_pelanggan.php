<div class="page-pretitle">
    Aplikasi Penjualan
 </div>
 <h2 class="page-title"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
    Data Pelanggan
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="#" class="btn btn-primary mb-3" id="tambahpelanggan">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
  Tambah Pelanggan
</a>
<div class="mb-3"><?php echo $this->session->flashdata('msg'); ?></div>
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
                            <a href="#" data-kodepelanggan="<?php echo $p->kode_pelanggan; ?>" class="btn btn-sm btn-primary edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg></a>
                                <a href="#" data-href="<?php echo base_url(); ?>pelanggan/hapuspelanggan/<?php echo $p->kode_pelanggan; ?>" class="btn btn-sm btn-danger hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="3" y1="3" x2="21" y2="21" /><path d="M4 7h3m4 0h9" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="14" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l.077 -.923" /><line x1="18.384" y1="14.373" x2="19" y2="7" /><path d="M9 5v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></a>
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
<div class="modal modal-blur fade" id="modalpelanggan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Input Pelanggan</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadforminputpelanggan"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-blur fade" id="modaleditpelanggan" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Pelanggan</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadformeditpelanggan"></div>
          </div>
        </div>
      </div>
    </div>
<div class="modal modal-blur fade" id="modalhapuspelanggan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah Kamu Yakin?</div>
                <div>Ini Akan Menghapus Data Anda!!!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                <a href="#" id="hapuspelanggan" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#tambahpelanggan").click(function() {
        $("#modalpelanggan").modal("show");
        $("#loadforminputpelanggan").load("<?php echo base_url(); ?>pelanggan/inputpelanggan");
        });

        $(".edit").click(function() {
        var kodepelanggan = $(this).attr("data-kodepelanggan");
        $("#modaleditpelanggan").modal("show");
        $("#loadformeditpelanggan").load("<?php echo base_url(); ?>pelanggan/editpelanggan/" + kodepelanggan);
        });

        $(".hapus").click(function() {
        var href = $(this).attr("data-href");
        $("#modalhapuspelanggan").modal("show");
        $("#hapuspelanggan").attr("href", href);
        });
        $('#tabelpelanggan').DataTable();
    });
</script>