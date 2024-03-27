<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Mengambil nilai dari form
  $nama = $_POST['nama'];
  $matakuliah = $_POST['matakuliah'];
  $nilaiuts = $_POST['nilaiuts'];
  $nilaiuas = $_POST['nilaiuas'];
  $nilaitugas = $_POST['nilaitugas'];

include 'Nilai_Mahasiswa.php';

$nilaiMahasiswa = new NilaiMahasiswa($nama, $matakuliah, $nilaiuts, $nilaiuas, $nilaitugas);
$nilai_total = new NilaiMahasiswa('nina', 'pemweb', 50, 70, 90);

// Menghitung grade
$grade = $nilaiMahasiswa->hitungGrade();
$nilai_total = $nilai_total->hitungNilaiTotal();

// Menampilkan hasil grade
echo "Grade: $grade";
echo "Nilai Total: $nilai_total";





}

