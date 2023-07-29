<?php
// Function sort() untuk menyusun array dari huruf A-Z 
$jenisKelamin = ["Laki-laki", "Perempuan"]; //Membuat Array ($jenisKelamin) untuk option pilih jenis kelamin
sort($jenisKelamin);
$agama = ["Islam", "Kristen", "Hindu", "Budha"]; // Array ($agama) untuk option Agama
$jurusan = ["Informatika", "Sistem Komunikasi", "Management", "Sistem Informasi", "Teknik Sipil"]; // Array ($jurusan) untuk memilih jurusan
sort($jurusan);
//Array ($matkul) untuk memilih Mata Kuliah
$mataKuliah = ["Ekonomi Bisnis", "Algoritma Pemrograman", "Kalkulus", "Statistika", "English For Bussiness", "Kewarganegaraan", "Agama", "Teknologi Informasi", "Menejemen Keuangan", "Metode Numerik"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <!-- Memanggil file bootstrap.min.css dalam folder css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Memanggil file bootstrap.min.js dlam folder css -->
    <script src="js/bootstrap.min.js"></script>
</head

<body>
    <div class="container mt-3">
        <div class="row align-item-end">
            <div class="card">
                <div class="card-header">
                    <h2>Form Mahasiswa</h2>
                </div>
                <div class="card-body">
                    <form class="row g-3" action="" method="post">
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="number" name="nim" id="nim" placeholder="NIM">
                            <label class="form-label" for="">NIM</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat">
                            <label class="form-label" for="">Alamat</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama">
                            <label class="form-label" for="">Nama</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="text" name="np" id="np" placeholder="No Telepon">
                            <label class="form-label" for="">No Telepon</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <select class="form-select" name="jk" id="jk">
                                <?php
                                // Membuat option untuk array atau pilihan jenis Kelamin
                                foreach ($jenisKelamin as $jk) {
                                    echo "<option value = '$jk'>$jk</option>";
                                }
                                ?>
                            </select>
                            <label class="form-label" for="" aria-label="Jenis Kelamin">Jenis Kelamin</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="text" name="email" id="email" placeholder="E-mail">
                            <label class="form-label" for="">E-mail</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="textarea" name="tl" id="tl" placeholder="Tempat Lahir">
                            <label class="form-label" for="">Tempat Lahir</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <select class="form-select" name="jurusan" id="jurusan">
                                <?php
                                // Membuat pilihan untuk jurusan
                                foreach ($jurusan as $jrs) {
                                    echo "<option value = '$jrs'>$jrs</option>";
                                }
                                ?>
                            </select>
                            <label class="form-label" for="" aria-label="Jurusan">Jurusan</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="date" name="tgl" id="tgl" placeholder="Tanggal Lahir">
                            <label class="form-label" for="tgl">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <select class="form-select" name="matkul" id="matkul">
                                <?php
                                // Membuat pilihan untuk mata kuliah
                                foreach ($mataKuliah as $matkul) {
                                    echo "<option value = '$matkul'>$matkul</option>";
                                }
                                ?>
                            </select>
                            <label class="form-label" for="" aria-label="Mata Kuliah">Mata Kuliah</label>
                        </div>
                        <div class="form-floating col-md-6">
                            <select class="form-select" name="agama" id="agama">
                                <?php
                                //membuat pilihan untuk agama
                                foreach ($agama as $agm) {
                                    echo "<option value = '$agm'>$agm</option>";
                                }
                                ?>
                            </select>
                            <label class="form-label" for="" aria-label="Agama">Agama</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input class="form-control" type="number" name="nilai" id="nilai" placeholder="Nilai">
                            <label class="form-label" for="nilai">Nilai</label>
                        </div>
                        <div class="card-footer">
                            <div class="col-md-2">
                                <button class="btn btn-primary" type="submit" id="save" name="save">Simpan</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    $keterangan = null; //Membuat variabel keterangan dengan isi default null jika input tidak sesuai
                    $grade = null;

                    function keterangan($nilai, &$keterangan) //Function keteragan untuk mengisi variabel $keterangan dengan input $nilai
                    {
                        if ($nilai > 70 && $nilai <= 100) {
                            $keterangan = "Lulus"; //jika $nilai lebih dari 70 dan kurang dari sama dengan 100 maka isi variabel $keterangan dengan "Lulus"
                        } elseif ($nilai > 0 && $nilai <= 70) {
                            $keterangan = "Tidak Lulus"; // Kebalikan yang atas
                        }
                    }

                    function grade($nilai, &$grade) // Function untuk mengisi variabel $grade
                    {
                        if ($nilai > 90) {
                            $grade = "A"; // Jika variabel $nilai lebih dari 90 maka akan mengembalikan parameter $grade dengan isi "A"
                        } elseif ($nilai > 80) {
                            $grade = "B";
                        } elseif ($nilai > 70) {
                            $grade = "C";
                        } elseif ($nilai > 60) {
                            $grade = "D";
                        } else {
                            $grade = "E";
                        }
                    }

                    $fileJson = 'data/data_mahasiswa.json'; //Cek file JSON
                    $dataMhs = array(); //membuat array kosong
                    $isiJson = file_get_contents($fileJson); //mengambil isi dari file json
                    $dataMhs = json_decode($isiJson, true); //mengubah data json menjadi array

                    //proses simpan
                    //Cek isi variabel
                    if (isset($_POST['save'])) { //Mengambil data dengan POST
                        $nim = $_POST['nim'];
                        $nama = $_POST['nama'];
                        $jk = $_POST['jk'];
                        $jurusan = $_POST['jurusan'];
                        $matkul = $_POST['matkul'];
                        $nilai = $_POST['nilai'];

                        keterangan($nilai, $keterangan); //mengambil hasil fungsi dari keterangan dengan parameter
                        grade($nilai, $grade); //mengambil hasil fungsi dari grade dengan parameter

                        $dataBaru = array( //mengisi array yang sudah di input
                            'NIM' => $nim,
                            'Nama' => $nama,
                            'Jenis Kelamin' => $jk,
                            'Jurusan' => $jurusan,
                            'Mata Kuliah' => $matkul,
                            'Nilai' => $nilai,
                            'Grade' => $grade,
                            'Ket' => $keterangan,
                        );
                        array_push($dataMhs, $dataBaru); //untuk membuat data tidak bertumpuk
                        $dataKeJson = json_encode($dataMhs, JSON_PRETTY_PRINT);
                        file_put_contents($fileJson, $dataKeJson);
                    }
                    ?>
                    <table class="table">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                            <th>Grade</th>
                            <th>ket</th>
                        </tr>
                        <div class="card-body">
                            <?php
                            foreach ($dataMhs as $mhs) {
                                echo "<tr>";
                                echo "<td>" . $mhs['NIM'] . "</td>";
                                echo "<td>" . $mhs['Nama'] . "</td>";
                                echo "<td>" . $mhs['Jenis Kelamin'] . "</td>";
                                echo "<td>" . $mhs['Jurusan'] . "</td>";
                                echo "<td>" . $mhs['Mata Kuliah'] . "</td>";
                                echo "<td>" . $mhs['Nilai'] . "</td>";
                                echo "<td>" . $mhs['Grade'] . "</td>";
                                echo "<td>" . $mhs['Ket'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>