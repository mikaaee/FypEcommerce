<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .div_center {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .h2_font {
            font-size: 28px;
            text-align: left;
            color: #000;
            font-weight: bold;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .input_color {
            width: 100%;
            /* Full width for responsiveness */
            padding: 12px 20px;
            /* Spacious padding */
            margin: 8px 0;
            /* Space between input fields */
            border: 2px solid #ccc;
            /* Light border */
            border-radius: 18px;
            /* Rounded corners */
            background-color: #fff;
            /* White background */
            font-size: 16px;
            /* Easy-to-read font size */
            color: #a0a0a0;
            letter-spacing: 2px;
            /* Dark text color */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Subtle shadow for depth */
            transition: all 0.3s ease;
        }

        .table {
            margin: auto;
            /* auto set to center*/
            width: 50%;
            text-align: center;
            margin-top: 30px;
            /* buat gap dgn atas*/
            border: 2px solid gainsboro;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }

        td:last-child {
            text-align: center;
            /* Center-align the action buttons */
            white-space: nowrap;
            /* Prevent buttons from wrapping */
        }

        .btn {
            border-radius: 30px;
            /* Rounded corners for a smooth button */
            background-color: #007bff;
            /* Initial blue background */
            color: #fff;
            /* White text color */
            padding: 10px 20px;
            /* Spacious padding for the button */
            font-size: 16px;
            letter-spacing: 1px;
            /* Bold text for emphasis */
            text-align: center;
            /* Center the text */
            text-decoration: none;
            /* Remove underline for links */
            display: inline-block;
            /* Aligns button nicely with other elements */
            cursor: pointer;
            /* Pointer cursor to indicate it's clickable */
            transition: all 0.3s ease;
            /* Smooth transition for hover effects */
            border: none;
            /* No border */
        }
         /* Primary button (Update) styling */
         .btn-primary {
            background-color: #007bff;
            /* Blue background */
            color: white;
            /* White text */
            border-radius: 30px;
            /* Rounded corners */
        }

        /* Hover effect for the button */
        .btn-primary:hover {
            background-color: #fff;
            /* White background on hover */
            color: #007bff !important;
            /* Blue text color on hover */
            border: 2px solid #007bff;
            /* Blue border on hover */
            transform: translateY(-2px);
            /* Slight lift effect on hover */
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.2);
            /* Subtle shadow for hover effect */
        }

    

        .close {
            background: none;
            border: none;
            font-size: 1.5rem;
            line-height: 1;
            color: #000;
            cursor: pointer;
            padding: 0;
            margin-left: 10px;
        }

        .alert {
            padding: 10px 20px;
            margin-bottom: 10px;
            /* Reduce gap */
            border: 1px solid #dcdcdc;
            border-radius: 5px;
            background-color: #d4edda;
            /* Success green */
            color: #155724;
            /* Text color */
            display: flex;
            /* Flexbox for alignment */
            justify-content: space-between;
            /* Align close button */
            align-items: center;
            /* Center content vertically */
        }

        .alert .close {
            background: none;
            border: none;
            font-size: 1.2rem;
            line-height: 1;
            color: #155724;
            cursor: pointer;
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.header')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper" style="background-color: rgb(225, 225, 225);">

                    <!-- code for message, boleh reuse !-->
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" aria-label="Close" onclick="closeNotification(this)">
                                &times;
                            </button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <!--Add category-->
                    <div class="div_center">
                        <h2 class="h2_font">Add Category</h2>
                        <form action="{{ route('add_category.submit') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <input class="input_color" type="text" name="category_name" placeholder="Write category name">
                            <select class="input_color" name="status" required>
                                <option value="visible">Visible</option>
                                <option value="not visible">Not Visible</option>
                            </select>
                            <input class="input_color" type="file" name="image" accept="image/*">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
                <!-- container-scroller -->
                <!-- plugins:js -->
                @include('admin.script')
                <script>
                    function closeNotification(button) {
                        const notification = button.parentElement;
                        notification.style.display = 'none';
                        document.querySelector('input[name="category"]').focus(); // Focus back to input
                    }
                </script>
                <!-- End custom js for this page -->
</body>

</html>
