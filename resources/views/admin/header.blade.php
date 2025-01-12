<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style type="text/css">
    /* To ensure the main content is pushed when sidebar is hidden */
    .content {
        margin-left: 250px;
        transition: margin-left 0.3s ease-in-out;
    }

    .content.sidebar-hidden {
        margin-left: 0;
    }

    /* Increase the size of the navbar toggle button */
    .navbar-toggler .mdi-menu {
        font-size: 30px;
        /* Increase the font size of the menu icon */
    }

    /* Optional: Adjust the size of the button itself */
    .navbar-toggler {
        padding: 10px 20px;
        /* Increase padding for a bigger button */
    }

    .nav-link i.mdi-bell {
        padding: 0;
        /* Remove padding around the icon */
        margin: 0;
        /* Remove any margin around the icon */
        background: none;
        /* Ensure no background color is applied */
        border: none;
        /* Remove any border */
        box-sizing: border-box;
    }
</style>



<body>

    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href=""><img src="admin/assets/images/favicon.png"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"
                style="color: white">
                <span class="mdi mdi-menu"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown" style="background-color: black; color: white;">
                        <h6 class="p-3 mb-0">Notifications</h6>
                        <div class="dropdown-divider"></div>
                        <!-- Display this message when there are no notifications -->
                        <p class="p-3 mb-0 text-center">No notifications at the moment</p>
                    </div>
                </li>
            </ul>
            
            <li>
                <x-app-layout>

                </x-app-layout>
            </li>
        </div>
    </nav>

    <script>
        // Function to toggle sidebar visibility
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const content = document.querySelector('.content');
            sidebar.classList.toggle('hidden');
            content.classList.toggle('sidebar-hidden');
        }
    </script>

</body>

</html>
