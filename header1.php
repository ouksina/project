<!--
this is second header file which is visible after login.
-->

<?php
session_start();
$email = $_SESSION['email'];
?>

<html>
<head>
    <script src="Plugin/Plug/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Plugin/Plug/css/bootstrap.min.css">
    <script type="text/javascript" src="Plugin/jquery-3.3.1.js"></script>

</head>
<body>




	<div class="container-fluid">
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
            <div class="dropdown navbar-light mt-2 mr-2" id="right">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
                    <span class="caret"></span></button>

                <ul class="dropdown-menu col text-lg-center">
                    <li><a href="account.php">Account</a></li>
                    <li><a href="Login.php">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
	</div>

</body>
</html>


