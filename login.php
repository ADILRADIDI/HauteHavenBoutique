<?php
session_start();
$validEmail = "example@example.com";
$validPassword = "password";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Read data from users.csv
    $file = fopen("users.csv", "r");
    $isAuthenticated = false;

    while (($row = fgetcsv($file)) !== false) {
        // Check if email and password match
        if ($row[0] === $email && $row[1] === $password) {
            $_SESSION['email'] = $email;
            $isAuthenticated = true;
            break;
        }
    }

    fclose($file);

    if ($isAuthenticated) {
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign In Page</title>
</head>
<body class="signupBody">
    <div class="signup">
        <header>
            <div class="logo">
                <h1 class="logo-text">HautHavenBoutique</h1>
            </div>
            <a class="button-signup" href="signUp.php">Sign up</a>
        </header>
        <div class="formcontainer">
            <div class="imagesignup">
                <img id="image_signUp" src="picture/Image.svg" alt="images-man">
            </div>
            <div class="box-signup">
                <h1>Sign in page</h1>
                <?php if (isset($error)) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>
                <form class="form-signup" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button type="submit" class="btn_signUp">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
