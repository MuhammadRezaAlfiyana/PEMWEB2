
<?php include 'atas.php'; ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Hasil Nilai</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="form.php">Week 2</a></li>
                <li class="breadcrumb-item active">Hasil Nilai</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                <?php
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];
$praktikum = $_POST["praktikum"];
$rata_rata = ($uts+$uas+$praktikum)/3;
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);

function keterangan($rata_rata){
if ($rata_rata >= 55 && $rata_rata <=100) {
    return "Anda lulus";
} else {
    return "masukan angka dengan benar";
}
}

function grade($rata_rata){
if ($rata_rata >= 85 && $rata_rata <=100) {
    return "A (Sangat baik)";
} elseif ($rata_rata >= 70 && $rata_rata <=84) {
    return "B (baik)";
} elseif ($rata_rata >= 56 && $rata_rata <=69) {
    return "C (Cukup)";
}  elseif ($rata_rata >= 36 && $rata_rata <=55) {
    return "D (Kurang)";
} elseif ($rata_rata >= 0 && $rata_rata <=35) {
    return "E (Sangat Kurang)";
}else{
    return "I (Tidak Nilai)";
}
}

echo "Proses: $proses";
echo "<br>Nama Lengkap: $nama";
echo "<br>Mata Kuliah: $matkul";
echo "<br>Nilai uts: $uts";
echo "<br>Nilai uas: $uas";
echo "<br>Nilai praktikum: $praktikum";
echo "<br>Rata rata nilai: $rata_rata";
echo "<br>Keterangan: $keterangan";
echo "<br>Grade: $grade";
?>
                </div>
            </div>
        </div>
    </main>
    <?php include 'bawah.php'; ?>
</div>
