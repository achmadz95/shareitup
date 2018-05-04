<!DOCTYPE html>
<html>
	<head>
		<title>Data Barang</title>
	</head>
	<body>
	<table border="1" style="border-collapse:collapse; width:50%;">
		<tr style="background:blue;">
			<th>Kode barang</th>
			<th>Nama Barang</th>
			
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Action1</th>
			<th>Action2</th>
			
		</tr>
		<?php foreach ($data as $a) {
					?>
		<tr>
			<td><?php echo $a['kode_barang']; ?></td>
			<td><?php echo $a['nama_barang']; ?></td>
			
			<td><?php echo $a['jumlah']; ?></td>
			<td><?php echo $a['harga']; ?></td>
			<td align="center"><a href="<?php echo base_url()."index.php/crud/edit_data/".$a['kode_barang']; ?>"><button>EDIT</button></a></td>
			<td align="center"><a href="<?php echo base_url()."index.php/crud/do_delete/".$a['kode_barang']; ?>"><button>DELETE</button></a></td>

			
		</tr>
		<?php } ?>
	</table>
	</body>
</html>