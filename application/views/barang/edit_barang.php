<form action="<?php echo base_url() ?>barang/updatebarang" class="formBarang" method="POST">
<div class="form-group mb-3">
    <input type="text" readonly value="<?php echo $barang['kode_barang']; ?>" class="form-control" name="kodebarang" placeholder="Masukkan Kode Barang">
</div>
<div class="form-group mb-3">
    <input type="text" value="<?php echo $barang['nama_barang']; ?>" class="form-control" name="namabarang" placeholder="Masukkan Nama Barang">
</div>
<div class="form-group mb-3">
    <input type="text" value="<?php echo $barang['berat_barang']; ?>" class="form-control" name="beratbarang" placeholder="Masukkan Berat Barang">
</div>
<div class="form-group mb-3">
    <select name="satuan" class="form-select">
        <option value="">Pilih Satuan</option>
        <option <?php if ($barang['satuan'] == "pcs") {
            echo "selected";
        } ?> value="pcs">pcs</option>
        <option <?php if ($barang['satuan'] == "unit") {
            echo "selected";
        } ?> value="unit">unit</option>
    </select>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary w-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
    <polyline points="7 9 12 4 17 9" /><line x1="12" y1="4" x2="12" y2="16" /></svg>
    Edit
</button>
</div>
</form>

<script>
    $(function() {
        $('.formBarang').bootstrapValidator({
      fields: {
        kodebarang: {
          message: 'Kode Barang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Kode Barang Harus Diisi !'
            }
          }
        },
        namabarang: {
          message: 'Nama Barang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Nama Barang Harus Diisi !'
            }
          }
        },
        satuan: {
          message: 'Satuan Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Satuan Harus Diisi !'
            }
          }
        },
      }
    });
    });
</script>