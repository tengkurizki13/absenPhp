<?php

include_once './confiq/database.php';

$students = mysqli_query($con,"select * from student");




// echo "<pre>". print_r([
//     "index.php - 5",
//     $students
// ], 1) ."</pre>"; die;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ABsen Online</title>
  </head>
  <body>
      <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="#">ABSEN ONLINE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
  </div>
</nav>
<!-- end navbar -->
<!-- start table -->
<section class="container"> 
<table class="table table-striped table-hover table-bordered">
  <tr>
      <th>No</th>
      <th>Name</th>
      <th>Hadir</th>
      <th>Sakit</th>
      <th>Izin</th>
  </tr>
  <?php
  $no = 1;
  while($row = mysqli_fetch_assoc($students)) :
// echo "<pre>". print_r([
//     "index.php - 53",
//     $row
// ], 1) ."</pre>"; 

  ?>
  <tr>
      <td><?= $no++ ?></td>
      <td><?= $row["name"]?></td>
      <td><input type="radio"  id="hadir_<?= $no?>" name="presense_status_<?= $no?>" value=" hadir"<?= $row["presents_status"] === 'hadir' ? 'checked' : ''?>>
            <label for="hadir_<?= $no?>" > Hadir</label>
        </td>
      <td><input type="radio"  id="sakit_<?= $no?>" name="presense_status_<?= $no?>" value=" sakit"<?= $row["presents_status"] === 'sakit' ? 'checked' : ''?>>
            <label for="sakit_<?= $no?>" > sakit</label></td>
      <td><input type="radio"  id="izin_<?= $no?>" name="presense_status_<?= $no?>" value=" izin"><?= $row["presents_status"] === 'izin' ? 'checked' : ''?>>
            <label for="izin_<?= $no?>"> izin</label></td>
  </tr>
  <?php endwhile;
  ?>
</table>
<button class=" btn btn-primary"type="submit">kirim</button>
</section>
<!-- end table -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>