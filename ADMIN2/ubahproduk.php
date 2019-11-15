<h2>Ubah Produk</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM barang WHERE ID_BARANG='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<strong>ID Barang</strong><br>";
echo "<pre>";
print_r($pecah['ID_BARANG']);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['NAMA_BARANG'];?>">
	</div>

	
</form>