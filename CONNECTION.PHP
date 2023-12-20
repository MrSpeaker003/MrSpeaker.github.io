<?php
$con=mysqli_connect('localhost','root','', 'Yobe');

$FullName=$_POST['FullName'];
$UserName=$_POST['UserName'];
$BusinessCentreAddress=$_POST['BusinessCentreAddress'];
$PhoneNumber=$_POST['PhoneNumber'];
$EmailAddress=$_POST['EmailAddress'];
$Computers=$_POST['Computers'];
$Printers=$_POST['Printers'];
$Cartride=$_POST['Cartride'];
$Torner=$_POST['Torner'];
$Ink=$_POST['Ink'];

$sql="INSERT INTO Nguru VALUES('$FullName','$UserName','$BusinessCentreAddress','$PhoneNumber','$EmailAddress', '$Computers', '$Printers', '$Cartride', '$Torner', '$Ink')";
if(mysqli_query($con,$sql)){

    echo"REGISTRATION SUCESSFUL";

}
    else{
        echo"FAILED TO REGISTER!!!";
    }
mysqli_close($con);
?>