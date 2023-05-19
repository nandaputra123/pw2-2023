
<?php
    include_once 'header.php';
?>
<div class="container">
    <h2>Data Mahasiswa</h2>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Rerata</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Fakhirul</td>
                <td>Statistika dan Probabilitas</td>
                <td>89</td>
                <td>95</td>
                <td>80</td>
                <td>87.95</td>
                <td>A</td>
                <td>Sangat Memuaskan</td>
                <td>Lulus</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rul</td>
                <td>Statistika dan Probabilitas</td>
                <td>78</td>
                <td>81</td>
                <td>80</td>
                <td>79.75</td>
                <td>B</td>
                <td>Memuaskan</td>
                <td>Lulus</td>
            </tr>
            

            <?php
            require_once 'libfungsi.php';

            if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $matkul = $_POST['matkul'];
            $uts = $_POST['uts'];                
            $uas = $_POST['uas'];
            $tugas = $_POST['tugas'];
            $total_nilai = ($uts * 0.30) + ($tugas * 0.35) + ($uas * 0.35);
            $kelulusan = kelulusan($uts, $uas, $tugas);
            $grade = grade($total_nilai);
            $predikat = predikat($total_nilai);
            $no = 3;
            /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
            ?>
            <div class="">
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $matkul ?></td>
                <td><?php echo $uts ?></td>
                <td><?php echo $uas ?></td>
                <td><?php echo $tugas ?></td>
                <td><?php echo $total_nilai ?></td>
                <td><?php echo $grade ?></td>
                <td><?php echo $predikat ?></td>
                <td><?php echo $kelulusan ?></td>
            </tr>
            <?php
    }


    else {
        echo "
        <div class='alert alert-danger m-3' role='alert'>
            Data Belum di Masukkan, Silahkan Masukkan dulu melalui FORM DAFTAR <a href='form_nilai.php'>disini.</a>
        </div>
        ";
      }
    


    ?>
            </div>

                </div>
      </tbody>
  </table>
</div>
<?php
    include_once 'footer.php';
?>