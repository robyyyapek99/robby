<form action="<?php echo base_url() ?>cabang/simpancabang" class="formCabang" method="POST">
<div class="form-group mb-3">
    <input type="text" class="form-control" name="kodecabang" placeholder="Masukkan Kode Cabang">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="namacabang" placeholder="Masukkan Nama Cabang">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="alamatcabang" placeholder="Masukkan Alamat Cabang">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="telepon" placeholder="Masukkan Telepon Cabang">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
    <polyline points="7 9 12 4 17 9" /><line x1="12" y1="4" x2="12" y2="16" /></svg>Simpan</button>
</div>
</form>

<script>
    $(function() {
        $('.formCabang').bootstrapValidator({
      fields: {
        kodecabang: {
          message: 'Kode Cabang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Kode Cabang Harus Diisi !'
            }
          }
        },
        namacabang: {
          message: 'Nama Cabang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Nama Cabang Harus Diisi !'
            }
          }
        },
        alamatcabang: {
          message: 'Alamat Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Alamat Harus Diisi !'
            }
          }
        },
        telepon: {
          message: 'Telepon Cabang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Telepon Cabang Harus Diisi !'
            }
          }
        },
      }
    });
    });
</script>