<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan</title>
    <style>
        body {
            font-family: Tahoma;
        }
        table, th, td{
            border-collapse: collapse;
            font-size: 13px;
            border: 1px solid black;
            font-family: arial;
        }
        table, th, td {
            padding: 5px;
        }
        th {
            font-size: 13px;
            background-color: #C0C0C0;
            color: black;
        }
    </style>
</head>

<body>
    <h4>
        LAPORAN PENJUALAN <br>
        <?php if (empty($cabang)) {
            echo "SEMUA CABANG";
        } else {
            echo "CABANG " . $cabang;
        }
        ?>
        <br>
        PERIODE <?php echo $dari; ?> s/d <?php echo $sampai; ?>
    </h4>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NO FAKTUR</th>
            <th>TGL TRANSAKSI</th>
            <th>KODE PELANGGAN</th>
            <th>NAMA PELANGGAN</th>
            <th>JENIS TRANSAKSI</th>
            <th>JATUH TEMPO</th>
            <th>TOTAL PENJUALAN</th>
            <th>TOTAL BAYAR</th>
            <th>SISA BAYAR</th>
            <th>KETERANGAN</th>
            <th>KASIR</th>
        </tr>
        <?php 
        $totalpenjualan = 0;
        $totalbayar = 0;
        $totalsisabayar = 0;
        $no = 1;
        foreach ($laporanpnj as $d) {
            $totalpenjualan += $d->totalpenjualan;
            $totalbayar += $d->totalbayar;
            $sisabayar = $d->totalpenjualan - $d->totalbayar;
            $totalsisabayar += $sisabayar;
            if ($sisabayar != 0) {
                $keterangan = "Belum Lunas";
                $colorbg = "#cd0e11";
            } else {
                $keterangan = "Lunas";
                $colorbg = "";
            }
        ?>
            <tr style="background-color: <?php echo $colorbg; ?>;">
                <td><?php echo $no; ?></td>
                <td><?php echo $d->no_faktur; ?></td>
                <td><?php echo $d->tgltransaksi; ?></td>
                <td><?php echo $d->kode_pelanggan; ?></td>
                <td><?php echo $d->nama_pelanggan; ?></td>
                <td><?php echo $d->jenistransaksi; ?></td>
                <td><?php echo $d->jatuhtempo; ?></td>
                <td align="right"><?php echo number_format($d->totalpenjualan, '0', '', '.'); ?></td>
                <td align="right"><?php echo number_format($d->totalbayar, '0', '', '.'); ?></td>
                <td align="right"><?php echo number_format($sisabayar, '0', '', '.'); ?></td>
                <td><?php echo $keterangan; ?></td>
                <td><?php echo $d->nama_lengkap; ?></td>
            </tr>
        <?php
            $no++;    
        } ?>

        <tr>
            <td colspan="7">TOTAL</td>
            <th align="right"><?php echo number_format($totalpenjualan, '0', '', '.'); ?></th>
            <th align="right"><?php echo number_format($totalbayar, '0', '', '.'); ?></th>
            <th align="right"><?php echo number_format($totalsisabayar, '0', '', '.'); ?></th>
            <td colspan="2"></td>
        </tr>
    </table>
</body>
</html>