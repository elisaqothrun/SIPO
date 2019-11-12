<h2>pesanan</h2>
<table class= "table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>id_pemesanan</th>
			<th>nama pembeli</th>
			<th>id_admin</th>
			<th>tanggal pemesanan</th>
			<th>jumlah barang</th>
			<th>total harga</th>
			<th>gambar bukti pembayaran</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1; ?>
	<?php $ambil = $koneksi-> query ("SELECT * FROM pemesanan JOIN pembeli ON pemesanan.NIK = pembeli.NIK"); ?>
	<?php while ($pecah =$ambil-> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor;?></td>
		<td><?php echo $pecah['ID_PEMESANAN'];?></td>
		<td><?php echo $pecah['NAMA_PEMBELI'];?></td>
		<td><?php echo $pecah['ID_ADMIN'];?></td>
		<td><?php echo $pecah['TGL_PEMESANAN'];?></td>
		<td><?php echo $pecah['JUMLAH_BARANG'];?></td>
		<td><?php echo $pecah['TOTAL_HARGA'];?></td>
		<td><?php echo $pecah['GAMBAR_BUKTIPEMBAYARAN'];?></td>
		<td>
			<a href="index.php?halaman=detail&id=<?php echo $pecah['ID_PEMESANAN']; ?> " class="btn-info btn">detail</a>
		</td>
		
	</tr>
	<?php $nomor++ ?>
	<?php } ?>
		
	</tbody>
</table>