<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>

<div class="container justify-content-center mt-3">
    <center>
        <img src="Plugin/Img/oregonian-o-logo-240w.png" width="90px" alt="">
        <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>

        <?php

        if(isset($_GET['empty']))
        {
            $Message = $_GET['empty'];
            $Message ="Please fill the blank";
            ?>
            <div class="alert alert-danger col-md-6"><?php echo $Message?></div>
            <?php
        }
        ?>


    </center>
    <div class="row main">
        <div class="main-login m-auto col-md-6">
            <form class="form-horizontal" method="post" action="registration_code.php">
                <div class="form-group">
                    <label class="cols-sm-2 control-label" for="first name">First name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="firstname"   placeholder="Enter your first name">
                        </div>
                        <div class="message" id="message_username">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="last name" class="cols-sm-2 control-label">Last Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="text" class="form-control" name="lastname"  placeholder="Enter your last name">
                        </div>
                        <div class="message" id="message_name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="cols-sm-2 control-label" for="lastname">Gender:</label>
                    <div class="col-sm-10">
                        <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                        <label class="radio-inline ml-2"><input type="radio" name="gender" value="Female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="message" id="message_mail">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                        </div>
                        <div class="message" id="message_password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="sign-up" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>