<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Sunrise Hospital
    </title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar navbar-static-top">
          <a href="index.php" class="navbar-brand">🌅 Sunrise Hospital</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="https://goo.gl/maps/jZKSMZBfw5D2" target="_blank"> Address: No. U-15, J.V.P.D. Scheme, Bhaktivedanta Swami Rd, Vile Parle</a>
              </li>
              <li class="nav-item">
                <a href="">Ambulance Number: +91 9930035998</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>
        </div>
