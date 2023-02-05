<?php
include('../constant/connect.php');
$month=$_GET['mm'];
$year=$_GET['yy'];

$query="select DISTINCT u.userid,u.username,u.gender,u.mobile,
u.email,u.joining_date,a.state,a.city,
e.paid_date,e.expire,p.planName,p.amount,p.validity from users u 
INNER JOIN address a on u.userid=a.id 
INNER JOIN enrolls_to e on u.userid=e.uid
INNER JOIN plan p on p.pid=e.pid
where e.paid_date  like '".$year."-".$month."___'";
  

$res=mysqli_query($con,$query);
echo "<tbody>";

$sno    = 1;
$totalamount=0;
if (mysqli_affected_rows($con) != 0) {

	echo "<thead>
				<tr>
					<th>Nr:</th>
					<th>ID e antarit</th>
          			<th>Validimi</th>
					<th>Kontakti</th>
					<th>Gjinia</th>
					<th>Shteti</th>
					<th>Data Pageses</th>
					<th>Data Skadimit</th>
					<th>Emri Planit</th>
					<th>Çmimi</th>
					<th>Validimi</th>
				</tr>
	</thead>";

    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
      

                echo "<tr><td>".$sno."</td>";
                
                echo "<td>" . $row['userid'] . "</td>";

                echo "<td>" . $row['username'] . "</td>";

                echo "<td>" . $row['mobile'] . "</td>";


                echo "<td>" . $row['gender'] . "</td>";

                echo "<td>" . $row['state'] . "</td>";

                echo "<td>" . $row['paid_date'] . "</td>";

                echo "<td>" . $row['expire'] . "</td>";

                echo "<td>" . $row['planName'] . "</td>";

                echo "<td>" . $row['amount'] . "</td>";

                echo "<td>" . $row['validity'] . " Month</td>";
                
                $totalamount=$totalamount+$row['amount'];
                $sno++;
            
        
    }

 	$monthName = date("F", mktime(0, 0, 0, $month, 10));

    echo "<tr><td colspan=11 align='center'><h3>Çmimi total gjatë muajit ".$monthName." është $".$totalamount."</h3></td></tr>";

}
else{
		$monthName = date("F", mktime(0, 0, 0, $month, 10));
		echo "<h2>No Data found On ".$monthName." ".$year."</h2";
}
echo "</tbody>";


?>
