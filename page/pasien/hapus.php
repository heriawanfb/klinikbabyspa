<?php

	$no_pasien = $_GET['no_pasien'];
    $sql = $koneksi->query("delete from tb_pasien where no_pasien='$no_pasien'");

?>

<script type="text/javascript">
		alert ("Data Berhasil di Hapus");
		window.location.href="?page=pasien";
</script>