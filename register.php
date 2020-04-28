<?php
$sap= $_POST['sap']
$n= $_POST['n'];
$b= $_POST['b'];
$s= $_POST['s'];
$m= $_POST['m'];
$con= mysql_connect("localhost", "root","");
 
//$con= mysqli_connect("localhost","root","","devopsb1");
mysql_select_db("devopsb1", $con);
$q= ïnsert into registerb1 values($sap,'$n','$b','$s',$m)";
mysql_query($q);
//mysql_query($con, $q);
echo "Successfully registered";