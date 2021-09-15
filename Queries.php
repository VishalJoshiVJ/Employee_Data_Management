<!DOCTYPE html>
<html>
    <head>
        <title>Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        <?php
            $conn = oci_connect('system','vishal','localhost/XE');
            
            $query = "SELECT * FROM PATIENT";
            $res = oci_parse($conn,$query);
            oci_execute($res);
            
            echo "<h3>All Patients : </h3>";
            while($row = oci_fetch_assoc($res)){
                echo "<br>ID : ".$row["PID"].'|| Name :  '.$row['PNAME'].'|| DOB : '.$row['DOB'].'|| Phone No. : '.$row['PH_NO'].'|| Pincode : '.$row['PINCODE'].'|| City : '.$row['CITY'].'|| Disease : '.$row['DISEASE'].'|| Treatement : '.$row['TREATEMENT'].'|| Dept. : '.$row['DNO'].'|| Doctor : '.$row['DID'].'|| Room : '.$row['RNO'].'<br>';
            }
            
            echo "<br><h3>Patients who are taking treatement from Dr. 'AJAY D' :</h3>";
            
            $query = "SELECT P.PID,P.PNAME
                      FROM PATIENT P, DOCTOR D
                      WHERE P.DID = D.DID AND D.DNAME = 'AJAY D'";
            $res = oci_parse($conn,$query);
            oci_execute($res);
            
            while($row = oci_fetch_assoc($res)){
                echo "<br> ID : ".$row['PID']."|| NAME : ".$row['PNAME']."<br>";
            }
        
            echo "<br><h3>Number of patients in each occupied room :</h3>";
        
            $query = "SELECT RNO,COUNT(PID) AS PATIENTS
                        FROM PATIENT
                        GROUP BY RNO";
            $res = oci_parse($conn,$query);
            oci_execute($res);
        
            while($row = oci_fetch_assoc($res)){
                echo "<br> ROOM NO. : ".$row['RNO']."|| NO. OF PATIENTS : ".$row['PATIENTS']."<br>";
            }
        
            echo "<br><h3>Number of nurses in each shift :</h3>";
        
            $query = "SELECT SHIFT,COUNT(NID) AS NURSE
                        FROM NURSE
                        GROUP BY SHIFT";
            $res = oci_parse($conn,$query);
            oci_execute($res);
        
            while($row = oci_fetch_assoc($res)){
                echo "<br> SHIFT : ".$row['SHIFT']."|| NO. OF NURSE : ".$row['NURSE']."<br>";
            }
        ?>
        <button onclick="document.location.href='Homepage.php'" class="btn btn-dark" style="float : right;">Homepage</button>
    </body>
</html>