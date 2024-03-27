<?php
class PersegiPanjang{

// propertie 
public $panjang;
public $lebar;

// method: function yang berada di dalam class 
// constructor : method yg otomatis berjalan ketika objek dibuat 
public function __construct($panjang, $lebar)
{
    $this->panjang = $panjang;
    $this->lebar = $lebar; 
}

// method luas persegi panjang
public function hitungLuas() {
    return $this->panjang * $this->lebar;
}

// method keliling persegi panjang
public function hitungKeliling() {
    return 2 * ($this->panjang + $this->lebar);
}



}
