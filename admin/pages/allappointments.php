<?php 
include 'config.php';
include 'admin_header.php'
?>
<div class="container-fluid"><br><br>
<h1 class="h3 mb-4 " style="text-align:center;">All Appointments</h1>

<hr size="5" class="bg-dark">
<table class="table table-danger table-sm table-hover" id="myTable">
<thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Contact Num</th>
        <th>Appointment Date</th>
        <th>Appointment Service</th>
        <th>Lawyer Name</th>
        <th>Status</th>
        <th>Action</th>

        
    </tr>
</thead>
<tbody>
<?php
$select=mysqli_query($con, "select * from tblappointment");
foreach($select as $data)
{
echo"
<tr>
<td>$data[Id]</td>
<td>$data[Name]</td>
<td>$data[Contactnum]</td>
<td>$data[Appointmentdate]</td>
<td>$data[Appointmentservice]</td>
<td>$data[Lawyername]</td>
<td>$data[Status]</td>
<td>
<a href='Approve.php?A=$data[Id]' class='btn btn-success'>Approve</a>
<a href='Reject.php?A=$data[Id]' class='btn btn-danger'>Reject</a>

</td>
</tr>
";
}

?>


