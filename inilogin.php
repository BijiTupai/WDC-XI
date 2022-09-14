<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acorn Games</title>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<style>
    body{
        background-color: black;
        font-family: consolas;
    }

    .btn{
        padding: 10px 135px;
        border-radius: 10px;
        font-size: 13px;
    }



</style>

</head>
<body>
    <center>
    <br><br><br>
    <div class="font" style="color: white">
    <form action="proses-login.php" method="post">
    
    <img src="iniacorn.png" height="70px" width="70px">
            <br><br>

            <h5><font color="white">Sign in with an Acorn</font></h5>
            <h5><font color="white">Games Account</font></h5>
            <br>

            <div class="col-sm-3">
            <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Email Address" name="email">
        </div>
        <br>
        <div class="col-sm-3">
            <input type="password" class="form-control" id="" placeholder="Password" name="password">
        </div>

        <table width="345px" height="50" style="font-size: 16px">
            <tr>
                <td><input type="checkbox" name="persetujuan" id=""><span style="opacity:0;">O</span>Remember me</td>
                <td><a href="inilupa.php" style="color: white"><span style="opacity:0;">OOO</span>Forgot Your Password</a></td>
            </tr>
        </table>
        <br>

        <button type="submit" class="btn btn-primary">LOG IN NOW</button>
        <br><br><br>

        <div style="font-size: 14px">
            <a href="iniprivacy.html" style="color: white">Privacy Policy</a>
            <br><br>

            Don't have an Acorn Games Account?
            <a href="iniregister.php" style="color: white">Sign Up</a>
            <br>
            Back to
            <a href="inimenulogin.php" style="color: white">all sign in options</a>
        </div>
        <br><br><br>

        


            




            </form>
    </div>
    </center>
</html>
        