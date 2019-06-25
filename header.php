<!--
this is header file which is visible in registration and login page.
-->
<?php
include_once('link.php');

?>

<div class="nav justify-content-end bg-dark">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="home.php"><button type="button" class="btn btn-outline-success">Home</button></a>
        </li>
    </ul>
    <div class="ml-auto">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="Login.php"><button type="button" class="btn btn-outline-primary">Sin in</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Registration.php"><button type="button" class="btn btn-outline-primary">Sign up</button></a>
            </li>
        </ul>
    </div>
</div>