<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
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
                <a href="#" id="linkLast"><img src="picture/heart.svg" alt="" /></a>
                <!-- icon panier -->
                <a href="panier.php" id="linkLast"><img src="picture/shopping cart.svg" alt="" /></a>
            </div>
        </div>
        </div>
        <hr class="hr1">
    </nav>
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>product</th>
                <th>quantity</th>
                <th>subtotal</th>
            </tr>
            <?php

            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img class="picture" src="picture/women.jpeg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>price:$50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img class="picture" src="picture/women.jpeg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>price:$50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img class="picture" src="picture/women.jpeg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>price:$50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$235.00</td>
                </tr>
            </table>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>