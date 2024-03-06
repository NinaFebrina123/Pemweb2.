<?php

function hitungGrade($nilai_total) {
    if ($nilai_total >= 0 && $nilai_total <= 35) {
        return "E";
    } elseif ($nilai_total >= 36 && $nilai_total <= 55) {
        return "D";
    } elseif ($nilai_total >= 56 && $nilai_total <= 69) {
        return "C";
    } elseif ($nilai_total >= 70 && $nilai_total <= 84) {
        return "B";
    } elseif ($nilai_total >= 85 && $nilai_total <= 100) {
        return "A";
    } else {
        return "I";
    }
}

// Masukkan nilai total ujian yang telah dihitung sebelumnya
$nilai_total = ;

// Hitung Grade berdasarkan nilai total ujian
$grade = hitungGrade($nilai_total);

echo "Nilai Total: " . $nilai_total . "<br>";
echo "Grade: " . $grade;

?>