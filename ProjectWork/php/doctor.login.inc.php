<?php
session_start();

if (isset($_POST['submit'])) {

    include_once 'config.php';

    $do_email = mysqli_real_escape_string($conn, $_POST['mail']);
    $do_pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $q = "SELECT * FROM doctor_list WHERE  d_email = '$do_email'";
    $result = mysqli_query($conn, $q);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {

        header("Location: ../patient.php?login=user_not_exist");
        exit();

    } else {
        if ($row = mysqli_fetch_assoc($result)) {

            if ($row['d_pass'] == $do_pass) {
                $_SESSION['d_id'] = $row['d_id'];
                $_SESSION['d_name'] = $row['d_name'];
                $_SESSION['d_pin'] = $row['d_pin'];
                $_SESSION['d_degree'] = $row['d_degree'];
                $_SESSION['d_catagory'] = $row['d_catagory'];
                $_SESSION['d_detail'] = $row['d_detail'];
                $_SESSION['d_specialist'] = $row['d_specialist'];
                $_SESSION['d_email'] = $row['d_email'];
                $_SESSION['d_phone'] = $row['d_phone'];
                header("Location: ../patient.php?login=successful");
                exit();
            } else {
                header("Location: ../patient.php?login=error&passoward=invalid");
                exit();

            }
        }
    }


} else {
    header("Location: ../patient.php?login=username&pass=invalid");
    exit();
}
?>