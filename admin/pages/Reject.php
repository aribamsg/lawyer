<?php
include 'config.php';
if(isset($_GET['A']))
{
    $uid=$_GET['A'];
    $update=mysqli_query($con,"update tblappointment set status='Reject' where Id='$uid'");
    echo "<script>window.location.assign('allappointments.php')</script>";
}
?>