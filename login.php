<?php
    session_start();
    if(isset($_SESSION['loggedUser'])){
        header("location: portal/dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.css">
<script type="text/javascript" src="js/loginValidate.js"></script>
<title>Login - MMS</title>
</head>
<body>
    <!-- Top Menu -->
    <div class="block" style="padding-left: 40px; padding-right: 40px">
        <nav class="level">
            <div class="level-left">
                <a href="index.php" class="is-primary" style="padding-top: 20px;"><b
                        class="title is-3"><b>Meal Management System</b></b></a>
            </div>
            <div class="level-right">
                <a href="registration.php"
                    style="padding-top: 30px;padding-right: 60px; display: flex; align-items: center; justify-content:center" class="is-block is-primary is-large is-inverted"><b>Sign Up</b></a> <a
                    href="login.php" style="padding-top: 30px;padding-right: 60px; display: flex; align-items: center; justify-content:center" class="is-block is-primary is-large is-inverted"><b>Login</b></a>
            </div>
        </nav>
        <div><hr size="2" /></div>
    </div>
    <!-- Body -->
    <section class="hero ">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <p class="subtitle is-smaill" style="color: RED" id="errorMessage"><?php 
                if (isset($_REQUEST['m'])) {
                    $m = mysql_real_escape_string($_REQUEST['m']);
                    if ($m == 0) {
                        echo "Invalid credential.";
                    }elseif ($m == 1) {
                        echo "You need to login first.";
                    }
                } ?></p>
                    <h3 class="title has-text-grey">Login to MMS</h3>
                    <p class="subtitle has-text-grey">Please enter your credential.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img
                                src="https://www.shareicon.net/data/128x128/2016/07/21/799338_user_512x512.png">
                        </figure>
                        <form action="action/loginSubmit.php" method="post" onsubmit="return validate()">
                            <div class="field">
                                <div class="control">
                                    <p id="errorEmail" style="color: RED"></p>
                                    <input class="input is-large" id="email" name="email" type="email"
                                        placeholder="Your Email" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <p id="errorPassword" style="color: RED"></p>
                                    <input class="input is-large" id="password" name="password" type="password"
                                        placeholder="Your Password">
                                </div>
                            </div>
                            <input type="submit" name="loginSubmit" value="Login"
                                class="button is-block is-primary is-large is-fullwidth" />
                        </form>
                    </div>
                    <p class="has-text-grey">
                        Need an account? Sign Up from <a href="registration.php">here</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div class="block">
        <div class="box is-green">
            <div class="columns is-centered">
                Developed by - <a href="https://www.facebook.com/nashid.jitu">Md. Nashid Kamal (Jitu)</a>
            </div>
        </div>

    </div>
    <div style="margin-top: 50px"></div>
</body>
</html>