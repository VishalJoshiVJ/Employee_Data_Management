<!DOCTYPE html>
<html>
    <head>
        <title>New Company</title>
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
          <a class="nav-link active" aria-current="page" href="deleteCompany.php">Delete Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="editCompany.php"  aria-current="page">
            Edit Employee
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="display.php"  aria-current="page">
            Display Employees
          </a>
        </li>
          
      </ul>
      
    </div>
  
</nav>
           
           
           
           
           <br>
           <br>
           
            <h1>Enter Employee Information</h1>
            <form method ="post" name="form" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <br><input type="text" name="id" id="id" class="form-control" placeholder="ID"><br><br>
                    </div>
                <div class="form-group">
                <input type="text" name="cname" id="cname" class="form-control" placeholder="Name"><br><br>
                    </div>
                <div class="form-group">  
                <input type="text" name="website" id="website" class="form-control" placeholder="Website"><br><br>
                    </div>
                
                <div class="form-group">
                <input type="number" name="phone" id="phone" class="form-control" placeholder="Contact No."><br><br>
                    </div>

                <div class="form-group">
                <input type="text" name="address" id="address" class="form-control" placeholder="Address"><br><br>
                    </div>
                <div class="form-group">
                <input type="text" name="city" id="city" class="form-control" placeholder="City"><br><br>
                    </div>
                
                <div class="form-group">
                <input type="text" name="state" id="state" class="form-control" placeholder="State"><br><br>
                    </div>
                
                 <div class="form-group">
                <input type="text" name="country" id="country" class="form-control" placeholder="Country"><br><br>
                    </div>
                
                Inndustry List
                <br><br>
                    <select name="list">
                        <option value="Account">Account</option>
                        <option value="IT">IT</option>
                        <option value="Sales">Sales</option>
                        <option value="Healthcare">Healthcare</option>
                    </select>
                    <br><br><br><br>
                <button type="submit" class="btn btn-primary"  onclick = "insert()">Submit</button>
            </form>
        <button onclick="document.location.href='home.php'" class="btn btn-dark" style="float : right;">Homepage</button>
        
        <?php
        try{
        session_start();
        $conn = oci_connect('SYSTEM','vishal','localhost/XE');
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $id = $_REQUEST['id'];
            $name = $_REQUEST['cname'];
            $website = $_REQUEST['website'];
            $phone = $_REQUEST['phone'];
            $addr = $_REQUEST['address'];
            $city = $_REQUEST['city'];
            $state = $_REQUEST['state'];
            $country = $_REQUEST['country'];
            $industry = $_REQUEST['list'];
            
            $query = "SELECT * FROM COMPANY_LOGGEDIN";
            $res = oci_parse($conn,$query);
            oci_execute($res);
            
            $email = "";
            
            while($row = oci_fetch_assoc($res)){
                $email = $row['EMAIL'];
            }
            
            
            if($id != "" && $name != "" && $website != "" && $phone != "" && $addr != "" && $city != "" && $state != "" && $country != ""){
            
            $query = "INSERT INTO COMPANY VALUES('$name','$website','$phone','$addr','$city','$state','$country','$industry','$email','$id')";
            
            $res = oci_parse($conn,$query);
            
            oci_execute($res);
                
            echo "<h4>Record inserted successfully</h4>";
                
            }
            else{
                echo "<br><br>";
                echo "<p>All fields are compulsory to fill...</p>";
            }
            
            
        }
        }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
        
        ?>
        
    </body>
</html>