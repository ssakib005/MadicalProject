<?php
    include_once 'header.php';
?>
        <div id="middel">
            <iframe src="post.php" height="495" width="640" frameborder="0"></iframe>
        </div>
        <div id="right">
            <h3 style="background:#161414; padding-top:8px;padding-bottom:8px;text-align:center;">Log in</h3>
            <div id="log_in">
                        <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<h3 style="color: black;padding-bottom:48px;">' . $_SESSION['u_name'] . '</h3>';
                            echo '<form action = "php/logout.inc.php" method = "post">
                            <input id="log_in_user" type="submit" name="submit" value="Log out" style="margin-bottom:10px;">
                          </form>';
                        } else {
                            echo '<form action="php/login.inc.php" method="post">
                                    <input id="email" type="email" name="mail" placeholder="Enter Your Email Here" value="" required> <br><br>
                                    <input id="passw" type="password" name="pass"  placeholder="Enter Your Password Here" value="" required><br><br>
                                    <input id="log_in_user" type="submit" name="submit" value="Log in">
                                  </form>';
                        }
                        ?>
            </div>
            <hr style="margin:2px;height:2px;border:1px solid #AAA8A8;">
            <h4 style="text-align:center; color:#3A3838;">or</h4>
            <hr style="margin:2px;height:2px;border:1px solid #AAA8A8;">
            <div style="text-align:center">
            <a href="register.php"><button id="sign_up_but" type="button">Register</button></a>
            </div>
            <div id="location">
                <h3 style="background:#161414; padding-top:8px;padding-bottom:8px;text-align:center; margin-top:4px;">Location</h3>
                <p style="padding:10px;font-size:18px;padding-top:25px;color:#ffffff; font-weight:bold; background-color:#494646;height:148px;">89/1, Panthapath, Dhaka, Bangladesh <br> 
                    Phone: +880-2-9131901 <br>
                    Fax: +880-2-9129971 <br>
                    x-madical center</p>
            </div>
        </div>
        <div style="clear:both"></div>
    </main>
<?php 
    include_once 'footer.php';
?>
