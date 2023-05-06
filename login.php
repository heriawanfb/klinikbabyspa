<?php 

ob_start();
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$koneksi=new mysqli("localhost","root","","db_fafa");

if($_SESSION['admin'] || $_SESSION['petugas'] || $_SESSION['dokter'] || $_SESSION['apoteker']){
        header("location:index.php");
    }else{

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>FAFA Login</title>
    <!-- Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>
<p align="center"><img src="images/logofafa.png"></p>
<body class="login-page">
    <!--<div class="login-box">
        <div class="card">
            <div class="body">
             <div align="left">
                <img src="images/logopng.png" width="75" height="75" style="float:left;margin:0 8px 4px 0;">
                <font size="6" color="red"><b>KLINIK INTAN</b></font><br>
                Jl. Urip Sumoharjo Blok Majalor Bringin-Ciwaringin-082371000432</div>
            </div>
        </div>
    </div>-->
    <div class="login-box">
        <!--<div class="logo">
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>-->
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">LOGIN</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/person.ico" width="25" height="25" style="float:left;margin:0 8px 4px 0;" />
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="images/key.ico" width="25" height="25" style="float:left;margin:0 8px 4px 0;" />
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <!--<div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>-->
                        <div class="col-xs-4">
                            <input type="submit" name="login" value="Login" class="btn btn-block bg-pink waves-effect">
                        </div>
                    </div>
                    <!--<div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>-->
                </form>
            </div>
        </div>
    </div>
    

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>

<?php

    if(isset($_POST['login'])){
        $username =mysqli_real_escape_string($koneksi,$_POST['username']);
        $password =mysqli_real_escape_string($koneksi,$_POST['password']);
        //$username = $_POST['username'];
        //$password = $_POST['password'];

        $sql=$koneksi->query("select * from tb_pengguna where username='$username' and password='$password'");
        $data=$sql->fetch_assoc();
        $ketemu=$sql->num_rows;

        if ($ketemu >=1){
            session_start();

            if($data['level']=="admin"){
                $_SESSION['admin']=$data['id'];
                header("location:index.php");
            }else if($data['level']=="petugas"){
                $_SESSION['petugas']=$data['id'];
                header("location:index.php");
            }else if($data['level']=="dokter"){
                $_SESSION['dokter']=$data['id'];
                header("location:index.php");
            }else if($data['level']=="apoteker"){
                $_SESSION['apoteker']=$data['id'];
                header("location:index.php");
            }
        }else{
            ?>
            <script type="text/javascript">
                alert("Login Gagal, Username dan Password anda Salah!!")
            </script>
            <?php
        }

    }
?>

<?php 

    }

?>