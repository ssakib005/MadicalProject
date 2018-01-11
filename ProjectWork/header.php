<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xmadical.com</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css_file/style_table.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--<script src="javascript/appointment.js"></script> -->
    <script src="javascript/JS.js"></script>
</head>
<body>
    <div id="container">
    <header>
        <div id="h1">
        <h1>X-Madical Center</h1>
        </div>
        <div id="had_img">
        <img id="header_img" src="images/imgs.png" alt="madical">
        </div>
        <div style="clear:both"></div>
    </header>
    <main>
        <div id="left">
            <ul id="nav">
                <a href="index.php"><li>Home</li></a>
                <a href="doctorlist.php"><li>Doctor list</li></a>
                <a href="appointment.php"><li>Appointment</li></a>
                <a href="register.php"><li>Register</li></a>
                <a href="patient.php"><li>Patient</li></a>
            </ul>
        </div>