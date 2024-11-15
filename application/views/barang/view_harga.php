<div class="page-pretitle">
    Aplikasi Penjualan
 </div>
 <h2 class="page-title"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" /><path d="M12 6v2m0 8v2" /></svg>
    Data Harga
</h2>
<div class="row mt-3">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <?php if($this->session->userdata('level')== "administrator"){ ?>
            <a href="#" class="btn btn-primary mb-3" id="tambahharga">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
  Tambah Data
</a>
<?php } ?>
<div class="mb-3"><?php echo $this->session->flashdata('msg'); ?></div>
                <table class="table table-striped table-bordered" id="tabelharga">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE HARGA</th>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>BERAT BARANG</th>
                            <th>SATUAN</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th>KODE CABANG</th>
                            <?php if($this->session->userdata('level')== "administrator"){ ?>
                            <th>AKSI</th>
                            <?php } ?>
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
                            <td><?php echo $h->berat_barang; ?></td>
                            <td><?php echo $h->satuan; ?></td>
                            <td align='right'><?php echo number_format($h->harga, '0', '', '.'); ?></td>
                            <td><?php echo $h->stok; ?></td>
                            <td><?php echo $h->kode_cabang; ?></td>
                            <?php if($this->session->userdata('level')== "administrator"){ ?>
                            <td>
                                <a href="#" data-kodeharga="<?php echo $h->kode_harga; ?>" class="btn btn-sm btn-primary edit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" /><line x1="13.5" y1="6.5" x2="17.5" y2="10.5" /></svg></a>
                                <a href="#" data-href="<?php echo base_url(); ?>barang/hapusharga/<?php echo $h->kode_harga; ?>" class="btn btn-sm btn-danger hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="3" y1="3" x2="21" y2="21" /><path d="M4 7h3m4 0h9" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="14" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l.077 -.923" /><line x1="18.384" y1="14.373" x2="19" y2="7" /><path d="M9 5v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></a>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php 
                        $no++; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modalharga" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Input Harga</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadforminputharga"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal-blur fade" id="modaleditharga" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Harga</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
         <div id="loadformeditharga"></div>
          </div>
        </div>
      </div>
    </div>
<div class="modal modal-blur fade" id="modalhapusharga" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Apakah Kamu Yakin?</div>
                <div>Ini Akan Menghapus Data Anda!!!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                <a href="#" id="hapusharga" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#tambahharga").click(function() {
        $("#modalharga").modal("show");
        $("#loadforminputharga").load("<?php echo base_url(); ?>barang/inputharga");
        });

        $(".edit").click(function() {
        var kodeharga = $(this).attr("data-kodeharga");
        $("#modaleditharga").modal("show");
        $("#loadformeditharga").load("<?php echo base_url(); ?>barang/editharga/" + kodeharga);
        });

        $(".hapus").click(function() {
        var href = $(this).attr("data-href");
        $("#modalhapusharga").modal("show");
        $("#hapusharga").attr("href", href);
        });
        $('#tabelharga').DataTable();
    });
</script>