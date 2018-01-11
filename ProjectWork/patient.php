<?php
    include_once 'header.php';
?>
        <div id="doc_lis_middel">
            <div id="appo">
                <div id="apo">
                    <h2 id="ap">Patient</h2>
                    <?php
                        if (isset($_SESSION['d_id'])) {
                        echo '<form action="php/patient.inc.php" method="post">
                            <input id = "patient" type = "text" name = "patient_pin" value = "" placeholder="Enter Patient Id Here">
                            <button id = "btn" type = "submit" name = "submit" > Submit </button>
                            </form>';
                        }
                    ?>
                </div>
                <div id="ap-table">
                    <?php
                    if (isset($_SESSION['d_id'])) {
                        echo '<table><tr><td>';
                        echo '<h3 id="do_nme">' . $_SESSION['d_name'] . '</h3>';
                        echo '</td><td>';
                        echo '<form action = "php/logout.inc.php" method = "post">
                                <button id = "btn" type = "submit" name = "submit">Log out</button>
                              </form>';
                        echo '</td></tr></table>';
                    } else {
                        echo '<form action = "php/doctor.login.inc.php" method = "post">';
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
            <div>
                <?php
                if (isset($_SESSION['p_id'])) {
                    echo '<form>
                    <table id="doctor-prescription">
                        <tr>
                            <td>';
                    echo 'Name: <input type="text" name="p_name" value="'. $_SESSION['p_name'] . '" style="border:0;font-size: 15px;">';
                    echo '</td><td>';
                    echo 'Age: <input type="text" name="p_age" value="' . $_SESSION['p_age'] . '" style="border:0;font-size: 15px;">';
                    echo '</td><td>';
                    echo 'Gender: <input type="text" name="p_gender" value="' . $_SESSION['p_gender'] . '" style="border:0;font-size: 15px;">';
                    echo '</td><td>';
                    echo 'PID: <input type="text" name="p_pin" value="' . $_SESSION['p_pin'] . '" style="border:0;font-size: 15px;">';
                    echo '</td></tr></table>';
                    echo '<div id="pres-left">
                        <h2 style="padding-left:10px;padding-top:10px;font-style: italic;">Rx,</h2>
                        <select class="medicineName" id="medicine" style="width:120px;padding-left:20px;padding-right:20px;height:30px;margin-left:5px;">
                            <option >Select</option>
                            <option value="Napa">Napa</option>
                            <option value="Maxpro">Maxpro</option>
                            <option value="Monas">Monas</option>
                        </select>
                        <select class="medicineTime" id="time" style="width:120px;padding-left:20px;padding-right:20px;height:30px;margin-left:5px;">
                            <option >Select</option>
                            <option value="1+0+0">1+0+0</option>
                            <option value="1+1+0">1+1+0</option>
                            <option value="1+1+1">1+1+1</option>
                            <option value="0+1+0">0+1+0 </option>
                            <option value="0+0+1">1+0+0</option>
                            <option value="1+0+1">1+0+1</option>
                            <option value="0+1+1">0+1+1</option>
                        </select>
                        <select class="medicineDay" id="day" style="width:120px;padding-left:20px;padding-right:20px;height:30px;margin-left:5px;">
                            <option>Select</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                        </select>
                        <button type="button" id="add" onclick="AddtoCart()" style="padding-left:20px;padding-right:20px;height:30px;margin-left:5px;">Add</button>
                        <div id="prescription-table" style="height:200px;"> 
                        <table id="dataTable" style="margin:10px;padding:10px;">
                            <thead>
                                <tr>
                                    <th>Medicine</th>
                                    <th>Time</th>
                                    <th>Day</th>
                                </tr>
                            </thead>
                            <tbody  style="padding-left:40px;">
                            </tbody>

                        </table>
                        </div>';
                        ?> 
                        <button type="button" onclick="record()" id="btndone" style="float:left;padding-left:20px;padding-right:20px;height:30px;margin-left:5px;margin-top:60px;">Submit</button>
                        <!-- <form action="php/print.inc.php" method="POST">
                            <button type = "button" name="print" style = "float:left; padding-left:20px;padding-right:20px;height:30px;margin-left:5px;margin-top:60px;"> Print </button> ';
                        </form> -->
                        
                    <?php 
                        echo '</div>
                    <div id="pres-right">
                        
                    </div></form>';
                    }else {
                        if (isset($_SESSION['d_id'])) {
                            echo '<h2 style="padding-top:200px;"><center>Search For Patient</h2>';
                        }else {
                            echo '<h2 style="padding-top:200px;"><center>Please Login First</h2>';
                        }
                    }
                ?>  
            </div>

        </div>
        <div style="clear:both"></div>
    </main>

<?php
    include_once 'footer.php';
?>