<!DOCTYPE html>
<html lang="en">

<base href="/public">

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
            font-size: 40px;
            padding-bottom: 40px;
            color: black
        }

        .text_color {
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
        .text_color:focus {
            border-color: #007bff;
            /* Change border color on focus */
            background-color: #fff;
            /* Change background color on focus */
            outline: none;
            /* Remove outline on focus */
        }

        .div_design {
            padding-bottom: 15px;
        }

        .div_design label {
            display: inline-block;
            width: 200px;
            color: #909090;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
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

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}

                        </div>
                    @endif

                    <div class="div_center">
                        <h1 class="h2_font">Update Product</h1>


                        <form action="{{ url('/update_product_confirm', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <!--POST (upload datas to db), enctype(upload file)!-->

                            @csrf

                            <div class="div_design">
                                <label class="label">Product Title : </label>
                                <input class="text_color" type="text" name="title" placeholder="Write a Title"
                                    required="" value="{{ $product->title }}">
                            </div>

                            <div class="div_design">
                                <label class="label">Product Description : </label>
                                <input class="text_color" type="text" name="description"
                                    placeholder="Write a Description" required=""
                                    value="{{ $product->description }}">
                            </div>

                            <div class="div_design">
                                <label class="label">Product Price : </label>
                                <input class="text_color" type="number" name="price" placeholder="Write a Price"
                                    required="" value="{{ $product->price }}">
                            </div>

                            <div class="div_design">
                                <label class="label">Product Quantity : </label>
                                <input class="text_color" type="number" min="0" name="quantity"
                                    placeholder="Write a Quantity" required="" value="{{ $product->quantity }}">
                            </div>

                            <div class="div_design">
                                <label class="label">Product Category : </label>
                                <select class="text_color" name="category" required="">
                                    <option value="{{ $product->category }}" selected="">{{ $product->title }}
                                    </option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->category_name }}">
                                            {{ $category->category_name }} <!--will get data from db later!-->
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="div_design">
                                <label class="label"> Current Product Image : </label>
                                <img style="margin:auto" height="80" width="80"
                                    src="/product/{{ $product->image }}">
                            </div>

                            <div class="div_design">
                                <label class="label"> Change Product Image Here : </label>
                                <input class="text_color" type="file" name="image">
                            </div>

                            <div class="div_design">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')
            <!-- End custom js for this page -->
</body>

</html>
