<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home page</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <a href="#Product" class="links_light">Product</a>
        <a href="#Categorie" class="links_light">Categorie</a>
        <a href="#ContactUs" class="links_light">Contact us</a>
      </div>
      <!-- search -->
      <form method="GET" action="">
        <div id="form1">
          <!-- <input type="search" name="search" id="search_input" placeholder="Search by Title" /> -->
          <a class="btnSearch" href="search.php">Search</a>
        </div>
      </form>
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
  <!-- section slider -->
  <section>
    <div class="containerHero">
      <div class="textHero">
        <marquee behavior="sliding" direction="up" id="marquee">
          <p>Family Collection</p>
          <h1>A simple guide <br> to Minimalist style </h1>
        </marquee>

        <a href="#" id="btn_shopNow">Shop Now</a>
      </div>
    </div>
  </section>
  <!-- section posts -->
  <section id="Product">
    <div class="title_section">
      <h3>Product</h3>
    </div>
    <div id="productsContainer">
      <?php

      function displayDProduct($row)
      {
        $id = htmlspecialchars($row[0]);
        $categorie = htmlspecialchars($row[1]);
        $title = htmlspecialchars($row[2]);
        $description = htmlspecialchars($row[3]);
        $price = htmlspecialchars($row[4]);
        $picture = htmlspecialchars($row[5]);
        $arr1 = [$title, $description, $price];
        echo '
                <a href="viewProduct.php?var=' . $id . '" class="prd_link" >
                    <img id="pic_prd" src="' . $picture . '" alt="image_product">
                    <div class="price_title">
                        <p id="title">' . $title . '</p>
                        <p id="price">' . $price . '</p>
                    </div>
                </a>';
      }

      function getDataProduct()
      {
        $fileP = 'products.csv';
        $file = fopen($fileP, 'r');
        $test = true;
        // choice in login .
        $categories = ['Children', 'Women', 'Men'];
        // $data = array();
        if ($file === false) {
          echo "Failed to open file: $fileP";
        } else {
          while (($row = fgetcsv($file)) !== false) {
            if ($test) {
              $test = false;
              continue;
            }
            $category = htmlspecialchars($row[1]);
            if (in_array($category, $categories)) {
              displayDProduct($row);
            }
          }
          // echo json_encode($data);
          fclose($file);
        };
      }
      getDataProduct();
      ?>
    </div>
  </section>

  <!-- section categorie---------------- -->
  <section id="Categorie" class="containerCategorie">
    <div class="title_section">
      <h3>Categorie</h3>
    </div>
    <div class="categories_2">
      <div id="exCategorie">
        <a href="CategorieP1.php"><img id="img_cat" src="picture/men.svg" alt="">
          <p class="text">Men</p>
        </a>
      </div>
      <div id="exCategorie">
        <a href="CategorieP2.php"><img id="img_cat" src="picture/children.jpeg" alt="">
          <p class="text">Children</p>
        </a>
      </div>
      <div id="exCategorie">
        <a href="CategorieP3.php"><img id="img_cat" src="picture/women.jpeg" alt="">
          <p class="text">Women</p>
        </a>
      </div>
    </div>
  </section>
  <!-- section posts here => -->
  <!-- ============================== -->
  <!-- section top brands -->
  <section>
    <div id="container">
      <div class="text-container">
        <h1>Top Brands Deal</h1>
      </div>
      <div class="text-container">
        <p>Up To <span> 60% </span> off on brands</p>
      </div>
      <div class="containerBox">
        <div class="box"><img src="picture/image 21.svg" alt=""></div>
        <div class="box"><img src="picture/image 2.svg" alt=""></div>
        <div class="box"><img src="picture/image 7.svg" alt=""></div>
        <div class="box"><img src="picture/image 19.svg" alt=""></div>
        <div class="box"><img src="picture/image 18.svg" alt=""></div>
      </div>
    </div>
  </section>
  <!-- section feedbacks -->
  <section>
    <div class="contianer_feedback">
      <div class="title_section">
        <h3>Feedback</h3>
      </div>
      <div class="allBox">
        <div class="box-1">
          <div id="twoimages">
            <img id="image-profil-feedback" src="picture/firstWomen.svg" alt="">
            <img id="image-star-feedback" src="picture/feedback1.png" alt="">
          </div>
          <h3>Floyd Miles</h3>
          <p>Absolutely divine!! I bought this as a gift and I can't wait to give this sweater to this baby girl! Thank you!</p>
        </div>
        <div class="box-1">
          <div id="twoimages">
            <img id="image-profil-feedback" src="picture/men2feed.svg" alt="">
            <img id="image-star-feedback" src="picture/Frame 260.svg" alt="">
          </div>
          <h3>Ronald Richards</h3>
          <p>ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
        <div class="box-1">
          <div id="twoimages">
            <img id="image-profil-feedback" src="picture/mennn.svg" alt="">
            <img id="image-star-feedback" src="picture/Frame 260 (1).svg" alt="">
          </div>
          <h3>Savannah Nguyen</h3>
          <p>ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- footer------------------ -->
  <footer id="ContactUs">
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
    <!--  -->

    <!--  -->
    <hr class="hr2">
    <p id="fin-TEXT">Copyright © 2025 HauteHavenBoutique Folks Pvt Ltd. All rights reserved.</p>
  </footer>
  <script src="main.js">
  </script>
</body>

</html>