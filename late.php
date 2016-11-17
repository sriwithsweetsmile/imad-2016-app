<?php
date_default_timezone_set("Asia/Kolkata");
$servername = 'localhost:5432';
$username = 'sriwithsweetsmile';
$password = 'db-sriwithsweetsmile-44469';
$dbname = 'sriwithsweetsmile'
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "<style>body
{
  background-color:#006400 ;
  font-family: 'Hind Guntur', sans-serif;
  color: white;
  font-size:30px;
}</style><center>
<script>
function goBack() {
    window.history.back();
}
</script>";
if(!$conn)
{
 echo "Failed to connect";  
}
else
{
 echo "Succesfully connected to server. <br><br>";
 $time= date('h:i:s A l jS \of F Y ');
 $rol=$_POST['rno'];
 echo $rol." ".$time;
 $insr = "insert into latetb values('$rol','$time')";
 $res=mysqli_query($conn,$insr);
 if(!$res)
 {
     echo "<br><br>Faid to report.".mysql_error();
 }
 else
 {
     echo "<br><br>Reported sucessfully.";
 }
}
 echo " <button onclick="goBack()">Go Back</button></center>";
?>
