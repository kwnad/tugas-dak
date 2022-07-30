<?php
require_once('../config/koneksi.php');

if (isset($_POST['nig']) && isset($_POST['nama']) && isset($_POST['jk']) && isset($_POST['mata_pelajaran'])) {
	$nig   	= $_POST['nig'];
	$nama 	= $_POST['nama'];
	$jk 			= $_POST['jk'];
	$mata_pelajaran 			= $_POST['mata_pelajaran'];
	$sql = $conn->prepare("INSERT INTO guru (nig, nama, jk, mata_pelajaran) VALUES (?, ?, ?, ?)");
	$sql->bind_param('ssdd', $nig, $nama, $jk, $mata_pelajaran);
	$sql->execute();
	if ($sql) {
		//echo json_encode(array('RESPONSE' => 'SUCCESS'));
		header("location:../readapi/tampil.php");
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
} else {
	echo "GAGAL";
}