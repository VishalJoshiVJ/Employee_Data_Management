<!DOCTYPE html>
<html>
    <head>
        <title>Update Patient</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
    <h3>Update Name</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
        Patient ID : <input name="id" type="text" class="form-control" placeholder="ID">
        </div>
            <div class="form-group">
        Updated Name : <input name="name" type="text" class="form-control" placeholder="New Name">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
    
    <?php
        $conn = oci_connect('system','vishal','localhost/XE');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            
            $query = "UPDATE PATIENT SET PNAME = '$name' WHERE PID = '$id'";
            $res = oci_parse($conn,$query);
            oci_execute($res);
            
            echo "Patient Name Updated";
        }
    ?>
        </body>
</html>