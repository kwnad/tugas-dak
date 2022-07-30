<?php
require_once('../config/koneksi.php');

if (isset($_POST['id'])) {
    $id                 = $_POST['id'];
    $nig        = $_POST['nig'];
    $nama        = $_POST['nama'];
    $jk              = $_POST['jk'];
    $mata_pelajaran               = $_POST['mata_pelajaran'];
    $sql = $conn->prepare("UPDATE guru SET nig=?, nama=?, jk=?, mata_pelajaran=? WHERE id=?");
    $sql->bind_param('ssddd', $nig, $nama, $jk, $mata_pelajaran, $id);
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
?>