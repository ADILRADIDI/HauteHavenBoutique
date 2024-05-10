<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorie Product</title>
    <link rel="stylesheet" href="styles.css" />

</head>

<body>
    <nav class="nav_links">
        <div class="container_nav">
            <!-- logo -->
            <div class="tt" id="logo--text">
                <a href="index.php">
                    <h4>HauteHavenBoutique</h4>
                </a>
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
                    <input type="search" name="search" id="search_input" placeholder="Search by Title" />
                    <button type="submit" class="btnSearch">Search</button>
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
                $categories = ['Children'];
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
    <script src="main.js"></script>
</body>

</html>