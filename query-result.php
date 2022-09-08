<?php
$con=mysqli_connect('localhost','root','','sw-project');
if (!$con) {
  die("Connection failed");
}
else{

	$sql="SELECT*FROM result";
	$res=mysqli_query($con,$sql);
	$num_rows=mysqli_num_rows($res);
	echo " 
    <table border='1' cellspacing='0'  width='90%'>
        <thead>
	        <tr>
	            <th>ID</th>
	            <th>Student Name</th>
	            <th>Roll Id</th>
	            <th>Fathers Name</th>
	            <th>Contact</th>
	            <th>Date-of-Birth</th>
	            <th>CNS</th>
	            <th>IOT</th>
	            <th>CC</th>
	            <th>SE</th>
	        </tr>
        </thead>";
        if($num_rows>0)
	{
		while($row=mysqli_fetch_array($res))
		{
			echo'<tbody>';
				echo'<tr>';

					echo'<td>';
					echo $row['id'];
					echo '</td>';

					echo'<td>';
					echo $row['name'];
					echo '</td>';

					echo'<td>';
					echo $row['roll'];
					echo '</td>';

					echo'<td>';
					echo $row['fname'];
					echo '</td>';

					echo'<td>';
					echo $row['contact'];
					echo '</td>';

					echo'<td>';
					echo $row['dob'];
					echo '</td>';

					echo'<td>';
					echo $row['CNS'];
					echo '</td>';

					echo'<td>';
					echo $row['IOT'];
					echo '</td>';

					echo'<td>';
					echo $row['CC'];
					echo '</td>';

					echo'<td>';
					echo $row['SE'];
					echo '</td>';

				echo'</tr>';
			echo'</tbody>';
			echo'<br>';
		}
	}
	else
	{
		echo"NO DATA FOUND";
	}
}

?>