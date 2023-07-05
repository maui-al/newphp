<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="/phpproject06/css/style.css" class="css">
</head>
<body>
    <main>
        <div class="head_part">
            <p>English (US)</p>
            <img src="/phpproject06/img/fb-logo.png" alt="logo" width="50">
        </div>
        <form action="includes/login.inc.php" method="post">
            <input type="text" id="email" name="email" placeholder="Mobile number or Email" required>
            <input type="password" id="pwd" name="pwd" placeholder="Password" required>
            <input type="submit" id="login" value="Log in">
            <p>Forgot Password?</p>
        </form>
        <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if($_GET["error"] == "invalidemail"){
            echo "<p>Choose a proper email</p>";
        }
        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, try again!</p>";
        }
        else if($_GET["error"] == "none"){
            echo "<p>You have Login!</p>";
        }
    }
    ?>
        <div class="footer_part">
            <div class="create_new">
                <input type="text" value="Create New Account">
            </div>
        </div>
    </main>
</body>
</html>