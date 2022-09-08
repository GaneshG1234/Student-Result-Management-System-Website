<?php


if(isset($_POST['search'])) {
    

    $con=mysqli_connect('localhost','root','','sw-project');
    if (!$con) {
      die("Connection failed");
    }
    else{
        $roll = $_POST['roll'];
        $dob = $_POST['dob'];//do md5 at last

        // here roll and dob are called from data base
        $sql = "SELECT roll,dob FROM result ";
        $res = mysqli_query($con,$sql);
        $num_row = mysqli_num_rows($res);

        if($num_row > 0){
            while($row = mysqli_fetch_array($res)){

                //this is to check if either of the fields are vacaent
                if (empty($roll) || empty($dob)) {
                    $msg = 'requierd';
            		if($msg == 'requierd') echo '<script>alert("please fill all the fields")</script>';
                    break;
                }   
                //this part is to chk if the pass and user name are correct
                else if($roll == $row["roll"] && $dob == $row["dob"]){
                    echo '<script>alert("Result Declared scroll down to see")</script>';
                    $msg = 'yes';
                    break;
                }
                // this part is to accept 
                else {
                    $msg = 'no';
                }
                            
            }
			if($msg == 'no') echo '<script>alert("Invalid Details")</script>';
        }
        else
            echo '<script>alert("Result Not Declared")</script>';
    }
    $sql1="SELECT * FROM result WHERE roll = '$roll' AND dob = '$dob'";
            
    
    $res=mysqli_query($con,$sql1);
    $num_rows=mysqli_num_rows($res);
    

    if($num_rows>0)
    {
        while($row=mysqli_fetch_array($res))
        {
            echo "<div id='printable' ><id='non-printable'hr>";
            echo "<br><br><center><h1>Student's Result</h1></center>";
            echo "<br><center><h2> GOVT. POLYTECHNIC BERHAMPUR,GANJAM-760001</h2></center>";
            echo "<table cellspacing='0' class='box' align='center' border='2px solid black'>";
            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Student's Name:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['name'];
            echo "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Roll No.:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['roll'];
            echo "</td>";
            echo "</tr>";
           
           echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Father's Name:</td>";
            echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;<td>";
            echo "<td style='font-size:20px;'>";
            echo $row['fname'];
            echo "</td>";
            echo "</tr>";
           
           echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Date of Birth:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['dob'];
            echo "</td>";
            echo "</tr>";
           
            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Contact No.:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['contact'];
            echo "</td>";
            echo "</tr>";
           
            echo "<tr>";
           
            echo "<tr>";
            echo "<br><br><td align='center' colspan='2' style='font-size:20px;'>-:Marks Details:-</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in CNS:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['CNS'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in IOT:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['IOT'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in CC:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['CC'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='right' style='font-size:20px;'>Marks in SE:</td>";
            echo "<td><td>";
            echo "<td style='font-size:20px;'>";
            echo $row['SE'];
            echo "</td>";
            echo "</tr>";

            echo "</table>";
            echo "</div>";           
        }
    }  

    if($msg == 'yes') echo "<br><br><center><button id='non-printable' class='buton'  onclick='javascript:window.print();'><span>Print</span></button>
        ";
}
?>