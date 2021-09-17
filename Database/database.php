<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "jobs_hub";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>