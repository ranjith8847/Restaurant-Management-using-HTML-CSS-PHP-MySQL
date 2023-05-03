<html>
<body>
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
<h1 class="fstyle">USER DETAILS</h><br>
<table class="d-table">
<thead>
<tr>
<th class="cell">username</th><br>
<th>email</th>
</tr>
</thead>
<tbody>
<?php
$username=$_POST['username'];
$conn=mysqli_connect("localhost","root","","delivery");
$sql="SELECT * FROM signup WHERE username ='$username'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>" .$row['username']. "</td><td>" .$row['email']."</td>";
}}
else{
echo "error";
}
mysqli_close($conn);
?>
</tbody>
</table>

<br>
<h2 class="fstyle">ORDERS</h2>
<table class="d-table">
<thead>
<tr>
<th>order id</th>
<th>item name</th>
<th>flavour</th>
<th>quantity</th>
<th>address</th>
<th>email</th>
<th>phone</th>
<th>diet</th>
<th>cost</th>
</tr>
</thead>
<tbody>
<?php
$username=$_POST['username'];
$conn=mysqli_connect("localhost","root","","delivery");
$sql="SELECT * FROM ordersnew WHERE username='$username'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>" .$row['orderid']. "</td><td>" .$row['item']."</td><td>" .$row['flavour']. "</td><td>" .$row['quantity']. "</td><td>" .$row['address']. "</td><td>" .$row['email']. "</td><td>" .$row['phone']. "</td><td>" .$row['diet']. "</td><td>" .$row['cost']. "</td>";
}}
else{
echo "No Orders placed";
}
mysqli_close($conn);
?>
<tbody>
</table>

<br>
<h2 class="fstyle">TABLES BOOKED</h2>
<table class="d-table">
<thead>
<tr>
<th>id</th>
<th>date</th>
<th>slot</th>
<th>status</th>
<th>mobile</th>
<th>table type</th>
</tr>
</thead>
<tbody>
<?php
$username=$_POST['username'];
$conn=mysqli_connect("localhost","root","","delivery");
$sql="SELECT * FROM tablebook WHERE username='$username'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
echo "<tr><td>" .$row['id']. "</td><td>" .$row['date']."</td><td>" .$row['slot']. "</td><td>" .$row['status']. "</td><td>"  .$row['mobile']. "</td><td>"  .$row['tabletype']. "</td>";
}}
else{
echo "no bookings yet";
}
mysqli_close($conn);
?>

</tbody>
</table><br><br><br>
<?php echo "<a href='http://localhost/Delivery/homepage.php'>go back to home page</a>" ; ?>
</body>
</html>