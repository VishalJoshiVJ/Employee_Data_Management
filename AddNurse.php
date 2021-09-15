<!DOCTYPE html>
<html>
    <head>
        <title>New Nurse</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        
            <h1>Enter Nurse Information</h1>
            <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                Name : <input type="text" name="nname" class="form-control" placeholder="Nurse name"><br><br>
                     </div>
                <div class="form-group">
                Id : <input type="text" name="nid" class="form-control" placeholder="Nurse ID"><br><br>
                     </div>
                <div class="form-group">
                Phone No : <input type="text" name="phone" class="form-control" placeholder="Nurse phone"><br><br>
                     </div>
                <div class="form-group">
                Room No. : <input type="text" name="rno" class="form-control" placeholder="Nurse Room No."><br><br>
                     </div>
                <div class="form-group">
                Shift : <input type="text" name="shift" class="form-control" placeholder="Nurse shift"><br><br>
                     </div>
                <button type="submit" class="btn btn-primary" onclick = "insert()">Submit</button>
            </form>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        $conn = oci_connect('system','vishal','localhost/XE')
                or die(oci_error());
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $name = $_REQUEST['nname'];
            $id = $_REQUEST['nid'];
            $phone = $_REQUEST['phone'];
            $rno = $_REQUEST['rno'];
            $shift = $_REQUEST['shift'];
            
            $query = "INSERT INTO NURSE VALUES('$id','$name','$phone','$shift','$rno')";
            
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