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
                <p>Tambah Guru</p> <a href="../readapi/tampil.php">Kembali</a>
                <div id="stylish" class="myform">
                    <h1>TAMBAH GURU</h1>
                    <!-- <p>form ini digunakan untuk tambah data produk</p> -->
                    <form action="../guru/guru_tambah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">NIG</label>
                            <input type="text" name="nig" id="nig" placeholder="NIG" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="nama" placeholder="Nama" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk" id="jk">
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Mata Pelajaran</label>
                            <input type="text" name="mata_pelajaran" id="mata_pelajaran" placeholder="Stok" aria-describedby="helpId"> 
                        </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>