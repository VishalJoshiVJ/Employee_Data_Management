<!DOCTYPE html>
<html>
    <head>
        <title>New Patient</title>
        
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        
            <h1>Enter Patient Information</h1>
            <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                
                <div class="form-group">
                    Name : 
                <input type="text" name="pname" class="form-control" placeholder="Patient name"><br><br>
                    </div>
                <div class="form-group">
                Id : <input type="text" name="pid" class="form-control" placeholder="Patient ID"><br><br>
                    </div>
                <div class="form-group">
                Date of Birth : <input type="text" name="dob"  class="form-control" placeholder="eg.: 01-jan-2001"><br><br>
                </div>
                <div class="form-group">
                Phone No : <input type="text" name="phone" class="form-control" placeholder="Patient Phone number"><br><br>
                </div>
                <div class="form-group">
                Pincode : <input type="text" name="pincode" class="form-control" placeholder="Patient pincode"><br><br>
                </div>
                <div class="form-group">
                City : <input type="text" name="city" class="form-control" placeholder="Patient city"><br><br>
                </div>
                <div class="form-group">
                Disease : <input type="text" name="disease" class="form-control" placeholder="Patient disease"><br><br>
                </div>
                <div class="form-group">
                Treatement : <input type="text" name="treatement" class="form-control" placeholder="Treatement"><br><br>
                </div>
                <div class="form-group">
                Dept No. : <input type="text" name="dno" class="form-control" placeholder="Department number"><br><br>
                </div>
                <div class="form-group">
                Doctor Id : <input type="text" name="did" class="form-control" placeholder="Dr. ID"><br><br>
                </div>
                <div class="form-group">
                Room No : <input type="text" name="rno" class="form-control" placeholder="Room number"><br><br>
                </div>
                <button type="submit" class="btn btn-primary" onclick = "insert()">Submit</button>
            </form>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        $conn = oci_connect('system','vishal','localhost/XE')
                or die(oci_error());
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $name = $_REQUEST['pname'];
            $id = $_REQUEST['pid'];
            $dob = $_REQUEST['dob'];
            $phone = $_REQUEST['phone'];
            $pincode = $_REQUEST['pincode'];
            $city = $_REQUEST['city'];
            $disease = $_REQUEST['disease'];
            $treatement = $_REQUEST['treatement'];
            $dno = $_REQUEST['dno'];
            $did = $_REQUEST['did'];
            $rno = $_REQUEST['rno'];
            
            $query = "INSERT INTO PATIENT VALUES('$id','$name','$dob','$phone','$pincode','$city','$disease','$treatement','$dno','$did','$rno')";
            
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