<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>signup page</title>
  </head>
  <body class="signupBody">
    <div class="signup">
      <header>
        <!------------------navbar section----------------------------------->
        <div class="logo">
          <h1 class="logo-text">HautHavenBoutique</h1>
        </div>
        <a class="button-signup" href="signUp.php">sign up</a>
      </header>
      <div class="formcontainer">
        <div class="imagesignup">
          <img
            id="image_signUp"
            src="picture/Image.svg"
            alt="images-man"
          />
        </div>
        <div class="box-signup">
          <h1>Sign in page</h1>
          <form class="form-sigup" action="" method="POST">
            <input type="email" name="email" id="email" placeholder="Email" />
            <input
              type="password"
              name="password"
              id="password"
              placeholder="password"
            />
            <!-- <button class="btn_signUp" type="button">sign in</button> -->
            <a href="index.php" class="btn_signUp">sign in</a>
          </form>
        </div>
      </div>
    </div>
    <!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     // Open the CSV file for reading
//     $usersFile = fopen("users.csv", "r");
//     // Read each line of the CSV file
//     while (($row = fgetcsv($usersFile)) !== false) {
//         // Check if the username and password match
//         if ($row[0] == l$emai && $row[1] == $password) {
//             echo "<p>Login successful!</p>";
//             fclose($usersFile);
//             return;
//         }else{
//           echo ' <p>invalid account </p>';
//         }
//     }

//     // Close the CSV file
//     fclose($usersFile);

//     echo "Invalid username or password.";
// }
?> -->

    <script src="script.js"></script>
  </body>
</html>
