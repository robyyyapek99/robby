<form method="POST" action="<?php echo base_url(); ?>penjualan/simpanbayar" id="formBayar">
    <input type="hidden" value="<?php echo $no_faktur; ?>" name="no_faktur">
    <input type="hidden" value="<?php echo $grandtotal; ?>" name="totalpenj" id="totalpenj">
    <input type="hidden" value="<?php echo $totalbayar; ?>" name="totalbayar" id="totalbayar">
<div class="input-icon mb-3">
    <span class="input-icon-addon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="5" width="16" height="16" rx="2" /><line x1="16" y1="3" x2="16" y2="7" /><line x1="8" y1="3" x2="8" y2="7" /><line x1="4" y1="11" x2="20" y2="11" /><line x1="11" y1="15" x2="12" y2="15" /><line x1="12" y1="15" x2="12" y2="18" /></svg>
    </span>
    <input type="date"class="form-control" value="<?php echo date("Y-m-d"); ?>" name="tglbayar" id="tglbayar" placeholder="Tanggal Bayar">
</div>
<div class="input-icon mb-3">
    <span class="input-icon-addon">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="7" y="9" width="14" height="10" rx="2" /><circle cx="14" cy="14" r="2" /><path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" /></svg>
    </span>
    <input type="text" class="form-control" name="jmlbayar" id="jmlbayar" placeholder="Nominal Bayar">
</div>
<div class="mb-3">
    <button type="submit" class="btn btn-primary w-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="10" y1="14" x2="21" y2="3" /><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
    Bayar
    </button>
</div>
</form>
<script>
    flatpickr(document.getElementById('tglbayar'), {});
</script>
<script>
    $(function(){
        $("#formBayar").submit(function(){
            var jmlbayar = $("#jmlbayar").val();
            var totalpenj = $("#totalpenj").val();
            var totalbayar = $("#totalbayar").val();
            var sisabayar = parseInt(totalpenj) - parseInt(totalbayar);
            // alert(sisabayar);
            // return false;
            if(jmlbayar == "" || jmlbayar == 0){
                swal("Peringatan", "Nominal Bayar Tidak Boleh Kosong", "warning");
                return false;
            } else if(parseInt(jmlbayar) > parseInt(sisabayar)){
                swal("Peringatan", "Nominal Bayar Tidak Boleh Melebihi Sisa Bayar, Sisa Bayar Anda " + sisabayar, "warning");
                return false;
            }else {
                return true;
            }
        });
    });
</script>