<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'config.php';

    $u_email = mysqli_real_escape_string($conn,$_POST['mail']);
    $u_pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $q = "SELECT * FROM registration WHERE  email = '$u_email'";
    $result = mysqli_query($conn,$q);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck < 1) {

        header("Location: ../index.php?login=user_not_exist");
        exit();

    }else {
        if ($row = mysqli_fetch_assoc($result)) {

            if ($row['password'] == $u_pass) {

                $_SESSION['u_id'] = $row['id'];
                $_SESSION['u_name'] = $row['name'];
                $_SESSION['u_age'] = $row['age'];
                $_SESSION['u_gender'] = $row['gender'];
                $_SESSION['u_address'] = $row['address'];
                $_SESSION['u_email'] = $row['email'];
                $_SESSION['u_mobile'] = $row['mobile'];
                $_SESSION['u_pin'] = $row['pin'];
                $_SESSION['u_pass'] = $row['password'];
                header("Location: ../appointment.php?login=successful");
                exit();
            }else {
                header("Location: ../index.php?login=error&passoward=invalid");
                exit();

            }
        }
    }
    

}else {
    header("Location: ../index.php?login=username&pass=invalid");
    exit();
}
?>