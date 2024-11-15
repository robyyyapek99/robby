<form action="<?php echo base_url() ?>barang/updateharga" class="formHarga" method="POST">
<div class="form-group mb-3">
    <input type="text" value="<?php echo $harga['kode_harga']; ?>" readonly class="form-control" name="kodeharga" id="kodeharga" placeholder="Masukkan Kode Harga">
</div>
<div class="form-group mb-3">
    <select disabled name="kodebarang" id="kodebarang" class="form-select">
        <option value="">Pilih Barang</option>
        <?php foreach($barang as $b) {?>
        <option <?php if($harga['kode_barang']==$b->kode_barang) {
            echo "selected"; 
            }   ?> value="<?php echo $b->kode_barang; ?>"><?php echo $b->kode_barang . " - " . $b->nama_barang?></option>
        <?php } ?>
    </select>
</div>
<div class="form-group mb-3">
    <input type="text" value="<?php echo $harga['harga']; ?>" id="harga" class="form-control" name="harga" placeholder="Masukkan Harga">
</div>
<div class="form-group mb-3">
    <input type="text" value="<?php echo $harga['stok']; ?>" id="stok" class="form-control" name="stok" placeholder="Masukkan Jumlah Stok">
</div>
<div class="form-group mb-3">
    <select disabled id="cabang" name="cabang" class="form-select">
        <option value="">Pilih Cabang</option>
        <?php foreach($cabang as $c) {?>
        <option <?php if($harga['kode_cabang']==$c->kode_cabang) {
            echo "selected"; 
            }   ?> value="<?php echo $c->kode_cabang; ?>"><?php echo $c->nama_cabang; ?></option>
        <?php } ?>
    </select>
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary w-100"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
    <polyline points="7 9 12 4 17 9" /><line x1="12" y1="4" x2="12" y2="16" /></svg>Edit</button>
</div>
</form>

<script>
    $(function() {
        $('.formHarga').bootstrapValidator({
      fields: {
        kodebarang: {
          message: 'Barang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Barang Harus Dipilih !'
            }
          }
        },
        harga: {
          message: 'Harga Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Harga Harus Diisi !'
            }
          }
        },
        harga: {
          message: 'Harga Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Harga Harus Diisi !'
            }
          }
        },
        stok: {
          message: 'Stok Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Stok Harus Diisi !'
            }
          }
        },
        cabang: {
          message: 'Cabang Tidak Valid !',
          validators: {
            notEmpty: {
              message: 'Cabang Harus Dipilih !'
            }
          }
        },
      }
    });

        function loadkodeharga() {
            var kodebarang = $("#kodebarang").val();
            var kodecabang = $("#cabang").val();
            var kodeharga = kodebarang + kodecabang;
            $("#kodeharga").val(kodeharga);
        }

        $("#kodebarang").change(function() {
            loadkodeharga();
        });

        $("#cabang").change(function() {
            loadkodeharga();
        });
    });
</script>