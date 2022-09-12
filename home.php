<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
    * {
      box-sizing: border-box;
      }
      .container {
        position: relative;
        width: 100%;
        }
        .column {
          float: left;
          width: 50%;
          padding: 4px;
        }
        /* Clearfix (clear floats) */
        .row::after {
          content: "";
          clear: both;
          display: table;
        }
        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        .image {
          opacity: 1;
          display: block;
          /*width: 50%;
          height: 10%;*/
          transition: .5s ease;
          backface-visibility: hidden;
        }
        .middle {
          transition: .5s ease;
          opacity: 0;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%)
        }
        .container:hover .image {
          opacity: 0.3;
        }
        .container:hover .middle {
          opacity: 1;
        }
        .text {
          background-color: #333; <! -- photocolor -->
          color:white;
          font-size: 16px;
          padding: 10px 20px;
          font-size:1vw;
        }
        body{
          font-family: sans-serif;
          background-image:url('https://htmlcolorcodes.com/assets/images/colors/blood-red-color-solid-background-1920x1080.png');
	        background-size: cover;
          text-align:center;
          margin: 10;
          font-size:1vw;
        }
        .topnav {
          overflow: hidden;
          background-color: #333;
        }
        .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }

        .topnav a:hover {
          background-color: #ddd;
          color: black;
        }
        .topnav a:active {
          background-color: blue; <!-- nav bar color-->
          color: white;
        }
        .logoimg {
          text-align: center;
      }
      .set img {
        box-shadow: 5px 9px 9px 0px rgba(0.3, 0, 0, 0.3);
        margin: 0;
      }
      img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
      }
      .dropdown {
        position: middle;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: middle;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 1px 1px;
        z-index: 1;
        font-size:20px;
        font-size:1vw;
        color:#404040;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }
      .set a{
        color: rgb(255, 255, 255);
      }
        #logout{
            background-color:crimson;
            border-color: crimson;
            color: white;
            font-size: 15px;
            border-radius: 20px;
            width: 110%;
            height: 100%
            float: right;
            
        }
    </style>
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <form method="post">
      <a><button type="submit" name="logout" id="logout">Logout</button></a>
          </form>
    </div>
    <br>
    
    <div class="logo">
      <p> <span style="font-size: 300%;border: none; color:	rgb(255, 255, 255)"> <b> EMPLOYEE MANAGEMENT SYSTEM</b> </span> <br><b style="font-size: 160%;color:rgb(255, 255, 255)">  <i>   </i></b><br> <b style="font-size: 140%;color:rgb(255, 255, 255)">Since 2022</b> </p>
  </div>
  <hr style="height:4px;border-width:0; width :1100px ;color:white;background-color:white" align="center">
  <p> <b style="font-size: 160%;color: rgb(255, 255, 255);">We offer the following services <b></b> </p>
  <div style="padding-left:16px">
  </div>
<! --fade in -->
  <div class="set">
    <div class="row">
      

  <div class="column">
    <div class="container">
      <div class="dropdown">
        <a href="AddCompany.php"  style="text-decoration:none;">
          <img src="add.jpg" alt="Avatar" class="image" style="max-width:100%;height:auto;">
           Add Employee
          <div class="dropdown-content"> <p>Click on image to add employee</p>
          </div>
        </a>
        <div class="middle">
        <div class="text"><a href="AddCompany.php"><b style="color:white">Click me </b></a></div>
      </div>
      </div>
    </div>
  </div>

  <div class="column">
      <div class="container">
          <div class="dropdown">
            <a href="deleteCompany.php"  style=" text-decoration:none;">
              <img src="delete.jpg" alt="Avatar" class="image" style="max-width:100%;height:auto;">
              Delete Employee
              <div class="dropdown-content"> <p>Click on image to delete employee</p>
              </div>
            </a>
            <div class="middle">
          <div class="text"><a href="deleteCompany.php"><b style="color:white">Click me </b></a></div>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="column">
        <div class="container">
          <div class="dropdown">
            <a href="display.php"  style="text-decoration:none;">
              <img src="displayComp.jpg" alt="Avatar" class="image" style="max-width:100%;height:auto;">
              &nbsp &nbsp &nbsp Display Employee
              <div class="dropdown-content"> <p>Click on image to display employee details</p>
              </div>
            </a>
            <div class="middle">
            <div class="text"><a href="display.php"><b style="color:white">Click me </b></a></div>
          </div>
        </div>
      </div>
    </div>
        
    <div class="column">
      <div class="container">
        <div class="dropdown">
          <a href="editCompany.php"  style="text-decoration:none;">
            <img src="edit.jpg" alt="Avatar" class="image" style="max-width:100%;height:auto;">
            &nbsp &nbsp &nbsp Edit employee details
            <div class="dropdown-content"> <p>Click on image to edit employee details</p>
            </div>
          </a>
          <div class="middle">
          <div class="text"><a href="editCompany.php"><b style="color:white">Click me </b></a></div>
        </div>
      </div>
    </div>
  </div>
  

  </div>
  </div>
  <div class="clearfix"></div>
  <div class="background">
  </div>
  <br>
  <hr style="height:4px;border-width:0; width :1100px ;color:white;background-color:white" align="center">
  <div>
    <p> <b style="font-size: 90%;font-family: sans-serif; color: rgb(255, 255, 255);">Come Visit Us To Serve You Better </b> <br> </p>
     
  </div>
      
      <?php
       
      try{
            if (isset($_POST['logout']))
            {
    
                $conn = oci_connect('SYSTEM','vishal','localhost/XE');

                    $query = "UPDATE COMPANY_LOGGEDIN SET EMAIL = 'NULL'";
                    $res = oci_parse($conn, $query);
                    oci_execute($res);
                    echo "<script type='text/javascript'>alert('Logged out successfully');</script>";
                    echo '<script>window.location.href = "login.php";</script>';
            } 
      }catch(Exception $e){
            echo "<script type='text/javascript'>alert('Something went wrong');</script>";
        }
      ?>
  </body>
</html>