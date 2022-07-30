<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/guru-api/guru/guru_tampil.php");
$data = json_decode($data, TRUE); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div class="content"> -->
                    <p>DATA GURU</p> <a href="../readapi/tambah.php">Tambah Data</a>
                    <table style="width:100%">
                        <tr>
                            <td>NIG</td>
                            <td>Nama</td>
                            <td>Jenis Kelamin</td>
                            <td>Mata Pelajaran</td>
                            <td>Aksi</td>
                        </tr>
                        <?php foreach ($data as $data) { ?>
                            <tr>
                                <td>
                                    <?= $data["nig"] ?>
                                </td>
                                <td>
                                    <?= $data["nama"] ?>
                                </td>
                                <td>
                                    <?= $data["jk"] ?>
                                </td>
                                <td>
                                    <?= $data["mata_pelajaran"] ?>
                                </td>
                                <td colspan="2"> <a href="../readapi/edit.php?id=<?= $data['id'] ?>">Edit</a> <a href="../guru/guru_hapus.php?id=<?= $data['id'] ?>">Hapus</a> </td>
                            </tr>
                            <?php } ?>
                    </table>
                <!-- </div> -->
            <!-- </div> -->
</body>
</html>