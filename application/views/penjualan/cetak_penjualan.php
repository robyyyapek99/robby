<style>
    table {
        font-family: Arial;
    }
</style>
<center>
    <h2 style="font-family: Arial;">FAKTUR PENJUALAN</h2>
    <h3>PT Robby Toedjo Hardjoe</h3>

    <table style="width:100%">
        <tr>
            <td>
                <table border="0">
                    <tr>
                        <td>No Faktur</td>
                        <td>:</td>
                        <td><?php echo $penjualan['no_faktur']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><?php echo $penjualan['tgltransaksi']?></td>
                </tr>
                </table>
            </td>
            <td style="width:40%"></td>
            <td>
            <table border="0">
                    <tr>
                        <td>Kode Pelanggan</td>
                        <td>:</td>
                        <td><?php echo $penjualan['kode_pelanggan']?></td>
                    </tr>
                    <tr>
                        <td>Nama Pelanggaan</td>
                        <td>:</td>
                        <td><?php echo $penjualan['nama_pelanggan']?></td>
                </tr>
                <tr>
                        <td>Alamat Pelanggaan</td>
                        <td>:</td>
                        <td><?php echo $penjualan['alamat_pelanggan']?></td>
                </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table style="width:100%; border-collapse: collapse;" border="1">
        <tr style="font-weight:bold; text-align:center">
            <td>NO</td>
            <td>KODE BARANG</td>
            <td>NAMA BARANG</td>
            <td>BERAT BARANG</td>
            <td>HARGA</td>
            <td>QTY</td>
            <td>SUBSTOTAL</td>
        </tr>
        <?php $no = 1;
        $total = 0;
        foreach ($detail as $d) {
            $totalharga = $d->qty * $d->harga;
            $total = $total + $totalharga;
             ?>
        <tr>
            <td align="center"><?php echo $no; ?></td>
            <td align="center"><?php echo $d->kode_barang; ?></td>
            <td align="center"><?php echo $d->nama_barang; ?></td>
            <td align="center"><?php echo $d->berat; ?> Kg</td>
            <td align="right"><?php echo number_format($d->harga, '0', '', '.'); ?></td>
            <td align="center"><?php echo $d->qty; ?></td>
            <td align="right"><?php echo number_format($totalharga, '0', '', '.'); ?></td>
        </tr>
        <?php $no++;
        } ?>
        <tr style="font-weight: bold; font-size:16">
            <td colspan="6">TOTAL</td>
            <td align="right"><?php echo number_format($total, '0', '', '.'); ?></td>
        </tr>
        <tr>
            <td style="font-size:16; font-weight: bold" colspan="6">Terbilang :  
                <i><?php echo ucwords(terbilang($total)); ?></i>
            </td>
        </tr>
    </table>
</center>
