<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <nav class="nav_links">
    <div class="container_nav">
      <!-- logo -->
      <div class="tt" id="logo--text">
        <h4>HauteHavenBoutique</h4>
      </div>
      <!-- links -->
      <div class="linkss" id="linkss">
        <a href="index.php" class="links_bold">Home</a>
        <a href="#" class="links_light">Men</a>
        <a href="#" class="links_light">Women</a>
        <a href="#" class="links_light">Children</a>
      </div>
      <!-- search -->
      <!--  -->
      <!--  -->
      <div>
        <input type="search" name="" id="search_input" placeholder="search" />
      </div>
      <!-- icon links -->
      <div class="last_links_icon">
        <!-- icon favourite product -->
        <a href="#" id="linkLast"><img src="picture/heart.svg" alt="" /></a>
        <!-- icon panier -->
        <a href="#" id="linkLast"><img src="picture/shopping cart.svg" alt="" /></a>
      </div>
    </div>
    </div>
    <hr class="hr1">
  </nav>
  <!-- code php -->

  <?php
  $v1 = $_GET['var'];
  $fileP = 'products.csv';
  $file = fopen($fileP, 'r');
  $test = true;
  if ($file === false) {
    echo "Failed to open file: $fileP";
  } else {
    while (($row = fgetcsv($file)) !== false) {
      if ($test) {
        $test = false;
        continue;
      } else if ($v1 == $row[0]) {
        echo '
              <section id="sectionProduct"> 
              <div class="product">
                <div>
                    <img class="image-product" src="' . $row[5] . '" alt="">
                </div>
                <div class="caracteristique">
                    <div class="cara-text" style="font-size: 1rem;">
                        <h2>' . $row[2] . '</h2>
                    </div>
                    <div class="size">
                        <p style="font-size:1rem;">Select Size</p>
                        <div class="btn-classsize">
                            <select name="pets" id="pet-select" style="border-radius: 50px; width:200px;">
                                <option value="">choose an Taille </option>
                                <option value="dog">XS</option>
                                <option value="cat">S</option>
                                <option value="hamster">L</option>
                                <option value="parrot">XL</option>
                                <option value="spider">XXL</option>
                                <option value="goldfish">XXXL</option>
                            </select>
                        </div>
                    </div>
                    <div class="colours" >
                        <p style="margin-bottom: 5px; font-size: 1rem;">Colours Available :</p>
                        <div class="btn-classcolours">
                            <button class="btn-colours" style="
                                background:black;
                                border-radius:50%;
                                width:20px;
                                height:20px;
                                border:2px solid wheat;
                             "></button>
                            <button class="btn-colours" style="
                                background:red;
                                border-radius:50%;
                                width:20px;
                                height:20px;
                                border:2px solid wheat; "></button>
                            <button class="btn-colours" style="
                                background:gray;
                                border-radius:50%;
                                width:20px;
                                height:20px;
                                border:2px solid wheat; "></button>
                            <button class="btn-colours" style="
                                background:white;
                                border-radius:50%;
                                width:20px;
                                height:20px;
                                border:2px solid wheat; "></button>
                        </div>
                    </div>
                    <div class="addc" style="padding-top: 10px;">
                        <button class="add">add to cart</button>
                        <button class="add">' . $row[4] . '</button>
                    </div>
                    <div class="product-description" >
                        <h3 class="titre" style="font-size: 1rem;">
                            Product Description
                        </h3>
                        <p class="Description" style="font-size: 1rem;">
                            ' . $row[3] . '
                        </p>
                    </div>
                </div>
            </div>
            </section>
          ';
      }
    }
    fclose($file);
  };

  ?>

  <!-- footer-->
  <footer>
    <div class="container_footer">
      <div>
        <h1>Need Help</h1>
        <a href="#">
          <li>Contact Us</li>
        </a>
        <a href="#">
          <li>Track Order</li>
        </a>
        <a href="#">
          <li>Returns & Refunds</li>
        </a>
        <a href="#">
          <li>Career</li>
        </a>
      </div>
      <div>
        <h1>Company</h1>
        <a href="#">
          <li>About Us</li>
        </a>
        <a href="#">
          <li>euphoria Blog</li>
        </a>
        <a href="#">
          <li>euphoriastan</li>
        </a>
        <a href="#">
          <li>Collaboration</li>
        </a>
      </div>
      <div>
        <h1>More Info</h1>
        <a href="#">
          <li>Term and Conditions</li>
        </a>
        <a href="#">
          <li>Privacy Policy
          </li>
        </a>
        <a href="#">
          <li>Shipping Policy
          </li>
        </a>
        <a href="#">
          <li>Sitemap</li>
        </a>
      </div>
    </div>
    <hr class="hr2">
    <p id="fin-TEXT">Copyright © 2025 HauteHavenBoutique Folks Pvt Ltd. All rights reserved.</p>
  </footer>
  <!-- js -->
  <script src="main.js"></script>
</body>

</html>