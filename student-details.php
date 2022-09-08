<!DOCTYPE html>
<html>

<head>
    <title>Result Input</title>
    <link rel="stylesheet" type="text/css" href="css/student-details.css">
</head>

<body>
    <h1 style="color:#B739FE;">
        <center>Enter Student's Details</center>
    </h1>
    <table style="font-size: 20px; color: #B739FE" align="center">
        <form action="#" method="POST" enctype="multipart/form-data">
            <tr>
                <td align="right"><img src="https://img.icons8.com/nolan/64/student-male.png" /></td>
                <td><input class="input-box" type="text" name="std-name" placeholder="Student Name"></td>
            </tr>
            <tr>
                <td align="right"><img src="https://img.icons8.com/nolan/64/pencil.png" /></td>
                <td><input class="input-box" type="text" name="rl" placeholder="Roll Number"></td>
            </tr>
            <tr>
                <td align="right"><img src="https://img.icons8.com/nolan/64/father--v1.png" /></td>
                <td><input class="input-box" type="text" name="fname" placeholder="Father's Name"></td>
            </tr>
            <tr>
                <td align="right"><img src="https://img.icons8.com/nolan/64/pay-date.png" /></td>
                <td><input class="input-box" type="date" name="dob" placeholder="DD-MM-YYYY"></td>
            </tr>
            <tr>
                <td align="right"><img src="https://img.icons8.com/nolan/64/phone.png" /></td>
                <td><input class="input-box" type="text" name="cnt-no" placeholder="Contact Number"></td>
            </tr>
            <tr align="center">
                <td colspan="2"><br><br>-:Marks Details:-</td>
            </tr>
            <tr>
                <td align="right">Marks in CNS:</td>
                <td><input class="input-box" type="number" name="cns"></td>
            </tr>
            <tr>
                <td align="right">Marks in IOT :</td>
                <td><input class="input-box" type="number" name="iot"></td>
            </tr>
            <tr>
                <td align="right">Marks in CLOUD COMPUTING:</td>
                <td><input class="input-box" type="number" name="cc"></td>
            </tr>
            <tr>
                <td align="right">Marks in SOFTWARE ENGENEERING :</td>
                <td><input class="input-box" type="number" name="se"></td>
            </tr>
            <tr>
                <td colspan="2"><button class="button" type="submit" name="Submit" style="vertical-align:middle">
                        <span>Submit </span>
                    </button></td>
            </tr>
        </form>
    </table>
</body>

</html>
<?php
if (isset($_POST['Submit'])) {

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

		$sql = "INSERT INTO `result` ( `name`, `roll`, `fname`, `dob`, `contact`, `CNS`, `IOT`, `CC`, `SE`) VALUES ( '$std_name', '$std_roll', '$std_fname', '$std_dob', '$std_cont', '$cns', '$iot', '$cc', '$se')";


		$chk = mysqli_query($con , $sql);
		if($chk){
			echo "DATA INSERTED";
			echo "<script>alert('DATA INSERTED');</script>";
            
           
		}
		else
			echo "<script>alert('INSERTION FAILED');</script>";
	}
}
?>