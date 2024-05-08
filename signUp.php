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
            <form id="forms" action="signup.php" method="POST">
            <!-- <label id="label1" for="Email">Email</label> -->
            <input type="email" name="email" id="email" placeholder="Email" />
            <!-- <label id="label" for="password">Password</label> -->
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Password"
              required
            />
            <!-- checkbox inside select  -->
            <div id="selectCategorie">
              <div class="selectBox" onclick="showCheckboxes()">
                <select>
                  <option class="op">Select an Categorie</option>
                </select>
                <div class="overSelect"></div>
              </div>
              <div id="checkboxes">
                <label for="one"><input type="checkbox" id="one" />categorie 1</label>
                <label for="two"><input type="checkbox" id="two" />categorie 2</label>
                <label for="three"><input type="checkbox" id="three" />categorie 2</label>
                <label for="three"><input type="checkbox" id="three" />categorie 3</label>
                <label for="three"><input type="checkbox" id="three" />categorie 5</label>
              </div>
            </div>
            <div class="permession">
                <div class="p1 p">
                    <input type="checkbox" name="permession" id="permession" />
                    <label for="permession" id="permession_text">I accept the terms and conditions</label>
                </div>
                <div class="p3 p">
                    <input type="checkbox" name="permession" id="permession" />
                    <label for="permession" id="permession_text">Subscribe to our monthly</label>
                </div>
            </div>
            <div >
                <a href="#" class="btn_signUp" >Sign Up</a>
            </div>
          </form>
              <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Open the CSV file for appending
    $usersFile = fopen("users.csv", "a");

    // Write the email and password to the CSV file
    fputcsv($usersFile, array($email, $password));

    // Close the CSV file
    fclose($usersFile);

    echo "Signup successful!";
}
?>


    
        </div>
      </div>
    </div>

  </body>
</html>