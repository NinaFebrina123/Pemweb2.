<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Siswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
  <h2 class="text-center">Form Nilai Siswa</h2>
  <hr>

  <form class="mr-5 ml-5" action="proses_nilai.php" method="get">
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama</label>
      <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <label for="tugas" class="col-4 col-form-label">Nilai Ujian</label>
      <div class="col-8">
        <input id="tugas" name="tugas" type="text" class="form-control" required="required">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

</body>

</html>