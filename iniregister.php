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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<style>
    body{
        background-color: black;
        font-family: Consolas;
    }

    .btn{
        padding: 10px 140px;
        border-radius: 10px;
    }

    .name{
      border-radius: 25px;
      width: 167px;
      height: 40px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
    }

    table{
        color: white;
    }

</style>

</head>
<body>

    <center>

    <form action="proses-register.php" method="post">
    <br><br><br>
    <div class="font" style="color: white">

            <img src="iniacorn.png" height="70px" width="70px">
            <br><br>

            <h5><font color="white">Sign Up</font></h5>
            <br>
        
        
        <div class="col-sm-3">
        <select name="country" id="country" class="form-select" aria-label="Default select example">
            <option value="Indonesia">Indonesia</option>
            <option value="United States">United States</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Japan">Japan</option>
            <option value="China">China</option>
            <option value="Brazil">Brazil</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Spain">Spain</option>
        </select>
        </div>
        <br>

        <div class="">
            <input type="text" class="name" name="first" id="first" aria-describedby="emailHelp" placeholder="First Name">
            <input type="text" class="name" name="last" id="last" aria-describedby="emailHelp" placeholder="Last Name">
        </div>
        <br>
 
       <div class="col-sm-3">
            <input type="text" name="username" id="username" class="form-control" id="" aria-describedby="DisplayHelp" placeholder="Display Name">
        </div>

        <br>
        <div class="col-sm-3">
            <input type="email" name="email" id="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Email Address">
        </div>
        <br>
        <div class="col-sm-3">
            <input type="password" name="password" id="password" class="form-control" id="" placeholder="Password">
        </div>
        <br>

        <table width="345px" height="50" style="font-size: 13px">
            <tr>
                <td><input type="checkbox" name="persetujuan" id=""></td>
                <td>I would like to recieve news, surveys and special offers from Acorn Games</td>
            </tr>
            <tr>
                <td><span style="opacity:0;">Th</span></td>
                <td></td>
            </tr>
            <tr><td><input type="checkbox" name="persetujuan" id="">
                </td>
                <td>I have read and agree to the <a href="iniservice.html" style="color: white">terms of service</a></td>
            </tr>
        </table>
        <br>

        <button type="submit" name="submit" class="btn btn-primary">Register</button>
        <br><br><br>

        <div style="font-size: 14px">
            <a href="iniprivacy.html" style="color: white">Privacy Policy</a>
            <br><br>

            Have an Acorn Games Account?
            <a href="inilogin.php" style="color: white">Sign In</a>
            <br>
        </div>
        <br><br><br>
        </form>
    </div>
    </center>
</body>
</html>