<!DOCTYPE html>
<html>
    <head>
        <title>HDM</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            form{
                margin-left: 70px;
            }
        </style>
    </head>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <body style="margin: 10%;  margin-top: 5%;">
        <h1 style="text-align : center;">Hospital Data Management</h1> <br>
        <nav class="navbar navbar-expand-sm bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="AddPatient.php" class="nav-link">New Patient</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="AddDoctor.php" class="nav-link">New Doctor</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="AddNurse.php" class="nav-link">New Nurse</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="AddRoom.php" class="nav-link">New Room</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="AddDept.php" class="nav-link">New Department</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="Queries.php" class="nav-link">Information section</a>
                </li>
            </ul>
            <form class="form-inline" >
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button> 
            </form>
        </nav>
        <br>
        
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare commodo purus, eget vestibulum justo laoreet sit amet. Morbi sed neque nunc. Sed odio est, commodo vel mattis non, tempor consequat tellus. Suspendisse quis sapien justo. Suspendisse nisi elit, porta laoreet sapien id, efficitur consequat nibh. Quisque fringilla sapien at vestibulum consectetur. Nullam dui enim, auctor eget arcu eu, suscipit fringilla purus. Vestibulum bibendum quam eu metus porta, nec consectetur nibh volutpat. Quisque dignissim lacus at tincidunt malesuada. Aenean rutrum purus risus, ut rutrum justo elementum vel. Suspendisse urna dolor, rutrum non dignissim sit amet, luctus sit amet velit. Pellentesque ullamcorper lorem velit, vel egestas lorem sollicitudin et. Duis elementum venenatis magna, sed luctus ex eleifend in. Donec eget justo sem.</p>
        <p>

Morbi convallis viverra lectus sed consectetur. Quisque feugiat, nulla a vulputate condimentum, odio neque tincidunt est, at placerat felis augue quis quam. Proin cursus mollis sapien, accumsan consequat massa luctus et. Vivamus faucibus finibus lacus ac aliquam. Maecenas sollicitudin a nunc non ornare. Aliquam quis dui orci. Aenean hendrerit arcu justo, varius dictum ex ultricies vel. Pellentesque ut metus in eros congue finibus. Vestibulum placerat gravida venenatis. Nulla facilisi. Pellentesque nec purus eget velit semper sodales eu et arcu.
        </p>
        <p>

Duis rutrum purus id rutrum pretium. Mauris placerat egestas lacus sit amet malesuada. Aenean efficitur sollicitudin sollicitudin. Etiam vitae sollicitudin libero, id feugiat arcu. Ut consectetur ligula vel est dapibus gravida. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sed turpis eget arcu gravida accumsan a quis odio. Aliquam mi sem, tincidunt at lorem id, bibendum iaculis odio. Nunc feugiat sapien eget mi viverra dictum. Curabitur nibh erat, dictum eget lectus eget, blandit ullamcorper quam. Nam maximus venenatis fermentum. Sed et hendrerit nisl. Morbi egestas faucibus tortor, consequat consequat felis suscipit non. Etiam porta at libero non commodo.
        </p>
        
        <p>
            Fusce luctus volutpat mauris, id accumsan odio dignissim vel. Nam euismod ultricies ante, nec gravida ex dictum sit amet. Nunc iaculis, leo sed faucibus ornare, tellus ipsum euismod augue, in venenatis lectus eros et enim. Aliquam elementum neque sit amet tempor pretium. Donec vulputate velit elit, tincidunt pharetra ante tempus ac. In blandit, sapien et laoreet pulvinar, sapien odio rhoncus magna, eu auctor mauris arcu nec enim. Mauris sed aliquet lectus. Integer consectetur auctor mollis. Nunc sodales efficitur neque non tempor. Mauris nisl nisl, hendrerit vel neque et, lacinia egestas est. Suspendisse neque eros, consectetur finibus massa sollicitudin, vestibulum rutrum arcu. In hac habitasse platea dictumst. Quisque a nulla eget elit congue porttitor.
        </p>
        <p>

Quisque fringilla massa vitae nunc vehicula, id rhoncus lacus porttitor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam eget erat vestibulum, consectetur augue eleifend, consectetur purus. Donec facilisis tortor sed arcu luctus, eu lacinia arcu luctus. Nulla porttitor euismod magna at sodales. Mauris rutrum sodales molestie. Aenean fermentum ligula in diam rutrum, non pulvinar felis fringilla. Etiam tempor massa dui, sed faucibus nisl interdum quis. Phasellus sit amet nunc nulla. Ut a consequat neque. Nullam congue suscipit lacus, vel accumsan arcu. Nam efficitur odio libero, in porta mi vestibulum at. Praesent mollis, risus non faucibus semper, leo nulla lobortis nunc, quis tincidunt erat dui accumsan nisl. Morbi interdum sed eros id tempor. Quisque dignissim suscipit velit ut bibendum.
        </p>
        
        <button onclick="document.location.href = 'UpdatePatient.php'"  class="btn btn-dark">Update Patient Name</button>
        <button onclick="document.location.href = 'deletePatient.php'"  class="btn btn-dark">Delete Patient</button>
        
    </body>
</html>