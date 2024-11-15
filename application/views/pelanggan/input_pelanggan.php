<form action="<?php echo base_url() ?>pelanggan/simpanpelanggan" class="formPelanggan" method="POST">
<div class="form-group mb-3">
    <input type="text" class="form-control" name="kodepelanggan" placeholder="Masukkan Kode Pelanggan">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="namapelanggan" placeholder="Masukkan Nama Pelanggan">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="alamatpelanggan" placeholder="Masukkan Alamat">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="nohp" placeholder="Masukkan No Hp">
</div>
<?php if ($this->session->userdata('kode_cabang') == "ADM") { ?>
<div class="form-group mb-3">
    <select name="cabang" class="form-select">
        <option value="">Pilih Cabang</option>
        <?php foreach ($cabang as $c) { ?>
            <option value="<?php echo $c->kode_cabang; ?>"><?php echo $c->nama_cabang; ?></option>
        <?php } ?>
    </select>
</div>
<?php } else { ?>
  <input type="hidden" value="<?php echo $this->session->userdata('kode_cabang'); ?>" name="cabang">
<?php } ?>  
<div class="mb-3">
    <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
    <polyline points="7 9 12 4 17 9" /><line x1="12" y1="4" x2="12" y2="16" /></svg>Simpan</button>
</div>
</form>

<script>
    $(function() {
        $('.formPelanggan').bootstrapValidator({
      fields: {
        kodepelanggan: {
          message: 'Kode pelanggan Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Kode Pelanggan Harus Diisi !'
            }
          }
        },
        namapelanggan: {
          message: 'Nama Pelanggan Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Nama Pelanggan Harus Diisi !'
            }
          }
        },
        alamatpelanggan: {
          message: 'Alamat Pelanggan Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Alamat Pelanggan Harus Diisi !'
            }
          }
        },
        nohp: {
          message: 'No Hp Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'No Hp Harus Diisi !'
            }
          }
        },
        cabang: {
          message: 'Cabang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Cabang Harus Diisi !'
            }
          }
        },
      }
    });
    });
</script>