<?php 
include_once 'header.php';
?>
        <div id="doc_lis_middel">
            <div><h2 id="middel_doc_H3_0">Register</h2></div>
            <div id="form">
                <form id="reg_form" action="php/signup.inc.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <h4 class="inti">Name : * </h4>
                            </td>
                            <td>
                                <input class="data" type="text" name="user_name" placeholder="Enter Your Name" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="inti">Age : *</h4>
                            </td>
                            <td>
                                <input class="data" type="text" name="user_age" placeholder="Enter Your Age" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="inti">Gender : *</h4>
                            </td>
                            <td>
                                <input class="data" type="text" name="user_gender" placeholder="Enter Your Gender" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="inti">Address : *</h4>
                            </td>
                            <td>
                                <input class="data" type="text" name="user_address" placeholder="Enter Your Address" required/>
                            </td>
                        </tr>  
                        <tr>
                            <td>
                                <h4 class="inti">Email : </h4>
                            </td>
                            <td>
                                <input class="data" type="email" name="user_email" placeholder="Enter Your Email" required/>
                            </td>
                        </tr>                      
                        <tr>
                            <td>
                                <h4 class="inti">Mobile No : *</h4>
                            </td>
                            <td>
                                <input class="data" type="number" name="user_mobile" placeholder="Enter Your Mobile Number" required/>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <h4 class="inti">PIN : *</h4>
                            </td>
                            <td>
                                <input class="data" type="number" name="user_pin" placeholder="Enter Your PIN" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="inti">Password : *</h4>
                            </td>
                            <td>
                                <input class="data" type="password" name="user_pass" placeholder="Enter Your Password" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="inti_signup" type="submit" name="submit" value="Submit"/>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php

                ?>
            </div>

        </div>
        <div style="clear:both"></div>
    </main>
<?php 
    include_once 'footer.php';
?>



