<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>

<div class="container-fluid justify-content-center col-md-4 mt-3">
    <form class="form-sign in" action="login_code.php" method="post">
        <center>
            <img src="Plugin/Img/oregonian-o-logo-240w.png" width="90px" alt="">
            <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>

            <?php

            if(isset($_GET['invalid']))
            {
                $Message = $_GET['invalid'];
                $Message ="Invalid password or email!!";
                ?>
                <div class="alert alert-danger col-md-12"><?php echo $Message?></div>


                <?php
            }
            ?>

            <?php

            if(isset($_GET['empty']))
            {
                $Message = $_GET['empty'];
                $Message ="Input your Email or Password";
                ?>
                <div class="alert alert-danger col-md-12"><?php echo $Message?></div>
                <?php
            }
            ?>


        </center>
        <div class="form-group">
            <label >Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" autofocus="" >
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password"  >
        </div>
        <div class="checkbox mb-3">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
    </form>
</div>