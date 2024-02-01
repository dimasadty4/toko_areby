<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo_areby.png" type="image/x-icon">

    <title>Print Invoice</title>

    <style>
    	table {
            border-collapse: collapse;
        }

        table th,td {
            border:1px solid #000;
            padding: 7px 9px;
        }	
    </style>

</head>
<table style="width: 60%">
	<h1 align="center"><b>Report Penjualan</b></h1>
	<h2 align="center"><b>Areby Collection</b></h2>
	<br>

	<table width="100%" style="margin-top: 12px;">
		<thead>
		<tr>
			<th width="10%">No</th>
			<th width="15%">ID INVOICE</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal Pembayaran</th>
            <th>Jumlah Pembayaran</th>
		</tr>
		</thead>

	<?php 
	$no=1;
	$total = 0;
	foreach($jointable as $tr) : 
		$total += $tr->jumlah_bayar;
		?> 

		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $tr->id_invoice; ?></td>
			<td><?php echo $tr->nama; ?></td>
			<td align="center"><?php echo $tr->tgl_bayar; ?></td>
			<td align="right"><?php echo number_format($tr->jumlah_bayar,0,',','.') ?></td></td>
		</tr>

	<?php endforeach; ?>

	<tr>
            <td style="color: red;" colspan="4" align="right">Total</td>
            <td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
        </tr>

</table>
<th>
	<td></td>
</th>

<script type="text/javascript">
	window.print();
</script>