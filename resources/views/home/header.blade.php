<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">
    <link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">


    <style>

        body {
            font-family: 'Gabarito', sans-serif !important;
        }

        /* Make the header cover full width and height */
        .header_section {
            background-color: #f7d5dc;
            color: #333;
            width: 100%;
            padding: 10px 0;
            /* Remove any padding that might interfere */
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
            position: relative;
            
        }

        .navbar {
            background-color: transparent;
            /* Make the navbar background transparent to show the header background */
            margin: 0;
            /* Remove default margin */
        }

        .container {
            padding-left: 0;
            /* Remove container's default left padding */
            padding-right: 0;
            /* Remove container's default right padding */
        }

        .navbar-nav {
            margin-left: auto;
            /* Align navbar items to the right if needed */
            margin-right: auto;
            /* Center navbar items */
        }

        /* Style for the Logout button */
        .btn-logout {
            border-radius: 30px;
            /* Makes the button more rounded */
            padding: 8px 20px;
            /* Adds some padding to make it look better */
            font-size: 12px;
            background-color: #fff;
            color: #000;
            border: none;
            transition: background-color 0.3s ease;
            margin-left: 20px;
        }

        .btn-logout:hover {
            background-color: #464646;
            color: #fff;
        }

        /* Style for the year display */
        .year-display {
            font-size: 8px;
            color: #f7d5dc;
            /* Adjust color of the year */
            margin-left: 10px;
            /* Add some space from the other items */
        }

        .icon-btn i {
            color: black;
            /* Use the default text color or set a default color */
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
            margin-right: 20px;
        }

        .icon-btn:hover i {
            color: #9b5372;
            /* Change to pink when hovered */
        }
    </style>

</head>

<body>
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ url('/') }}"><img width="150" src="images/logo.png"
                        alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Shop <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Products <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Makeup</a></li>
                                <li><a href="">Skincare</a></li>
                                <li><a href="">Bodycare</a></li>
                                <li><a href="">Haircare</a></li>
                                <li><a href="">Perfume</a></li>
                                <li><a href="">Henna</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About</a>
                        </li>
                        <form class="form-inline" autocomplete="on">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                            <button class="btn icon-btn">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                            </button>
                            <button class="btn icon-btn">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>
                        </form>

                        @if (Route::has('login'))
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf <!-- CSRF Token for security -->
                                    <button type="submit" class="btn-logout">LOGOUT</button>
                                </form>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif

                        <!-- Add the year display element -->
                        <li class="nav-item">
                            <span id="displayYear" class="year-display"></span>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
    </header>
</body>

</html>
