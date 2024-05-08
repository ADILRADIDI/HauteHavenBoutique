<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signUp</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="main.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="bodySignUp">
    <div class="signU">
      <header class="header">
        <div class="title"><h1>HauteHavenBoutique</h1></div>
        <div class="nav">
          <a id="btn_login" href="login.php">login</a>
        </div>
      </header>
      <div class="formContainer">
        <div>
          <img id="image_signUp" src="picture/image_signUp.jpg" alt="" />
        </div>
        <div id="form_signUp">
          <h1>Sign Up</h1>
          <p>sign up for free to access to in of our product</p>
      <form method="post" id="forms" >
        <div id="selectCategorie">
                  <input id="email" type="email" name="email" placeholder="Email">
                  <input id="password" type="password" name="password" placeholder="Password">
            <div class="selectBox" onclick="showCheckboxes()">
                <select name="categories[]" multiple>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Children">Children</option>
                </select>
                <!-- <div class="overSelect"></div> -->
            </div>
            <div id="checkboxes">
                <label for="one"><input type="checkbox" id="one" name="categories[]" value="Men" />1_ Men</label>
                <label for="two"><input type="checkbox" id="two" name="categories[]" value="Women" />2_ Women</label>
                <label for="three"><input type="checkbox" id="three" name="categories[]" value="Children" />3_ Children</label>
            </div>
            <div>
                <input class="adds" type="submit"  value="Submit" style="text-decoration: none; 
                color: white; font-family: red-rose; background-color: #8a33fd; 
                border-radius: 10px; padding: 10px 30px; margin-top: 10px;">
            </div>
        </div>
        
      </form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    // 
    $selectedCategories = isset($_POST["categories"]) ? $_POST["categories"] : array();
    foreach ($selectedCategories as $category) {
    }
    // 
    $filePath = 'users.csv';
    $file = fopen($filePath, 'a');
    if ($file === false) {
        echo "Failed to open file: $filePath";
    } else {
        fputcsv($file, array($email, $password,$category));
        fclose($file);
    }
}
?>
        </div>
      </div>
    </div>
  </body>
</html>
