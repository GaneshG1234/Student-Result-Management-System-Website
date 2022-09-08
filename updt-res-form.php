<!DOCTYPE html>
<html>

<head>
    <title>update result</title>
    <link rel="stylesheet" type="text/css" href="css/updt-res-form.css">
</head>

<body style="color: #B739FE">
    <div>
        <form action="#" method="post"><br>
            <h2> UPDATE FORM</h2>
            <br><br>
            <font color="#0303AC">
                Enter Roll Number to UPDATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </font>
            <input class="input-box" type="VALUE" name="rollno" placeholder="ROLL NUMBER"><br>
            <button class="button" type="submit" name="Submit" style="vertical-align:middle; margin-top: 10px">
                <span>Submit </span>
            </button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['update'])) {
	$con=mysqli_connect('localhost','root','','sw-project');
    if (!$con) {
       die("Connection failed");
    }
	else{
	//student details
    $std_name = $_POST['std-name'];
    $std_roll = $_POST['rl'];
    $std_fname = $_POST['fname'];
    $std_dob = $_POST['dob'];
    $std_cont = $_POST['cnt-no'];
	//marks details
    $cns = $_POST['cns'];
    $iot = $_POST['iot'];
    $cc = $_POST['cc'];
    $se = $_POST['se'];


	$sql="SELECT * FROM result";
	$res=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($res);

    $sqli = "UPDATE `result` SET `name` = '$std_name', `roll`= '$std_roll', `fname`='$std_fname', `dob`='$std_dob', `contact`='$std_cont', `CNS`='$cns', `IOT`='$iot', `CC`='$cc', `SE`='$se' WHERE roll = $std_roll";

    $chk = mysqli_query($con, $sqli);
	if($chk)
	{
		echo "DATA UPDATED";
		echo "<script>alert(DATA UPDATED)</script>";

	}
		
	else
		echo "<script>alert(DATA UPDATE FAILED)</script>";
	
		}
}

if (isset($_POST['Submit'])) {
	$con= mysqli_connect('localhost','root','','sw-project');
    if (!$con) {
       die("Connection failed");
    }
    else{
    	$std_roll =$_POST['rollno'];

    	$sql = "SELECT * FROM result";
    	$res = mysqli_query($con,$sql);
		$num_rows=mysqli_num_rows($res);

		if($num_rows>0){
			while($row=mysqli_fetch_array($res)){
				if($std_roll == $row['roll']){

	$sql="SELECT * FROM result";

	$res=mysqli_query($con,$sql);
	$num_rows=mysqli_num_rows($res);

	while($row=mysqli_fetch_array($res))
	{
		if($std_roll == $row['roll']){
			$std_name = $row['name'];
			$rollno = $row['roll'];
			$std_fname = $row['fname'];
			$std_cont = $row['contact'];
			$std_dob = $row['dob'];
			$cns = $row['CNS'];
			$iot = $row['IOT'];
			$cc = $row['CC'];
			$se = $row['SE'];
		}
	}
echo '
	<hr>
	<div >
		<br>
		<form action="#" method="POST" enctype="multipart/form-data">
		<table>		
			<th><br>
				<tr> STUDENTS DETAILS:--</tr>
				<br>
			</th>
			<th>
				<tr>NAME</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="std-name" value='; echo $std_name; echo'>
			</th>
			<br><br>
			<th>
				<tr>ROLL</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="rl" value='; echo $std_roll; echo'>
			</th>
			<br><br>
			<th>
				<tr>FATHER\'s NAME</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="text" name="fname" value='; echo $std_fname; echo'>
			</th>
			<br><br>
			<th>
				<tr>CONTACT</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="number" name="cnt-no" value='; echo $std_cont; echo'>
			</th>
			<br><br>
			<th>
				<tr>DATE OF BIRTH</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="date" name="dob" value='; echo $std_dob; echo'>
			</th>
			<br><br>
			
			<br><br>

		</table>
		<table>
			<th><br>
				<tr> MARKS DETAILS:--</tr>
				<br>
			</th>
			<br>
			<th>
				<tr>CNS</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="cns" value='; echo $cns; echo'>
			</th>
			<br><br>
			<th>
				<tr>IOT</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="text" name="iot" value='; echo $iot; echo'>
			</th>
			<br><br>
			<th>
				<tr>CC</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box"  type="text" name="cc" value='; echo $cc; echo'>
			</th>
			<br><br>
			<th>
				<tr>SE</tr>&nbsp;&nbsp;&nbsp;&nbsp;
				<tr><input class="input-box" type="text" name="se" value='; echo $se; echo'>
			</th>
			<br><br>
		</table>
		<div>
			<button class="button" type="submit" name="update" value="update" style="vertical-align:middle; margin-top: 10px">
                <span>UPDATE</span>
            </button>
		</div>
		</form>
	</div>
';
					$msg = "";
					break;
                }
				else{
					$msg= "ROLL NUMBERR NOT FOUND!!";
				}
            }
        }
    }
}
?>