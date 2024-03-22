<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'] ?? [];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skills'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $nilai = 0;

    foreach ($skills as $value) {
        switch ($value) {
            case 'HTML':
                $nilai += 10;
                break;

            case 'CSS':
                $nilai += 10;
                break;

            case 'JavaScript':
                $nilai += 20;
                break;

            case 'RWD Bootsrap':
                $nilai += 20;
                break;

            case 'PHP':
                $nilai += 30;
                break;

            case 'Python':
                $nilai += 30;
                break;

            case 'Java':
                $nilai += 50;
                break;

            default:
                $nilai += 0;
                break;
        }
    }

    function predikat($nilai)
    { {
            if ($nilai >= 100 && $nilai <= 150) {
                return "Sangat Baik";
            } elseif ($nilai >= 60 && $nilai <= 100) {
                return "Baik";
            } elseif ($nilai >= 40 && $nilai <= 60) {
                return "Cukup";
            } elseif ($nilai >= 0 && $nilai <= 40) {
                return "Kurang";
            } else {
                return "Tidak Memadai";
            }
        }
    }
    $predikat = predikat($nilai);
}

echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill: " . join(',', $skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Skor Skill : $nilai";
echo "<br>Predikat : $predikat";
