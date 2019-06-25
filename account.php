<!--
Into this file, we write a code for display user information.
-->

<?php
include_once('link.php');
include_once('header1.php');
include_once ('connection.php');


$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM register1 WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $fname = $row["Firstname"];
        $lname = $row["Lastname"];
        $email = $row["Email"];
        $gender = $row["Gender"];
    }
}
?>
<div id="account" class="col-auto">
<div class="col-lg-6 col-sm-6 container-fluid">
    <div class="card hovercard">
<!--        <div class="card-background">-->
<!--            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">-->
            <!-- http://lorempixel.com/850/280/people/9/ -->
<!--        </div>-->
        <div class="useravatar text-center">
            <img alt="" src="Plugin/Img/DSC_0009.jpg" width="140px">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $fname." ".$lname; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td>First Name</td>
          		<td><?php echo $fname; ?></td>
          	</tr>
          	<tr>
          		<td>Last Name</td>
          		<td><?php echo $lname; ?></td>
          	</tr>
          	<tr>
          		<td>Gender</td>
          		<td><?php echo $gender; ?></td>
          	</tr>
          	<tr>
          		<td>Email</td>
          		<td><?php echo $email; ?></td>
          	</tr>
          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div>    
