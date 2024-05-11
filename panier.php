<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .cart-page {
            margin: 80px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #fff;
            background: #FF523B;
            font-weight: normal;
        }

        td {
            padding: 10px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td a {
            color: #FF523B;
            font-size: 12px;
        }

        .picture {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #FF523B;
            width: 100%;
            max-width: 510px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }
    </style>
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
                    <!-- <input type="search" name="search" id="search_input" placeholder="Search by Title" /> -->
                    <a class="btnSearch" href="search.php">Search</a>
                </div>
            </form>
            <!-- icon links -->
            <div class="last_links_icon">
                <!-- icon favourite product -->
                <!-- <a href="#" id="linkLast"><img src="picture/heart.svg" alt="" /></a>
                icon panier
                <a href="panier.php" id="linkLast"><img src="picture/shopping cart.svg" alt="" /></a> -->
            </div>
        </div>
        </div>
        <hr class="hr1">
    </nav>
    <table id="table">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        
        <?php
        $v33 = $_GET['okv'];
        $fileP = 'products.csv';
        $file = fopen($fileP, 'r');
        $test = true;
        // $subtotal = $row[4] * 2;
        if ($file === false) {
            echo "Failed to open file: $fileP";
        } else {
            while (($row = fgetcsv($file)) !== false) {
                if ($test) {
                    $test = false;
                    continue;
                } else if ($v33 == $row[0]) {
                    echo '
                                <tr>
                                    <td>
                                        <div class="cart-info">
                                            <img class="picture" src="' . $row[5] . '">
                                            <div>
                                                <p>' . $row[2] . '</p>
                                                <small>price:' . $row[4] . '</small>
                                                <br>
                                                <a href="" id="btn_remove">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <form name="form" action="" method="post">
                                        <input type="number" value="1" name="subject">
                                    </form>
                                    </td>
                                    <!-- for subtotal price * quantity -->
                                    <td>'. $row[4]. '</td>
                                </tr>
                                </table>
                                <div class="total-price">
                                    <table>
                                        <tr>
                                            <td>subtotal</td>
                                            <td>'.$row[4]. '</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>' . $row[4] . '</td>
                                        </tr>
                                    </table>
                                </div>
                                
        ';
                }
            }
            fclose($file);
        };
        ?>
        <script>
            var btn_remove = document.getElementById("btn_remove");
            btn_remove.addEventListener("click", function() {
                var x = document.getElementById("table");
                if (x.style.display === "block") {
                    x.style.display = "none";
                    document.getElementById("btn_remove").innerHTML = "Remove";
                }
            });
        </script>
</body>

</html>