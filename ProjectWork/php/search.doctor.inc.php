<?php

    session_start();
        include_once 'config.php';

        $docCatagory = mysqli_real_escape_string($conn,$_POST['doctor']);
        
        $q = "SELECT * FROM doctor_list WHERE d_catagory = '$docCatagory'";
        $result = mysqli_query($conn, $q);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1) {
            
            echo "Doctor's are not available.";
            exit();
        } else {
            echo '<table style="width:600px;text-align:center;padding-top:10px;margin:0 auto;">
            <tr style="padding-top:10px;">
                <th style="width:200px;">Name</th>
                <th style="width:200px;">Info</th>
                <th style="width:200px;">Pin</th>
            </tr>';
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo ' 
                    <tr>
                   <td style="width:200px;">' . $row['d_name'] . '</td>
                    <td style="width:200px;">' . $row['d_detail'] . '</td>
                    <td style="width:200px;">' . $row['d_pin'] . '</td>
                     </tr>';
            }
            echo '</table>';
        }
        
   
?> 