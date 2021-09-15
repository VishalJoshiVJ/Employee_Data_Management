<!DOCTYPE html>
<html>
    <head>
        <title>New Room</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        
            <h1>Enter Room Information</h1>
            <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
                Room Type : <input type="text" name="rtype" class="form-control" placeholder="Room type"><br><br>
                </div>
                    <div class="form-group">
                Room No. : <input type="text" name="rno" class="form-control" placeholder="Number"><br><br>
                </div>
                    <div class="form-group">
                Capacity : <input type="text" name="capacity" class="form-control" placeholder="Capacity for No. of patients"><br><br>
                </div>
                    <div class="form-group">
                Price : <input type="text" name="price" class="form-control" placeholder="Price"><br><br>
                </div>
                <button type="submit" class="btn btn-primary" onclick = "insert()">Submit</button>
            </form>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        $conn = oci_connect('system','vishal','localhost/XE');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $rtype = $_REQUEST['rtype'];
            $rno = $_REQUEST['rno'];
            $cap = $_REQUEST['capacity'];
            $price = $_REQUEST['price'];
            
            $query = "INSERT INTO ROOM VALUES('$rno','$rtype','$cap','$price')";
            
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