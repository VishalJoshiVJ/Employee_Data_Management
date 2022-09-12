<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
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
    
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="AddCompany.php">Add Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="deleteCompany.php"  aria-current="page">
            Delete Employee
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
       
       
       
        <h3>Edit Employee Details</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            Choose Field to be updated
                <br><br>
                    <select name="field">
                        <option value="ID">ID</option>
                        <option value="Name">Name</option>
                        <option value="Website">Website</option>
                        <option value="Phone">Phone</option>
                        <option value="Address">Address</option>
                        <option value="City">City</option>
                        <option value="State">State</option>
                        <option value="Country">Country</option>
                        <option value="Industry">Industry</option>
                    </select>
                    <br><br>
            <div class="form-group">
        <br><input name="cname" type="text" class="form-control" placeholder="Employee ID">
            </div>
            <br><br>
             <div class="form-group">
        <input name="value" type="text" class="form-control" placeholder="Updated Value"><br>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <button onclick="document.location.href='home.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        
        try{
        session_start();
            $conn = oci_connect('SYSTEM','vishal','localhost/XE');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $field = $_REQUEST['field'];
                $name = $_REQUEST['cname'];
                $value = $_REQUEST['value'];
                
                $query = "SELECT * FROM COMPANY_LOGGEDIN";
                $res = oci_parse($conn,$query);
                oci_execute($res);

                $email = "";

                while($row = oci_fetch_assoc($res)){
                    $email = $row['EMAIL'];
                }
                
                if($name != "" && $value != ""){
                    
                    if($field == "ID"){
                        $query = "UPDATE COMPANY SET ID = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    }
                    if($field == "Name"){
                        $query = "UPDATE COMPANY SET NAME = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    }
                    else if($field == "Website"){
                        $query = "UPDATE COMPANY SET WEBSITE = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    else if($field == "Phone"){
                        $query = "UPDATE COMPANY SET PHONE = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    else if($field == "Address"){
                        $query = "UPDATE COMPANY SET ADDRESS = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    else if($field == "City"){
                        $query = "UPDATE COMPANY SET CITY = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    else if($field == "State"){
                        $query = "UPDATE COMPANY SET STATE = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    else if($field == "Country"){
                        $query = "UPDATE COMPANY SET COUNTRY = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    else if($field == "Industry"){
                        $query = "UPDATE COMPANY SET INDUSTRY = '$value' WHERE ID = '$name' AND EMAIL = '$email'";
                    } 
                    
                    $res = oci_parse($conn,$query);
                    oci_execute($res);
                
                    echo "<h4>Updated Successfully</h4>";
                }
                else{
                    echo "<p>All fields are compulsory to fill...</p>";
                }
            }
            }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
        ?>
    </body>
</html>