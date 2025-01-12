<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sidebar</title>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/assets/css/sidebar.css">

    <style type="text/css">

        .menu-title{
            margin-left: 20px;
            letter-spacing: 1px;
        }
    </style>

</head>

<body>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top"
            style="background-color: #000;">
            <a class="sidebar-brand brand-logo" href="#"><img width="200px" src="admin/assets/images/logoad1.png"
                    style="width: 150px; height: auto;" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="#"><img src="admin/assets/images/logoad1.png"
                    style="width: 150px; height: auto;" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="admin/assets/images/faces/admin.png"
                                alt="">
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">Admin PanelHub</h5>
                            <span style="color: #aaa">Adik Cosmetics House</span>
                        </div>
                    </div>
                </div>
            <li class="nav-item nav-category">
                <span class="nav-link" style="color: #fff">Navigation</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i> 
                  <span class="menu-title">Dashboard</span> 
                </a>
            </li>

            <!--product section -->
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/show_product') }}">
                    <i class="fas fa-cube"></i>
                    <span class="menu-title">All Product</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/view_product') }}">
                    <i class="fas fa-plus"></i>
                    <span class="menu-title">Add Product</span>
                </a>
            </li>
            
            <!-- End Product part !-->

            <!-- for category part !-->
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ route('show_add_category') }}">
                    <i class="fas fa-plus"></i>
                    <span class="menu-title">Add Category</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('view_category') }}">
                    <i class="fas fa-list-alt"></i>
                    <span class="menu-title">All Categories</span>
                </a>
            </li>
            <!-- end category part !-->


        </ul>
    </nav>

    

</body>

</html>
