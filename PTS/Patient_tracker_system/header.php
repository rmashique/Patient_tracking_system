<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> CSC-470 Project
  </title>
  <link href="bootstrap.min.css" rel="stylesheet">
  
</head>

<body>
  <div class="container" style="padding-top: 10px;">
    <nav class="navbar  navbar-static-top">
      <a href="#" class="navbar-brand">Tube Light</a>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <!--a href="https://goo.gl/maps/PyT52gM87su" target="_blank"> Address: Plot no- 1, Opposite SBI, Sector 12, Kharghar, Navi Mumbai</a-->
        </li>
        <li class="nav-item">
          <a class="" href="tel:+917709473553">Contact No</a>
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