<form action="<?php echo base_url() ?>user/simpanuser" class="formUser" method="POST">
<div class="form-group mb-3">
    <input type="text" class="form-control" name="id_user" placeholder="Masukkan Id User">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No HP">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
</div>
<div class="form-group mb-3">
    <input type="text" class="form-control" name="password" placeholder="Masukkan Password">
</div>
<div class="form-group mb-3">
    <select name="level" class="form-select">
        <option value="">Pilih Jabatan</option>
        <option value="administrator">administrator</option>
        <option value="kepala cabang">kepala cabang</option>
        <option value="kasir">kasir</option>
    </select>
</div>
<div class="form-group mb-3">
    <select name="cabang" class="form-select">
        <option value="">Pilih Cabang</option>
        <?php foreach ($cabang as $c) { ?>
            <option value="<?php echo $c->kode_cabang; ?>"><?php echo $c->nama_cabang; ?></option>
        <?php } ?>
    </select>
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
        $('.formUser').bootstrapValidator({
      fields: {
        id_user: {
          message: 'Id User Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Id User Harus Diisi !'
            }
          }
        },
        nama_lengkap: {
          message: 'Nama Lengkap Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Nama Lengkap Harus Diisi !'
            }
          }
        },
        no_hp: {
          message: 'No Hp Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'No Hp Harus Diisi !'
            }
          }
        },
        username: {
          message: 'Username Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Username Harus Diisi !'
            }
          }
        },
        password: {
          message: 'Password Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Password Harus Diisi !'
            }
          }
        },
        level: {
          message: 'Jabatan Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Jabatan Harus Diisi !'
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
        }
      }
    });
    });
</script>