<!DOCTYPE html>
<html lang="en">
<base href="/public">

<head>
    <title>Edit Category</title>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">

    @include('admin.css')
    <style type="text/css">
        body {
            font-family: 'Gabarito', sans-serif !important;
        }

        .h2_font {
            font-size: 28px;
            text-align: left;
            color: #000;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .div_center {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .label{
            color: #909090;
            letter-spacing: 2px;
        }

        /* Styling for input fields */
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
            /* Smooth transition for focus and hover effects */
        }

        /* Focused state for input fields */
        .input_color:focus {
            border-color: #007bff;
            /* Blue border on focus */
            outline: none;
            /* Remove default outline */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Soft blue glow */
        }

        /* Placeholder text styling */
        .input_color::placeholder {
            color: #aaa;
            /* Lighter color for placeholder text */
            font-style: italic;
            /* Italicized placeholder text */
        }

        /* Styling for input fields with error state (if applicable) */
        .input_color.error {
            border-color: #dc3545;
            /* Red border for errors */
            box-shadow: 0 0 5px rgba(220, 53, 69, 0.5);
            /* Red glow for errors */
        }

        /* Styling for labels (optional) */
        label {
            font-size: 16px;
            width: 200px;
            color: #909090;
            margin-bottom: 5px;
            display: block;
            /* Ensure labels appear above inputs */
        }

        /* Default button styling */
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
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.header')

            <div class="main-panel">
                <div class="content-wrapper" style="background-color: rgb(225, 225, 225);">
                    <!-- code for message, boleh reuse !-->
                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}

                        </div>
                    @endif

                    <div class="div_center">
                        <h2 class="h2_font">Edit Category</h2>

                        <form class="form" action="{{ route('update_category', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <!-- Category Name -->
                            <!-- Category Name (pre-filled with existing category name) -->
                            <label class="label" for="category_name">Category Name</label>
                            <input class="input_color" type="text" name="category_name" id="category_name"
                                value="{{ $data->category_name }}" placeholder="Category Name" required>


                            <!-- Category Status (pre-filled with existing status) -->
                            <label class="label" for="status">Status</label>
                            <select class="input_color" name="status" required>
                                <option value="visible" {{ $data->status == 'visible' ? 'selected' : '' }}>Visible
                                </option>
                                <option value="not visible" {{ $data->status == 'not visible' ? 'selected' : '' }}>
                                    Not
                                    Visible</option>
                            </select>

                            <!-- Category Image (optional upload for new image) -->
                            <label class="label" for="image">Image</label>
                            <input class="input_color" type="file" name="image" accept="image/*">

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
