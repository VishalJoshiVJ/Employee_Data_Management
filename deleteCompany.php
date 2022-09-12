<!DOCTYPE html>
<html>
    <head>
        <title>Delete Company</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        p{
            color: red;
            font-size: 30px;
        }
        
        h4{
            color: dodgerblue;
            font-size: 30px;
        }
    </style>
    
    <body style="margin: 10%;  margin-top: 5%;">
       
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 10%; margin-bottom: 5%; margin-top: 5%;">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">Manage Employees</a>
    
    
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="AddCompany.php">Add Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="editCompany.php"  aria-current="page">
            Edit Employee
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="display.php"  aria-current="page">
            Display Employee
          </a>
        </li>
        
      </ul>
        
    
  </div>
</nav>
       
       
       
        <h3>Delete Employee</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
        <br><input name="cname" type="text" class="form-control" placeholder="Employee ID">
            </div>
            <br>
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        <button onclick="document.location.href='home.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        try{
        session_start();
            $conn = oci_connect('SYSTEM','vishal','localhost/XE');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $id = $_REQUEST['cname'];
                
                if($id != ""){
                    
                    $query = "SELECT * FROM COMPANY_LOGGEDIN";
                    $res = oci_parse($conn,$query);
                    oci_execute($res);
            
                    $email = "";
            
                    while($row = oci_fetch_assoc($res)){
                        $email = $row['EMAIL'];
                    }
                    
                    $query = "DELETE FROM COMPANY WHERE ID = '$id' AND EMAIL = '$email'";
                    $res = oci_parse($conn,$query);
                    oci_execute($res);
                
                    echo "<h4>Deleted Successfully</h4>";
                }
                else{
                    echo "<p>All fields are compulsory to fill...<p/>";
                }
            }
            }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
        ?>
    </body>
</html>