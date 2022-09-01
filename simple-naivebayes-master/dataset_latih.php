<?php

require_once('functions.php');
$matematika = query("SELECT * FROM tbl_matem");
$pemrog = query("SELECT * FROM tbl_pemrog");
$pbo = query("SELECT * FROM tbl_pbo");
$multi = query("SELECT * FROM tbl_multi");
$jarkom = query("SELECT * FROM tbl_jarkom");
$konsentrasi = query("SELECT * FROM tbl_konsentrasi");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pendukung Keputusan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <style>
        body {
            height: 800px;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card p-3">
                    <div class="card-header">
                        <h1>Data Training</h1>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenkel">Matematika</label>
                                        <select name="jenkel" class="form-control" id="jenkel" name="jenkel"  required>
                                            <option value="" disabled selected>-- pilih Kategori nilai--</option>
                                            <option value="1">Tinggi</option>
                                            <option value="2">Cukup</option>
                                            <option value="2">Rendah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="usia_id">Pemrograman Dasar</label>
                                        <select name="usia_id" class="form-control" id="usia_id" name="usia_id" required>
                                            <option value="" disabled selected>-- pilih Kategori nilai--</option>
                                            <option value="1">Tinggi</option>
                                            <option value="2">Cukup</option>
                                            <option value="2">Rendah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">PBO</label>
                                        <select name="status" class="form-control" id="status" name="status" required>
                                            <option value="" disabled selected>-- pilih Kategori nilai--</option>
                                            <option value="1">Tinggi</option>
                                            <option value="2">Cukup</option>
                                            <option value="2">Rendah</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="col-6 mt-3">
                            <div class="form-group">
                                <label for="pekerjaan_id">Mulitimedia</label>
                                <select name="pekerjaan_id" class="form-control" id="pekerjaan_id" name="pekerjaan_id" required>
                                            <option value="" disabled selected>-- pilih Kategori nilai--</option>
                                            <option value="1">Tinggi</option>
                                            <option value="2">Cukup</option>
                                            <option value="2">Rendah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="penghasilan_id">Jaringan Komputer</label>
                                <select name="penghasilan_id" class="form-control" id="penghasilan_id" name="penghasilan_id" required>
                                            <option value="" disabled selected>-- pilih Kategori nilai--</option>
                                            <option value="1">Tinggi</option>
                                            <option value="2">Cukup</option>
                                            <option value="2">Rendah</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <a href="index.php" class="btn btn-warning">kembali</a>
                                <button type="submit" name="proses" class="btn btn-success">Cek Hasil</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <?php if (isset($_POST['proses'])) {
            // dataset latih
            $nama = $_POST['nama'];
            $matematika_id = $_POST['matematika_id'];
            $pemrog_id = $_POST['pemrog_id'];
            $pbo_id = $_POST['pbo_id'];
            $multi_id = $_POST['multi_id'];
            $jarkom_id = $_POST['jarkom_id'];
            $konsentrasi_id = $_POST['konsentrasi_id'];
            

            // Algoritma
            // 1. menghitung prior probabilities P(Ci) dari setiap jenis Klasifikasi, terdapat 3 class.
            $sql =  query("SELECT konsentrasi_id FROM tablename");
            $jmlKonsentrasi = count($sql);

            // Hitung Jumlah Masing-masing jenis Klasifikasi
            $sql =  query("SELECT konsentarsi_id FROM tablename WHERE konsentrasi_id = 1");
            $jmlRPL = count($sql);
            $sql =  query("SELECT konsentrasi_id FROM tablename WHERE konsentrasi_id = 2");
            $jmlMM = count($sql);
            $sql =  query("SELECT konsentrasi_id FROM tablename WHERE konsentarsi_id = 3");
            $jmlTKJ = count($sql);

            // Menghitung PCi
            $pRPL = $jmlRPL / $jmlKonsentrasi;
            $pMM = $jmlMM / $jmlKonsentrasi;
            $pTKJ = $jmlTKJ / $jmlKonsentrasi;

            // 2. menghitung conditional probabilities P(Xt|Ci) dengan kriteria Laki-laki, usia 30-40 tahun, kawin, wiraswasta, 25-50 juta, 11 - 15 tahun, semesteran.
            $sql =  query("SELECT  FROM tablename WHERE mamtematika_id = " . $matematika . " && konsentrasi_id = 1");
            $jmlMatemRPL = count($sql);
            $sql =  query("SELECT matematika FROM tablename WHERE matematika_id = " . $matematika . " && konsentarsi_id = 2");
            $jmlMatemMM = count($sql);
            $sql =  query("SELECT matematika FROM tablename WHERE matematika_id = " . $matematika . " && konsentarsi_id = 3");
            $jmlMatemTKJ = count($sql);

            // Probabilitas P(Jenis Kelamin | Jenis Klasifikasi)
            $jmlmatemRPL = $jmlMatemRPL / $jmlRPL;
            $jmlMatemMM = $jmlMatemMM / $jmlMM;
            $jmlMatemTKJ = $jmlMatemTKJ / $jmlTKJ;

            $sql =  query("SELECT pemrog_id FROM tablename WHERE pemrog_id = " . $pemrog_id . " && konsentarsi_id = 1");
            $jmlPemrogRPL = count($sql);
            $sql =  query("SELECT pemrog_id FROM tablename WHERE pemrog_id = " . $pemrog_id . " && konsentarsi_id = 2");
            $jmlPemrogMM = count($sql);
            $sql =  query("SELECT pemrog_id FROM tablename WHERE pemrog_id = " . $pemrog_id . " && konsentarsi_id = 3");
            $jmlPemrogTKJ= count($sql);

            // Probabilitas P(Usia | Jenis Klasifikasi)
            $jmlPemrogRPL = $jmlPemrogRPL / $jmlRPL;
            $jmlPemrogMM = $jmlPemrogMM / $jmlMM;
            $jmlPemrogTKJ = $jmlPemrogTKJ / $jmlTKJ;

            $sql =  query("SELECT pbo FROM tablename WHERE pbo = " . $pbo . " && konsentarsi_id = 1");
            $jmlPboRPL = count($sql);
            $sql =  query("SELECT pbo FROM tablename WHERE pbo = " . $pbo . " && konsentarsi_id = 2");
            $jmlPboMM = count($sql);
            $sql =  query("SELECT pbo FROM tablename WHERE pbo = " . $pbo . " && konsentarsi_id = 3");
            $jmlPboTKJ = count($sql);

            // Probabilitas P(status | Jenis Klasifikasi)
            $jmlPboRPL = $jmlPboRPL / $jmlRPL;
            $jmlPboMM  = $jmlPboMM  / $jmlMM;
            $jmlPboTKJ = $jmlPboTKJ / $jmlTKJ;

            $sql =  query("SELECT multi_id FROM tablename WHERE multi_id = " . $multi_id . " && konsentarsi_id = 1");
            $jmlMultiRPL = count($sql);
            $sql =  query("SELECT multi_id FROM tablename WHERE multi_id = " . $multi_id . " && konsentarsi_id = 2");
            $jmlMultiMM = count($sql);
            $sql =  query("SELECT multi_id FROM tablename WHERE multi_id = " . $multi_id . " && konsentarsi_id = 3");
            $jmlMultiTKJ = count($sql);

            // Probabilitas P(Pekerjaan | Jenis Klasifikasi)
            $jmlMultiRPL = $jmlMultiRPL / $jmlRPL;
            $jmlMultiMM = $jmlMultiMM / $jmlMM;
            $jmlMultiTKJ =  $jmlMultiTKJ / $jmlTKJ;


            $sql =  query("SELECT jarkom_id FROM tablename WHERE jarkom_id = " . $jarkom_id . " && konsentarsi_id = 1");
            $jmlJarkomRPL = count($sql);
            $sql =  query("SELECT jarkom_id FROM tablename WHERE jarkom_id = " . $jarkom_id . " && konsentarsi_id = 2");
            $jmlJarkomMM = count($sql);
            $sql =  query("SELECT jarkom_id FROM tablename WHERE jarkom_id = " . $jarkom_id . " && konsentarsi_id = 3");
            $jmlJarkomTKJ = count($sql);

            // Probabilitas P(Penghasilan | Jenis Klasifikasi)
            $jmlJarkomRPL = $jmlJarkomRPL / $jmlRPL;
            $jmlJarkomMM = $jmlJarkomMM / $jmlMM;
            $jmlJarkomTKJ = $jmlJarkomTKJ / $jmlTKJ;


            // Probabilitas P(Masa Asuransi | Jenis Klasifikasi)
           

            // Probabilitas P(Cara Pembayaran | Jenis Klasifikasi)
        

            // 3. Menghitung posterior probabilities P(X|Ci)
            $posRPL = $jmlMatemRPL * $jmlPemrogRPL * $jmlPboRPL* $jmlMultiRPL * $jmlJarkomRPL;
            $posMM = $jmlMatemMM * $jmlPemrogMM * $jmlPboMM * $jmlMultiMM * $jmlJarkomMM;
            $posTKJ = $jmlMatemTKJ * $jmlPemrogTKJ * $jmlPboTKJ * $jmlMultiTKJ * $jmlJarkomTKJ;

            // 4. menghitung posterior probabilities P(Ci|X)
            $pRPL =  $pRPL  * $posRPL;
            $pMM =  $pMM * $posMM;
            $pTKJ =  $pTKJ * $posTKJ;

            if ($pRPL != 0) {
                $pRPL = number_format($pRPL, 10);
            } else {
                $pRPL =  0;
            }
            if ($pMM != 0) {
                $pMM = number_format($pMM, 10);
            } else {
                $pMM =  0;
            }
            if ($pTKJ != 0) {
                $pTKJ = number_format($pTKJ, 10);
            } else {
                $pTKJ =  0;
            }

            echo '<div class="alert alert-info mt-3 p-2" role="alert">
						Nilai posterior probabilities untuk <strong>Klasifikasi Kurang Lancar</strong> adalah : <strong>' . $pRPL . '</strong>, <strong>Klasifikasi Lancar</strong> adalah : <strong>' .  $pMM . '</strong>,  <strong>Klasifikasi Tidak Lancar</strong> adalah : <strong>' .  $pTKJ . '</strong>
                    </div>';

            if ($pRPL > $pMM && $pRPL > $pTKJ) {
                echo "<div class=\"alert alert-info mt-3 p-2\" role=\"alert\">Karena nilai Klasifikasi RPL lebih besar daripada yang lain, maka " . $nama . " masuk ke <strong>RPL</strong></div>";
            } else if ($pMM > $pRPL && $pMM > $pTKJ) {
                echo "<div class=\"alert alert-info mt-3 p-2\" role=\"alert\">Karena nilai Klasifikasi MM lebih besar daripada yang lain, maka " . $nama . " masuk ke <strong>Klasifikasi MM</strong></div>";
            } else if ($pTKJ > $pRPL && $pTKJ > $pMM) {
                echo "<div class=\"alert alert-info mt-3 p-2\" role=\"alert\">Karena nilai Klasifikasi TKJ lebih besar daripada yang lain, maka " . $nama . " masuk ke <strong>Klasifikasi TKJ</strong></div>";
            }
        } ?>

    </div>

</body>

</html>