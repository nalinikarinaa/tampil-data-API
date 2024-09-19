<?php
$sumber ='https://dummyjson.com/users?limit=10';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Tampil Data API</title>
  </head>


  <body>
    <h1 class="text-center mt-4">Tampil Data</h1>
    <div class="container mt-5">
       <div class="row">
        <?php foreach ($data['users'] as $row) {

            ?>
        <div class="col-3">
        <div class="card shadow-lg mt-5">
    <img src=" <?php echo $row['image'] ?> " class="foto" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['firstName'].' '.$row['lastName'] ?></h5>
      <p class="card-text">Age: <?php echo $row['age'] ?></p>
      <p class="card-text">Gender: <?php echo $row['gender'] ?></p>
      <p class="card-text">Birth Date: <?php echo $row['birthDate'] ?></p>
      <p class="card-text">Address: <?php echo $row['address']['address'].' , '.$row['address']['city'].', '.
      $row['address']['state'].', '.$row['address']['postalCode'].', '.$row['address']['country'];
      ?></p>
    </div>
    </div>
    </div>
    <?php }?>


    <table class="table table-striped mt-10">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data['users'] as $row) {

    ?>
    <tr>
      <th scope="row"><?php echo $row['firstName'].' '.$row['lastName'] ?> </th>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['address']['address'].' , '.$row['address']['city'].', '.
      $row['address']['state'].', '.$row['address']['postalCode'].', '.$row['address']['country'];
      ?></td>
    </tr>
  </tbody>
  <?php }?>
</table>


    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>