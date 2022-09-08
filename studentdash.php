<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/studentdash.css">
	
	<title>Student Dashboard</title>
</head>
<body> <div  class="bgimg">

<div id="non-printable"><?php  include('admin-inc/topbar.php');?> </div>

<br><br><id='non-printable'hr>
<marquee id="non-printable" bgcolor="#CCCEDA" style="opacity: 0.6; color:green"; width="100%" direction="left" height="50px"><br>
Belive in originality&nbsp;&nbsp;!! Results are anounced so keep calm you will definetly pass  !!&nbsp;&nbsp;Belive in originality
</marquee> <id='non-printable'hr>      

<center>
    <h1 id="non-printable " style="color:#fff">Student Result Management System</h1>
<div id="non-printable">
		<form action="print-student.php" method="POST">
		<!-- <center><h3>School Result Management</h3> -->
		<!-- <h2>System</h2></center> -->
        <table>
            <tr>
           	    <th>
                    <label style="color:#fff">Enter Your Roll Id</label>
           	    </th>
           	    <td> 
           	        <input class="input-box" type="text" name="roll">
                </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>

            <tr>	   
               	<th>
           	        <label style="color:#fff">Enter D. O. B.</label>
           	    </th> 
           	    <td>
           	        <input class="input-box" type="date" name="dob">
           	    </td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr><tr>
                <th></th>
                <td></td>
            </tr>
            <tr> 
                <th>
                    <button class="buton" type="submit" name="search" style="vertical-align:middle">
                        <span>Search </span>
                    </button>

                </th>
                <td> 
                    <button class="buton" type="reset" name="reset" style="vertical-align:middle">
                        <span>Reset </span>
                    </button>
                </td>
            </tr>
        </table>
    </form><br><br><br><br><br><br><br><br><br>
    <p ><small style="color:#fff">Copyright © GANESH-TEAM</small></p>

    <br><br><br><br><br><br><br><br><br><br><br>
</div> 
</center>

    
</body>
</html>





