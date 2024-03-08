<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdminX - The last Admin template you'll ever need</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/adminx.css" media="screen" />

    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
</head>

<body>
    <div class="adminx-container">
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
                <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
                AdminX
            </a>

            <ul class="navbar-nav d-flex justify-content-end mr-2">
                <li class="nav-item dropdown">
                    <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        href="#">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg"
                            class="d-inline-block align-top" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Tasks</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#">Sign out</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- expand-hover push -->
        <!-- Sidebar -->
        <div class="adminx-sidebar expand-hover push">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="index.html" class="sidebar-nav-link active">
                        <span class="sidebar-nav-icon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Dashboard
                        </span>
                        <span class="sidebar-nav-end">

                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a href="generate-code" class="sidebar-nav-link">
                        <span class="sidebar-nav-icon">
                            <i data-feather="layout"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Generate code
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link" href="attendance-report">
                        <span class="sidebar-nav-icon">
                            <i data-feather="pie-chart"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Attendance report
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link" href="self-attendance
                    
                    ">
                        <span class="sidebar-nav-icon">
                            <i data-feather="align-justify"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Self attendance
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link" href="users">
                        <span class="sidebar-nav-icon">
                            <i data-feather="edit"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Users
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link" href="materials">
                        <span class="sidebar-nav-icon">
                            <i data-feather="grid"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Materials
                        </span>
                    </a>
                </li>

                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link" href="classes">
                        <span class="sidebar-nav-icon">
                            <i data-feather="layers"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Classes
                        </span>
                    </a>
                </li>
            </ul>
        </div><!-- Sidebar End -->

        <!-- adminx-content-aside -->
        <div class="adminx-content">
            <!-- <div class="adminx-aside">

        </div> -->

            <div class="adminx-main-content">
                <div class="container-fluid">
                    <!-- BreadCrumb -->
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb adminx-page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>

                    <div class="pb-3">
                        @yield('container')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
</body>

</html>
