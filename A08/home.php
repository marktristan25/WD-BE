<?php
include("../connect.php");


$sql = "SELECT * FROM  islandsofpersonality;";
$iop = executeQuery($sql);

?>
<!DOCTYPE html>
<html>

<head>
  <title>Islands Of Personality</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="icon" href="images/emtiLogo.png">
  <style>
    body,
    h1,
    h2 {
      font-family: "Raleway", sans-serif
    }

    body,
    html {
      height: 100%
    }

    p {
      line-height: 2
    }

    .bgimg,
    .bgimg2 {
      min-height: 100%;
      background-position: center;
      background-size: cover;
    }

    .bgimg {
      background-image: url("images/bgInsideOut.jpg")
    }

    .bgimg2 {
      background-image: url("/w3images/flowers.jpg")
    }
  </style>
</head>

<body>
  <!-- Header / Home-->
  <header class="w3-display-container w3-wide bgimg" id="home">
    <div class="w3-display-middle w3-text-white w3-center">
      <h1 class="w3-jumbo w3-bold">Welcome To My</h1>
      <h2 style="font-weight: bold;">Islands Of Personality</h2>
    </div>
  </header>

  <!-- Navbar (sticky bottom) -->
  <!-- <div class="w3-bottom w3-hide-small">
    <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
      <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
      <a href="#us" style="width:25%" class="w3-bar-item w3-button">Jane & John</a>
      <a href="#wedding" style="width:25%" class="w3-bar-item w3-button">Wedding</a>
      <a href="#rsvp" style="width:25%" class="w3-bar-item w3-button w3-hover-black">RSVP</a>
    </div>
  </div> -->

  <?php
  if (mysqli_num_rows($iop) > 0) {
    while ($iopRow = mysqli_fetch_assoc($iop)) {

      $destination = $iopRow['islandOfPersonalityID'];
      ?>

      <!-- About / Jane And John -->
      <div class="w3-container w3-padding-64 w3-pale-red" id="us">
        <div class="w3-content">
          <h1 class="w3-center w3-text-grey"><b><?php echo $iopRow['name']; ?></b></h1>
          <img class="w3-round" src="images/<?php echo $iopRow['image']; ?>" style="width:100%;margin:32px 0">
          <p><i><?php echo $iopRow['longDescription']; ?></i>
          </p><br>
          <p class="w3-center"><a href="view.php?islandOfPersonalityID=<?php echo $destination; ?>"
              class="w3-button w3-black w3-round w3-padding-large w3-large">
              Details</a></p>
        </div>
      </div>

      <?php
    }
  }
  ?>



  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-16">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
        class="w3-hover-text-green">w3.css</a></p>
  </footer>
  <div class="w3-hide-small" style="margin-bottom:32px"> </div>

</body>

</html>