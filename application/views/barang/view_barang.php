<div class="page-pretitle">
    Aplikasi Penjualan
 </div>
 <h2 class="page-title"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
    Data Barang
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <a href="#" class="btn btn-primary mb-3" id="tambahbarang">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
  Tambah Data
</a>
<div class="mb-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tabelbarang">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>BERAT BARANG</th>
                            <th>SATUAN</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($barang as $b) { ?>

                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $b->kode_barang; ?></td>
                            <td><?php echo $b->nama_barang; ?></td>
                            <td><?php echo $b->berat_barang; ?></td>
                            <td><?php echo $b->satuan; ?></td>
                            <td>
                                <a href="#" data-kodebarang="<?php echo $b->kode_barang; ?>" class="btn btn-sm btn-primary edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg></a>
                                <a href="#" data-href="<?php echo base_url(); ?>barang/hapusbarang/<?php echo $b->kode_barang; ?>" class="btn btn-sm btn-danger hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="3" y1="3" x2="21" y2="21" /><path d="M4 7h3m4 0h9" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="14" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l.077 -.923" /><line x1="18.384" y1="14.373" x2="19" y2="7" /><path d="M9 5v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></a>
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
<div class="modal modal-blur fade" id="modalbarang" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Input Barang</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadforminputbarang"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-blur fade" id="modaleditbarang" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Barang</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadformeditbarang"></div>
          </div>
        </div>
      </div>
    </div>
<div class="modal modal-blur fade" id="modalhapusbarang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah Kamu Yakin?</div>
                <div>Ini Akan Menghapus Data Anda!!!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                <a href="#" id="hapusbarang" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#tambahbarang").click(function() {
        $("#modalbarang").modal("show");
        $("#loadforminputbarang").load("<?php echo base_url(); ?>barang/inputbarang");
        });

        $(".edit").click(function() {
        var kodebarang = $(this).attr("data-kodebarang");
        $("#modaleditbarang").modal("show");
        $("#loadformeditbarang").load("<?php echo base_url(); ?>barang/editbarang/" + kodebarang);
        });

        $(".hapus").click(function() {
        var href = $(this).attr("data-href");
        $("#modalhapusbarang").modal("show");
        $("#hapusbarang").attr("href", href);
        });
        $('#tabelbarang').DataTable();
    });
</script>