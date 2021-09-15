<!DOCTYPE html>
<html>
    <head>
        <title>New Department</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        
            <h1>Enter Department Information</h1>
            <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                Dept Name : <input type="text" name="deptName" class="form-control" placeholder="Department name"><br><br>
                </div>
                    <div class="form-group">
                Dept No. : <input type="text" name="deptId" class="form-control" placeholder="Department ID"><br><br>
                </div>
                <button type="submit" class="btn btn-primary" onclick = "insert()">Submit</button>
            </form>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        $conn = oci_connect('system','vishal','localhost/XE');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $name = $_REQUEST['deptName'];
            $id = $_REQUEST['deptId'];
            
            $query = "INSERT INTO DEPARTMENT VALUES('$id','$name')";
            
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