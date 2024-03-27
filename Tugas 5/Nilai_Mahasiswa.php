<?php
class NilaiMahasiswa {
  public $nama;
  public$matakuliah;
  public $nilaiuts;
  public $nilaiuas;
  public $nilaitugas;
  public $nilai_total;
  


  public function __construct($nama, $matakuliah, $nilaiuts, $nilaiuas, $nilaitugas) {
    $this->nama = $nama;
    $this->matakuliah= $matakuliah;
    $this->nilaiuts = $nilaiuts;
    $this->nilaiuas = $nilaiuas;
    $this->nilaitugas = $nilaitugas;
    

  }

  public function hitungGrade() {
    if ($this->nilai_total >= 0 && $this->nilai_total <= 35) {
      return "E";
    } elseif ($this->nilai_total >= 36 && $this->nilai_total <= 55) {
      return "D";
    } elseif ($this->nilai_total >= 56 && $this->nilai_total <= 69) {
      return "C";
    } elseif ($this->nilai_total >= 70 && $this->nilai_total <= 84) {
      return "B";
    } elseif ($this->nilai_total >= 85 && $this->nilai_total <= 100) {
      return "A";
    } else {
      return "Nilai tidak valid";
    }



  }


  public function hitungNilaiTotal() {
    $nilai_total = ($this->nilaiuts * 0.3) + ($this->nilaiuas * 0.35) + ($this->nilaitugas * 0.35);
    return $nilai_total;
    
    echo "<br> Nama: " . $this->nama;
    echo "<br> Mata Kuliah: " . $this->matakuliah;
    echo "<br> Nilai Uts: " . $this->nilaiuts;
    echo "<br> Nilai Uas: " . $this->nilaiuas;
    echo "<br> Nilai tugas: " . $this->nilaitugas;


}




}