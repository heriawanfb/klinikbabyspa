<?php

	$kd_tarif = $_GET['kd_tarif'];
    $sql = $koneksi->query("delete from tb_tarif where kd_tarif='$kd_tarif'");

?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?page=obat";
</script>