<?php
include 'lawyer_header.php';
include 'config.php'
?>

<div class="container-fluid"><br><br>
<h1 class="h3 mb-4 " style="text-align:center;">My Appointments</h1>

<hr size="5" class="bg-dark">
<table class="table table-dark" id="myTable">
<thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Contact Num</th>
        <th>Appointment Date</th>
        <th>Appointment Service</th>
        <th>Lawyer Name</th>
        <th>Status</th>
        

        
    </tr>
</thead>
<tbody>
<?php
$select=mysqli_query($con,"SELECT * FROM lawyer_signup join `tblappointment` on lawyer_signup.Id=tblappointment.Lawyername where Status= 'Approve' and ");
//$select=mysqli_query($con, "select * from tblappointment where Status= 'Approve' ");
foreach($select as $data)
{
echo"
<tr>
<td>$data[Id]</td>
<td>$data[Name]</td>
<td>$data[Contactnum]</td>
<td>$data[Appointmentdate]</td>
<td>$data[Appointmentservice]</td>
<td>$data[First_Name]</td>
<td>$data[Status]</td>

</tr>
";
}

?>
</tbody>
<?php
include 'lawyer_footer.php'

?>