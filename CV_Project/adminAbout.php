<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lumino - Charts</title>
    <link href="resources/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="resources/admin/css/datepicker3.css" rel="stylesheet">
    <link href="resources/admin/css/styles.css" rel="stylesheet">
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
                  <a class="navbar-brand" href="#"><span>CV</span>Admin</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">Admin</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        <form role="search">
            <div class="form-group">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="adminAbout.php"><em class="fa fa-dashboard">&nbsp;</em>About Me</a></li>
            <li><a href="adminSkills.php"><em class="fa fa-calendar">&nbsp;</em>Skills</a></li>
            <li><a href="adminService.php"><em class="fa fa-bar-chart">&nbsp;</em>Service</a></li>
            <li><a href="adminAchievement.php"><em class="fa fa-toggle-off">&nbsp;</em>Achievement</a></li>
            <li><a href="adminHistory.php"><em class="fa fa-clone">&nbsp;</em>History</a></li>
            <li><a href="adminEduHistory.php"><em class="fa fa-clone">&nbsp;</em>Education History</a></li>
            <li><a href="adminProduct.php"><em class="fa fa-clone">&nbsp;</em>Product</a></li>
            <li><a href="home.php"><em class="fa fa-power-off">&nbsp;</em>Logout</a></li>
        </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <h1 style="color: #448aff;text-align: center;">User</h1>
        <?php
        require_once "database/connect.php";
        $sql = "SELECT * FROM user";
         if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
            echo "<table class='table table-striped'>";
                echo "<div class='dropdown'>";
                    echo "<a class='btn-top' style='margin-right: 15px;text-align: right' href='createUser.php' class='btn btn-primary btn-success'> <span class='glyphicon glyphicon-plus'></span> &nbsp Create Table</a>";
                echo "</div>";
                echo "<thead>";
                    echo "<tr class='row-name'>";
                        echo "<th>#</th>";
                        echo "<th>Name</th>";
                        echo "<th>UserName</th>";
                        echo "<th>Password</th>";
                        echo "<th>Age</th>";
                        echo "<th>Email</th>";
                        echo "<th>Phone</th>";
                        echo "<th>Description</th>";
                        echo "<th>Settings</th>";
                    echo "</tr>";
                echo "</thead>"; 
                echo "<tbody id='myTable'>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr class='ow-content'>";
                        echo "<td>". $row['id'] ."</td>";
                        echo "<td>". $row['name'] ."</td>";
                        echo "<td>". $row['username'] ."</td>";
                        echo "<td>". $row['password'] ."</td>";
                        echo "<td>". $row['age'] ."</td>";
                        echo "<td>". $row['email'] ."</td>";
                        echo "<td>". $row['phone'] ."</td>";
                        echo "<td>". $row['description'] ."</td>";
                        echo "<td>";
                            echo "<a class='btn btn-danger edit' href='deleteUser.php?id=".$row['id']."' aria-label='Settings'>
                               <i class='fa fa-trash' aria-hidden='true '></i></a>";
                            echo "&nbsp";
                            echo "<a class='btn btn-info edit ' href='editUser.php?id=".$row['id']."' aria-label='Settings'>
                                <i class='fa fa-pencil-square-o ' aria-hidden='true '></i></a> ";
                            echo "&nbsp";
                            echo "<a class='btn btn-success edit ' href='readUser.php?id=".$row['id']."' aria-label='Settings'>
                                <i class='fa fa-eye' aria-hidden='true '></i></a> ";
                        echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
            echo "</table>";
            mysqli_free_result($result);
                } else{
                    echo "<p class='lead'><em>Chưa có dữ liệu</em></p>";
                }
            } else{
            echo "Lỗi xảy ra $sql. " . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</div>
    <!--/.sidebar-->
    <script src="resources/admin/js/jquery-1.11.1.min.js"></script>
    <script src="resources/admin/js/bootstrap.min.js"></script>
    <script src="resources/admin/js/chart.min.js"></script>
    <script src="resources/admin/js/chart-data.js"></script>
    <script src="resources/admin/js/easypiechart.js"></script>
    <script src="resources/admin/js/easypiechart-data.js"></script>
    <script src="resources/admin/js/bootstrap-datepicker.js"></script>
    <script src="resources/admin/js/custom.js"></script>
    <script src="resources/admin/js/search.js"></script>
</body>

</html>