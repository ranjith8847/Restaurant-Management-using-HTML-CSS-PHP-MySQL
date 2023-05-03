<html>
<body>
<h1><center>TABLE BOOKING</h1>
<br>
<br>
<h2>Two Seater Table</h2>
<a href="http://localhost/Delivery/table.php" target="_blank"><img src="https://i.pinimg.com/564x/a7/46/dc/a746dc18f299bba6ce17b67a66a910b7.jpg" alt="image not here" width="750" height="420"/></a>
<p><b><i>BOOKED If number of people are less than or equal to two and greater than zero</i></b></p>
<a href="http://localhost/Delivery/table.php">Click here to book a table</a>
<br>
<br>
<hr/>
<h2>Four Seater Table</h2>
<a href="http://localhost/Delivery/table.php" target="_blank"><img src="https://i.pinimg.com/564x/2e/d7/70/2ed77040f0c08895726d731792d8f62f.jpg" alt="image not here" width="750" height="420"/></a>
<p><b><i>BOOKED If number of people are less than or equal to four and greater than two</i></b></p>
<a href="http://localhost/Delivery/table.php">Click here to book a table</a>
<br>
<br>
<hr/>
<h2>Ten Seater Table</h2>
<a href="http://localhost/Delivery/table.php" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/S9XbRcnSkNVJjrk21pEf2Th4aifvm_597pju6USQhb-cgKzqvkMO2KgfRHFCg6UAUzfPuiv21ewOXef1Uu1oVnRNgxYA7cEjCFqoK0uTq2kLg-lUx_cwTkx7j3aSyqPEMdFLe7wsi0RjfDNO7FjZELaVdAm6MuqBPpOG4DhDFqy-XQJKGQogyJu-kVGVeIneqTJlP0KV" alt="image not here" width="750" height="420"/></a>
<p><b><i>BOOKED If number of people are less than or equal to ten and greater than four</i></b></p>
<a href="http://localhost/Delivery/table.php">Click here to book a table</a>
<br>
<br>
<hr/>
<h2>Twenty Seater Table</h2>
<a href="http://localhost/Delivery/table.php" target="_blank"><img src="https://i.pinimg.com/originals/24/33/50/243350cd4cb53e59e602164255908910.jpg" alt="image not here" width="750" height="420"/></a>
<p><b><i>BOOKED If number of people are less than or equal to twenty and greater than ten</i></b></p>
<a href="http://localhost/Delivery/table.php">Click here to book a table</a>
<br>
<br>
<hr/>
<br>
<br>
<hr/>



<style type="text/css">
.fstyle {
  font-family: Arial, Helvetica, sans-serif;
}
.d-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.d-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.d-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
</style>


<h1 class="fstyle">TABLE BOOKING STATUS</h><br>
<table class="d-table">
<thead>
<tr>
<th class="cell">date</th><br>
<th>slot</th>
<th>status</th>
</tr>
</thead>
<tbody>
<?php
//$username=$_POST['username'];
$conn=mysqli_connect("localhost","root","","delivery");
$sql="SELECT date,slot,status FROM tablebook WHERE date>CURDATE()";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>" .$row['date']. "</td><td>" .$row['slot']."</td><td>" .$row['status']."</td>";
}}
else{
echo "error";
}
mysqli_close($conn);
?>
</tbody>
</table>


</body>
</html>