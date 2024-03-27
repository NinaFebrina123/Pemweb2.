<?php
require_once('class_persegi_panjang.php'); 

// Membuat objek persegi panjang
$persegiPanjang = new PersegiPanjang(5, 3);

// Mengakses properti-peristiwa dan metode
echo "Panjang: " . $persegiPanjang->panjang . "<br>";
echo "Lebar: " . $persegiPanjang->lebar . "<br>";
echo "Luas: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling: " . $persegiPanjang->hitungKeliling();