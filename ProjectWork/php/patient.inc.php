<?php
    session_start();

if (isset($_POST['submit'])) {
    
    include_once 'config.php';

    $pPin = mysqli_real_escape_string($conn,$_POST['patient_pin']);

    $q = "SELECT * FROM registration WHERE pin = '$pPin'";

    $result = mysqli_query($conn,$q);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../patient.php?user=no-user-found");
        exit();
    }else {
        if ($row = mysqli_fetch_assoc($result)) {
            
            $_SESSION['p_id'] = $row['id'];
            $_SESSION['p_name'] = $row['name'];
            $_SESSION['p_age'] = $row['age'];
            $_SESSION['p_gender'] = $row['gender'];
            $_SESSION['p_pin'] = $row['pin'];
            header("Location: ../patient.php?patient=details");
            exit();
        }
    }
} 
?>