<?php
session_start();

    if (isset($_POST['submit'])) {

    include_once 'config.php';

    $docPin = mysqli_real_escape_string($conn, $_POST['doctor_pin']);

    $q = "SELECT * FROM doctor_list WHERE d_pin = '$docPin'";

    $que = "SELECT * FROM appointment WHERE d_pin = '$docPin'";
    $serial = mysqli_query($conn, $que);
    $serialCheck = mysqli_num_rows($serial);
    

    $result = mysqli_query($conn, $q);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck < 1) {
        header("Location: ../appointment.php?doctors=not_exist");
        exit();
    }else {
         if ($row = mysqli_fetch_assoc($result)) {

            $_SESSION['d_name'] = $row['d_name'];
            $_SESSION['d_catagoty'] = $row['d_catagory'];
            $_SESSION['d_pin'] = $row['d_pin'];
            $_SESSION['u_serial'] = $serialCheck+1;
           
            header("Location: ../appointment.php?");
            exit();
        }
    }
}elseif (isset($_POST['done'])) {

    include_once 'config.php';
    $p_pin = mysqli_real_escape_string($conn,$_POST['p_pin']);
    $d_pin = mysqli_real_escape_string($conn, $_POST['d_pin']);
    $d_name = mysqli_real_escape_string($conn, $_POST['d_name']);
    $p_serial = mysqli_real_escape_string($conn, $_POST['p_serial']);
    $appointmentDate = mysqli_real_escape_string($conn, $_POST['appointDate']);    

    $q = "SELECT * FROM appointment WHERE p_pin = '$p_pin'";
    $result = mysqli_query($conn, $q);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {

        $_SESSION['info'] = "User Appointed.";

        header("Location: ../appointment.php?user=exist");
        exit();
    }else {
        $ql = "INSERT INTO appointment (p_pin, d_pin,d_name, p_serial,appo_date) VALUES ('$p_pin','$d_pin','$d_name','$p_serial','$appointmentDate')";
        mysqli_query($conn, $ql);
        header("Location: ../appointment.php?appointment=successful");
        exit();
    }

}elseif (isset($_POST['search'])) {
    include_once 'config.php';
    $p_pin = mysqli_real_escape_string($conn,$_POST['pin']);

    $q = "SELECT * FROM appointment WHERE p_pin = '$p_pin'";

    $result = mysqli_query($conn,$q);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck<1) {
        header("Location: ../appointment.php?search=unsuccessful&please_get_your_appointment");
        exit();
    }else {
        if ($row = mysqli_fetch_assoc($result)) {
            
            $_SESSION['id'] = $row['id'];
            $_SESSION['serial'] = $row['p_serial'];
            $_SESSION['dID'] = $row['d_pin'];
            $_SESSION['dName'] = $row['d_name'];
            $_SESSION['appointment'] = $row['appo_date'];
            header("Location: ../appointment.php?search=");
            exit();

        }
    }
}

?> 