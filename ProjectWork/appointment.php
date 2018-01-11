<?php
include_once 'header.php';
?>
        <div id="doc_lis_middel">
            <div id="appo">
                <div id="apo">
                    <h2 id="ap">Appointment</h2>
                </div>
                <div id="ap-table">
                    <?php
                    if (isset($_SESSION['u_id'])) {
                        echo '<table><tr><td>';
                        echo '<h3 id="us_nme">' . $_SESSION['u_name'] . '</h3>';
                        echo '</td><td>';
                        echo '<form action = "php/logout.inc.php" method = "post">
                                <button id = "log-btn" type = "submit" name = "submit">Log out</button>
                              </form>';
                        echo '</td></tr></table>';
                    } else {
                        echo '<form action = "php/login.inc.php" method = "post">';
                        echo '<table><tr><td>';
                        echo '<input class ="log" type = "email" name = "mail" value = "" placeholder="Enter Your Email Here" required>';
                        echo '</td><td>';
                        echo '<input class ="log" type = "password" name = "pass" value = "" placeholder="Enter Your Password Here" required>';
                        echo '</td><td>';
                        echo '<button id = "btn" type = "submit" name = "submit">Log in</button>';
                        echo '</td></tr></table></form>';
                    }
                    ?>
                </div>

            </div>

            <div id="appoin_form"> <a href="register.php">Register</a></div>
            <hr style="margin-Top:2px; height:3px;background:#333232;">
            <h2 style="color:#300000;padding:3px;font-size:15px;"> <marquee behavior="scroll" direction="left" style="padding-top:5px;"> Log in First !!!</marquee> </h2>
            <hr style="margin-Top:2px; height:3px;background:#333232;">
            <?php 
            if (isset($_SESSION['u_id'])) {
                echo '<div>
                <div id="ent_pt_det">
                    <h3 style="color:black;margin-Top:2px; border: 2px solid #5F5B5B;font-size:15px;color:white; padding-Top:5px; padding-bottom:5px; padding-Left:10px;background:rgb(26, 26, 25);">New Appointment</h3>
                    <div id="apply_for_appointment">
                        <form action="php/appoint.inc.php" method = "post">
                            <span> Enter Doctor ID:  </span>
                            <input id="doc_id" type="text" placeholder="Enter Doctor ID Here" value="" name="doctor_pin" required>
                            <input id="pat_sub" type="submit" name="submit" value="Submit">
                            </form>
                            <br><br><br>';
                            if (isset($_SESSION['d_pin'])) {
                                echo '<form action="php/appoint.inc.php" method= "post">';
                                echo '<p id="pati_details">';
                                echo 'Name : ' . $_SESSION['u_name'];
                                echo '<br>';
                                echo 'Age : ' . $_SESSION['u_age'];
                                echo '<br><br>';
                                echo 'Doctor Name : ' . $_SESSION['d_name'];
                                echo '<br>';
                                echo 'Your Serial No. : ' . $_SESSION['u_serial'];
                                echo '<br><br>';
                                
                                echo 'Select Appointment Date : ';
                                echo '<input type = "date" name = "appointDate">';
                                echo '
                                    <br>
                                    <input id="pat_sub" type="hidden" name="p_pin" value="' . $_SESSION['u_pin'] . '" >
                                    <input id="pat_sub" type="hidden" name="d_name" value="' . $_SESSION['d_name'] . '" >
                                    <input id="pat_sub" type="hidden" name="d_pin" value="' . $_SESSION['d_pin'] . '" >
                                    <input id="pat_sub" type="hidden" name="p_serial" value="' . $_SESSION['u_serial'] . '" >
                                    <br><br>
                                    <input id="pat_sub" type="submit" name="done" value="Done" >
                                    </form>';
                                    }   
                                echo '</p>';


                    echo '
                    </div>
                    <div style="clear:both"></div>
                    </div>
                    <div id="or"> or </div>
                    <div id="sow_pt_det">
                    <h3 style="color:black;margin-Top:2px; border: 2px solid #5F5B5B;font-size:15px;color:white; padding-Top:5px; padding-bottom:5px; padding-Left:10px;background:hsl(60, 2%, 9%);">Appointment Details</h3>
                    <div id="pat_det_inp"> 
                        <form action="php/appoint.inc.php" method = "post">
                        <span> Enter Your PIN: </span>
                            <input id="pat_pin" type="text" name="pin" placeholder="Enter Your PIN Here" min="0" max="100000000"  value="" required>
                            <input id="pat_sub" type="submit" name="search" value="Submit">
                        </form>
                    </div><div>';
                            if (isset($_SESSION['id'])) {
                                echo ' <p id = "pati_search_details"> ';
                                echo ' Hi, '. $_SESSION['u_name'];
                                echo ' <br> <br>';
                                echo ' You are appointed to ' . $_SESSION['dName'];
                                echo ' <br> <br> ';
                                echo ' Your Serial No : ' . $_SESSION['serial'];
                                echo ' <br> <br> ';
                                echo ' Appointment Date : ' . $_SESSION['appointment'];
                                echo ' </p> ';
                            }
 
                echo '</div>
                <div style="clear:both"></div>
            </div>';
            }else {
                echo '<h3 style="padding-left:300px;padding-top:90px;color: rgb(27, 27, 27)"> Log in First To Get Your Appointment </h3>';
            }
            
            ?>


        </div>
        <div style="clear:both"></div>
    </main>
<?php 
    include_once 'footer.php';
?>