
<?php 

session_start();

    //$c = 0;
    include_once 'config.php';

    $medicineName = $_POST['Mname'];
    $time = $_POST['Time'];
    $day = $_POST['Day'];
    $date = date("Y/m/d");
    $pPin =mysqli_real_escape_string($conn, $_SESSION['p_pin']);
    $dPin =mysqli_real_escape_string($conn, $_SESSION['d_pin']);

    $q = "SELECT * FROM prescription WHERE (p_pin = '$pPin') AND (d_pin = '$dPin')";
    $result = mysqli_query($conn, $q);

    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck<1) {
    $q = "INSERT INTO prescription (p_pin,d_pin,medicine,time,day,date) VALUES ('$pPin','$dPin','$medicineName','$time','$day','$date')";
    //mysqli_query($conn, $q);
    if (mysqli_query($conn, $q)) {

    } else {
        echo "false";
    }
    }else {

    $q = "INSERT INTO prescription (p_pin,d_pin,medicine,time,day,date) VALUES ('$pPin','$dPin','$medicineName','$time','$day','$date')";
    
    if (mysqli_query($conn, $q)) {

    } else {
        echo "false";
    }

    $sql = "DELETE FROM prescription WHERE ((p_pin = '$pPin') AND (d_pin = '$dPin')) AND (date <> '$date')";
    mysqli_query($conn, $sql);


    }


    
?> 