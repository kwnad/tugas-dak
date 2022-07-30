<?php

function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/guru-api/guru/guru_edit.php?id=" . $_GET["id"]);
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
<div class="content">
                <p>
                    <a href="../readapi/tampil.php">Kembali</a>
                </p>
                <div id="stylish" class="myform">
                    <h1>EDIT GURU</h1>
                    <!-- <p>form ini digunakan untuk edit produk</p> -->
                    <form action="../guru/guru_ubah.php" method="post" id="form">
                        
                        <div class="form-group">
                            <label for="">NIG</label>
                            <input type="text" value="<?= $data["nig"] ?>" name="nig" id="nig" placeholder="NIG">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" value="<?= $data["nama"] ?>" name="nama" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk" id="jk">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select>
                            <!-- <input type="text" value="<?= $data["harga"] ?>" name="harga" id="harga" placeholder="Harga"> -->
                        </div>
                        <div class="form-group">
                            <label for="">Mata Pelajaran</label>
                            <input type="text" value="<?= $data["mata_pelajaran"] ?>" name="mata_pelajaran" id="mata_pelajaran" placeholder="Mata Pelajaran">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>