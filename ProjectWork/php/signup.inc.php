<?php

if(isset($_POST['submit'])){

    include_once 'config.php';

    $u_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $u_age = mysqli_real_escape_string($conn, $_POST['user_age']);
    $u_gender = mysqli_real_escape_string($conn, $_POST['user_gender']);
    $u_add = mysqli_real_escape_string($conn, $_POST['user_address']);
    $u_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $u_mobile = mysqli_real_escape_string($conn, $_POST['user_mobile']);
    $u_pin = mysqli_real_escape_string($conn, $_POST['user_pin']);
    $u_pass = mysqli_real_escape_string($conn, $_POST['user_pass']);

    $q = "SELECT * FROM registration where email = '$u_email'";
    $result = mysqli_query($conn, $q);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck>0) {
        header("Location: ../register.php?register=user_exist&use_different_mail");
        exit();
    }else {
        $q = "SELECT * FROM registration where pin = '$u_pin'";
        $result = mysqli_query($conn, $q);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("Location: ../register.php?register=pin_exist");
            exit();
        } else {

            $sql = "INSERT INTO registration (name, age, gender, address, email, mobile, pin, password)
        VALUES ('$u_name','$u_age','$u_gender','$u_add','$u_email','$u_mobile','$u_pin','$u_pass')";

            mysqli_query($conn, $sql);
            header("Location: ../register.php?registration=successful");
            exit();
        }
    }
}else{
    header("Location: ../register.php");
    exit();
}

?>