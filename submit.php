<?php
$con = mysqli_connect('localhost', 'root', 'killol','killol');
$name = $_POST['name'];
$location = $_POST['location'];
$pincode = $_POST['pincode'];
$complaintrank = $_POST['complaintrank'];
$sql = "INSERT INTO `VCSC` (`Name`, `Location`,`Pincode`, `Complaint Rank`) VALUES ('$name', '$location','$pincode', '$complaintrank')";
$rs = mysqli_query($con, $sql);
$sql1 = "select * from VCSC order by `Complaint Rank`";
$rs1 = mysqli_query($con, $sql1);
if($rs)
{
  if($rs1)
  {
    echo "Complaint Registered";
  }
}
else
{
  echo "Error Occured";
}
?>