
<!DOCTYPE html>
<html>
    <head>
        <title>Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 10%; margin-bottom: 5%; margin-top: 5%;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Manage Employees</a>
    
    
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="AddCompany.php">Add Employee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="deleteCompany.php"  aria-current="page">
            Delete Employee
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="editCompany.php"  aria-current="page">
            Edit Employee
          </a>
        </li>
      </ul>
    </div>
  
</nav>
        
        
    
    <?php
        
        try{
        session_start();
            $conn = oci_connect('SYSTEM','vishal','localhost/XE');
        
            $query = "SELECT * FROM COMPANY_LOGGEDIN";
                $res = oci_parse($conn,$query);
                oci_execute($res);

                $email = "";

                while($row = oci_fetch_assoc($res)){
                    $email = $row['EMAIL'];
                }
            
            $query = "SELECT * FROM COMPANY WHERE EMAIL = '$email'";
            $res = oci_parse($conn,$query);
            oci_execute($res);
            
            
            echo "<h3>All Companies : </h3>";
        
            echo "<table border='1' class='table table-dark table-hover'>
            <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Website</th>
            <th>Contact No</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Industry</th>
            </tr>";
            
            while($row = oci_fetch_assoc($res)){
        
                echo "<tr>";
                echo "<td>".$row["ID"]."</td>";
                echo "<td>".$row["NAME"]."</td>";
                echo "<td>".$row["WEBSITE"]."</td>";
                echo "<td>".$row["PHONE"]."</td>";
                echo "<td>".$row["ADDRESS"]."</td>";
                echo "<td>".$row["CITY"]."</td>";
                echo "<td>".$row["STATE"]."</td>";
                echo "<td>".$row["COUNTRY"]."</td>";
                echo "<td>".$row["INDUSTRY"]."</td>";
                echo "</tr>";
            }
        
            echo "</table>";
            
            }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
        ?>
        
        
        <button onclick="document.location.href='home.php'" class="btn btn-dark" style="float : right;">Homepage</button>
    
    </body>

</html>