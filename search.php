<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <style>
        /* here--> */
        .search1 {
            justify-content: center;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .input-search{
            outline: none;
            border-radius: 10px;
            width: 50%;
            height: 50px;
            background-color: #EDDCAE;
            color:#808969 ;
        }
        .input-search:focus{
            border: 2px solid #9BA986;
            
        }
        .submit-search{
            border-radius: 10px;
            width: 100px;
            height: 50px;
            border: none;
            background-color: #9BA986;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .submit-search:hover{
            background-color: #808969;
        }
    </style>
    <title>search</title>
</head>

<body>

    <form action="search.php" method="get">
        <div class="search1">
            <input class="input-search" type="text" name="q" placeholder="Rechercher un produit...">
            <input  class="submit-search"  type="submit" value="Rechercher"
            >
        </div>
    </form>

    <?php
    if (isset($_GET['q']) && !empty($_GET['q'])) {
        $searchTerm = $_GET['q'];

        $file = 'products.csv';
        $products = [];

        if (($handle = fopen($file, 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if (stripos($data[2], $searchTerm) !== false) {
                    $products[] = $data;
                }
            }
            fclose($handle);
        }
        if (!empty($products)) {
            echo '<ul>';
            foreach ($products as $product) {
                echo '
                    <section id="sectionProduct"> 
              <div class="product">
                <div>
                    <img class="image-product" src="' . $product[5] . '" alt="">
                </div>
                <div class="caracteristique">
                    <div class="cara-text" style="font-size: 1rem;">
                        <h2>' . $product[2] . '</h2>
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
                        <button class="add">' . $product[4] . '</button>
                    </div>
                    <div class="product-description" >
                        <h3 class="titre" style="font-size: 1rem;">
                            Product Description
                        </h3>
                        <p class="Description" style="font-size: 1rem;">
                            ' . $product[3] . '
                        </p>
                    </div>
                </div>
            </div>
            </section>
                ';
            }
            echo '</ul>';
        } else {
            echo 'Aucun produit trouvé.';
        }
    }
    ?>

    <script src="main.js"></script>
</body>

</html>