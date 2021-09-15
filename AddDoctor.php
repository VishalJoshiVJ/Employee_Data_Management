<!DOCTYPE html>
<html>
    <head>
        <title>New Doctor</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        
            <h1>Enter Doctor Information</h1>
            <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                Name : <input type="text" name="dname" class="form-control" placeholder="Doctor name"><br><br>
                    </div>
                <div class="form-group">
                Id : <input type="text" name="did" class="form-control" placeholder="Doctor ID"><br><br>
                    </div>
                <div class="form-group">
                Date of Birth : <input type="text" name="dob" class="form-control" placeholder="eg.: 01-jan 2001"><br><br>
                    </div>
                <div class="form-group">
                Phone No : <input type="text" name="phone" class="form-control" placeholder="Dr Ph. No"><br><br>
                    </div>
                <div class="form-group">
                Dept No. : <input type="text" name="dno" class="form-control" placeholder="Doctor dept No."><br><br>
                    </div>
                <div class="form-group">
                Speciality : <input type="text" name="speciality" class="form-control" placeholder="Doctor speciality"><br><br>
                    </div>
                <button type="submit" class="btn btn-primary"  onclick = "insert()">Submit</button>
            </form>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        $conn = oci_connect('system','vishal','localhost/XE');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $name = $_REQUEST['dname'];
            $id = $_REQUEST['did'];
            $dob = $_REQUEST['dob'];
            $phone = $_REQUEST['phone'];
            $dno = $_REQUEST['dno'];
            $spe = $_REQUEST['speciality'];
            
            $query = "INSERT INTO DOCTOR VALUES('$id','$name','$dob','$phone','$spe','$dno')";
            
            $res = oci_parse($conn,$query);
            
            oci_execute($res);
            
            
            
        }
        
        ?>

	<script>
		function insert(){
			alert("Record inserted successfully in database");
		}
	</script>
        
    </body>
</html>