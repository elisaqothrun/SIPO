<?php
$ambil= $koneksi->query("SELECT * FROM barang WHERE ID_BARANG='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
$fotobarang=$pecah['foto_produk'];
if(file_exists("../foto_produk/$fotobarang"))
{
	unlink("../foto_produk/$fotobarang");

}
$koneksi->query("DELETE FROM barang WHERE ID_BARANG='$_GET[id]'");
echo "<script>alert('produk terhapus');</script>";
echo "<script>location='index.php?halaman=barang;</script>";
?>