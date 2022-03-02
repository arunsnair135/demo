<?php
$conn=mysqli_connect($s,$u,$p,$d);
if(!$conn){
    die("DB connection error");
}
$r=mysqli_querry("SELECT * FROM details");
?>
<table border="2">
   <tr>
   <th>ROLL NUMBER</th>
   <th>Name</th>   
    <th>COURSE </th>
    </tr>
    <?php
    while($a=msqli_fetch_row($r))
</table>