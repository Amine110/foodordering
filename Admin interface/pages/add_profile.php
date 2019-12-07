<?php
include 'check_session.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add employee</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../dist/css/theme.min.css">
    <script src="../src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
        <div class="wrapper">
        <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="notiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-bell"></i><span class="badge bg-danger">3</span></a>
                                <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="notiDropdown">
                                    <h4 class="header">Notifications</h4>
                                    <div class="notifications-wrap">
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-check"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Invitation accepted</span> 
                                                <span class="media-content">Your have been Invited ...</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">Steve Smith</span> 
                                                <span class="media-content">I slowly updated projects</span>
                                            </span>
                                        </a>
                                        <a href="#" class="media">
                                            <span class="d-flex">
                                                <i class="ik ik-calendar"></i> 
                                            </span>
                                            <span class="media-body">
                                                <span class="heading-font-family media-heading">To Do</span> 
                                                <span class="media-content">Meeting with Nathan on Friday 8 AM ...</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="footer"><a href="javascript:void(0);">See all activity</a></div>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="../img/users/<?php echo $ad_pic;?>" alt=""></a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <h6  class="dropdown-item"><?php echo $ad_name;?></h6>
                                    <a class="dropdown-item" href="profile.html"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                                    <a class="dropdown-item" href="destroy_session.php"><i class="ik ik-power dropdown-icon"></i>Logout</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="../index.php">
                            <div class="logo-img">
                                <img src="../src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
                            </div>
                            <span class="text">ThemeKit</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>

                    <div class="sidebar-content">
                        <div class="nav-container">
                        <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-item">
                                    <a href="../index.php"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-lavel">Manage Employees</div>
                                <div class="nav-item">
                                    <a href="employee_list.php" class="menu-item"><i class="ik ik-user"></i><span>Employees List</span></a>
                                    </div>
                                <div class="nav-item active">
                                    <a href="add_profile.php" class="menu-item"><i class="ik ik-user-plus"></i><span>Add New Employee</span></a>
                                </div>
                                <div class="nav-lavel">Manage Customers</div>
                                <div class="nav-item">
                                    <a href="customers_list.php" class="menu-item"><i class="ik ik-users"></i><span>Customers List</span></a>
                                </div>
                                <div class="nav-lavel">Product</div>
                                <div class="nav-item">
                                    <a href="approve_product.php" class="menu-item"><i class="ik ik-check-square"></i><span>Approve Product<?php if($prod_app!=0){echo "<span class='badge badge-success'>".$prod_app."+</span></span>";}?></a>
                                </div>
                                <div class="nav-item">
                                    <a href="availbel_product.php" class="menu-item"><i class="ik ik-box"></i><span>Availbel Product</span></a>
                                </div>
                                <div class="nav-lavel">Vehicles</div>
                                <div class="nav-item">
                                    <a href="manage_vehicle.php" class="menu-item"><i class="ik ik-truck"></i><span>Manage Vehicles</span></a>
                                </div>
                            </nav>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Add New Employee</h3></div>
                                <div class="card-body">

                                    <form class="forms-sample" action="store_employee.php" method="POST">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="Email1">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="Password1">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="ConfirmPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password" required >
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required >
                                        </div>
                                        <div class="form-group">
                                                        <label for="pic">Update Picture</label><br>
                                                        <input type="file" name="pic" accept="image/*" value="" required >
                                                    </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="position" value="Employee" checked>
                                                <span class="custom-control-label">&nbsp;Employee</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="position" value="Dilevery">
                                                <span class="custom-control-label">&nbsp;Dilevery</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" name="position" value="Dilevery">
                                                <span class="custom-control-label">&nbsp;Dilevery</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                                        <label for="vehicle">Select Vehicle</label>
                                                        <select name="vehicle" id="vehicle" class="form-control">
                                                        <option value="null">Select Option</option>
                                                            <?php
                                                            $req= $conx->query('SELECT * From vehicle where status="Free"');
                                                            while($data = $req->fetch()){
                                                                echo "<option value='".$data['vid']."'>".$data['vnum']." | ".$data['brand']." | ".$data['model']."</option>";
                                                            }
                                                            ?>                                                        
                                                        </select>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="../src/js/vendor/jquery-3.3.1.min.js"><\/script>')
        </script>
        <script src="../plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../plugins/screenfull/dist/screenfull.js"></script>
        <script src="../dist/js/theme.min.js"></script>
</body>

</html>