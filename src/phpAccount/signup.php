
<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']){
        header('Location: ../index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="../styles/auth_style.css" />

        <title>HC_Signup</title>
    </head>

    <body>
        <!--  Header section  -->
        <header class="intro"></header>

        <!-- Body section  -->
        <form id="signup-form" class="input_window" method="post" action="register.php">
            <h2>Signup</h2>
            <p style="text-align: center" id="error"></p>

            <div class="input_area">
                <div class="textbox">
                    <input type="email" placeholder="Email" name="email" />
                </div>

                <div class="textbox">
                    <input type="text" placeholder="Name" name="name" />
                </div>

                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" />
                </div>

                <div class="textbox">
                    <input type="password"  placeholder="Repeat password" name="password_confirmation" />
                </div>
            </div>

            <div class="conf_btn">
                <input class="btn" type="submit" value="Confirm"name ="conf_registr"/>
            </div>
            <p class="msg" style="color: rgb(165, 65, 65); text-align: center;">
                <?php
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }
                    ?>
            </p>
        </form>
    </body>
</html>
