<?php
include('../database/db_connection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <title>Home</title>
  <style>
    <?php include "../css/style.css" ?>
  </style>
</head>

<body>
  <div class="dropdown">
    <button class="dropbtn btn1 navigation">saved</button>
    <div class="dropdown-content">
      <a href="../Dropdown/all.php">All</a>
      <a href="../Dropdown/starter.php">Starter</a>
      <a href="../Dropdown/main.php">Main</a>
      <a href="../Dropdown/dessert.php">Dessert</a>
      <a href="../Dropdown/drink.php">Drink</a>

    </div>
  </div>
  <a class="dropbtn navigation" href="../Dropdown/form.php">New</a>
  <a class="dropbtn" href="../Main/api_request.php" style="color: white;">Search for more recipes 🔎</a>
  <hr>
  <header>
    <div class="header">
      <img class="logo" src="../assets/klogo.png" alt="">
      <h1>Recipe Notebook</h1>
      <p>To Maintain Our Taste</p>
    </div>
  </header>
  <div class="content">
    <div class="one">
      <img src="../assets/burger.png" alt="">
    </div>
    <div class="two">
      <p>Salad contains various types of Vitamins, calcium, folic acids, <br> fiber and phytonutrients that helps to prevent chronic diseases <br> such as cancer and heart diseases. <br> It works great for the persons with diabetes and <br> Vegetable salads keep weight down.</p>
    </div>
  </div>
  <div class="content">
    <div class="two">
      <p>Eating vegetables provides health benefits <br> – people who eat more vegetables <br>
        and fruits as part of an overall healthy diet <br> are likely to have a reduced risk of <br>
        some chronic diseases. <br> Vegetables provide nutrients vital for health and <br>
        maintenance of your body.
      </p>
    </div>
    <div class="one A">
      <img src="../assets/two.png" alt="">

    </div>
  </div>
  <div class="content">
    <div class="one B">
      <img class="B" src="../assets/three.png" alt="">
    </div>
    <div class="two">
      <p>A healthy diet is essential for good health and nutrition. <br> It protects you against many chronic noncommunicable diseases, <br> such as heart disease, diabetes and cancer. <br> Eating a variety of foods and consuming less salt, <br> sugars and saturated and industrially-produced trans-fats, <br> are essential for healthy diet.</p>
    </div>
  </div>
  <hr>
  <div class="footer-clean">
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-3 item">
            <h3>Khushi Mahesh Orpadia</h3>
          </div>
          <div class="col-sm-4 col-md-3 item">
            <h3>About: </h3>
            <ul>
              <li><a href="#">Computer Science Student</a></li>
              <li><a href="#">I dont believe in good grades</a></li>
              <li><a href="#">Maybe coz I dont get one ..shhh!</a></li>
            </ul>
          </div>
          <div class="col-sm-4 col-md-3 item">
            <h3>Careers</h3>
            <ul>
              <li><a href="#">Completed Jr. Clg in Computer Science</a></li>
              <li><a href="#">Pursuing B.Sc. CS</a></li>
            </ul>
          </div>
          <div class="col-lg-3 item social"><a href="https://github.com/Khushi-003"><i class="icon ion-social-github"></i></a><a href="https://twitter.com/KhushiOrpadia"><i class="icon ion-social-twitter"></i></a><a href="https://www.linkedin.com/in/khushi-orpadia-1974011b7/"><i class="icon ion-social-linkedin"></i></a><a href="https://www.instagram.com/khushiorpadia/"><i class="icon ion-social-instagram"></i></a>
            <p class="copyright">khushi Orpadia © 2021</p>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
      if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>