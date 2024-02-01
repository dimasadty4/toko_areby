<?php 
foreach($invoice as $inv) : 
    $nama = $inv->nama;
    $alamat = $inv->alamat;
    $tgl_pesan = $inv->tgl_pesan;
endforeach;
    ?>

<?php
foreach($pembayaran as $pmb) :
    $nama_pembayar = $pmb->nama_pembayar;
    $nama_bank = $pmb->nama_bank;
    $jumlah_bayar = $pmb->jumlah_bayar;
    $tgl_bayar = $pmb->tgl_bayar;
endforeach;
    ?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo_areby.png" type="image/x-icon">

    <title>Print Invoice</title>

    <style>
        body {
            font-size: 16px;
        }
        .header {
            background: "#CCC";
        }
        .heading {
            float:left;
            width: 50%;
        }

        .heading h1 {
            font-size: 24px;
            margin:0;
            padding:0;
        }
        
        .heading h2 {
            font-size: 16px;
            margin: 9px 0;
        }

        .title {
            float:right;
            border: 1px solid #000;
            padding: 9px 22px;
        }
        .header:after {
            display:block;
            content: "";
            clear: both;
        }

        .no-td {
            border:none;
            padding: 0;
        }

        .label {
            padding: 0 9px 0 16px;
        }

        .col-wrap:after {
            clear:both;
            display:block;
            content: "";
        }

        .col-1 {
            float:left;
        }

        .col-2 {
            float:right;
        }

        table {
            border-collapse: collapse;
        }

        table th,td {
            border:1px solid #000;
            padding: 7px 9px;
        }
    </style>

</head>
<body>

<div class="col-wrap" style="margin-top: 22px">
	<div class="col-1">
	<h1> Invoice Pembayaran Anda</h1>
	
	<table style="width: 60%">
	<tr>
        <td class="no-td">ID INVOICE</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $inv->id_invoice; ?></td>
    </tr>

    <tr>
		<td class="no-td">Nama</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $inv->nama; ?></td>
    </tr>

	<tr>
		<td class="no-td">Alamat</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $inv->alamat; ?></td>
    </tr>
	
	<tr>
		<td class="no-td">Tangal Pesan</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $inv->tgl_pesan; ?></td>
    </tr>

	<tr>
		<td class="no-td">Nama Pembayar</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $nama_pembayar; ?></td>
    </tr>
	
	<tr>
		<td class="no-td">Nama Bank</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $nama_bank; ?></td>
    </tr>
	
	<tr>
		<td class="no-td">Tanggal Bayar</td>
        <td class="no-td label">:</td>
        <td class="no-td"><?php echo $tgl_bayar; ?></td>
    </tr>
	
	<tr style="font-weight: bold; color: red">
		<td class="no-td">Jumlah Pembayaran</td>
		<td class="no-td label">:</td>
		<td class="no-td"><?php echo $jumlah_bayar; ?></td>
	</tr>

	<table width="100%" style="margin-top: 12px;">
		<thead>
		<tr>
			<th width="45%">Nama barang</th>
			<th>Ukuran</th>
			<th>Jumlah Barang</th>
			<th width="10%">Harga</th>
            <th width="10%">Subtotal</th>
		</tr>
		</thead>

		<?php 
        $total = 0;
        foreach($tb_pesanan as $tr) :
            $subtotal = $tr->jumlah * $tr->harga;
            $total += $subtotal;
            ?>

		<tr>
			<td><?php echo $tr->nama_barang; ?></td>
			<td align="center"><?php echo $tr->ukuran; ?></td>
			<td align="center"><?php echo $tr->jumlah; ?></td>
			<td><?php echo number_format($tr->harga,0,',','.') ?></td>
            <td><?php echo number_format($subtotal,0,',','.') ?>
		</tr>
	
	<?php endforeach; ?>

    <tr>
            <td colspan="4" align="right">Total</td>
            <td align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
        </tr>

</table>
</div>
</div>

<script type="text/javascript">
	window.print();
</script>

</body>
</html>