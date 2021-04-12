<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
    <?php
  include 'navbar.php';
  ?>
    <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #00bdf2;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2 class="greeting">Welcome to</h2>
                  <h1>The Sparks Foundation Bank</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/tsf-bank.png" class="img-fluid pt-2 bank">
              </div>
            </div>
      
      <!-- Activity section -->
      <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/users.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #213368;">Create User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transactions.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #213368;">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #213368;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p style= "background-color: #00bdf2">&copy 2021. Made by <b>Mailesh Bakthavatchalam</b> <br> for <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
