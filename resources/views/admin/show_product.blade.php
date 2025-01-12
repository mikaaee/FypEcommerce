<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">

    <style type="text/css">
        .div_center {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            /* Add scrolling for wide content */
            max-width: 100%;
            /* Ensure it doesn’t overflow its container */
        }

        .table_des {
            margin: auto;
            width: 100%;
            /* Take full width of the div_center */
            max-width: 100%;
            /* Prevent exceeding the div_center */
            text-align: center;
            margin-top: 40px;
            border-collapse: collapse;
            /* Avoid extra borders */
            overflow-x: auto;
            /* Scroll if table is too wide */
        }

        .table_des td,
        .table_des th {
            color: #000;
            padding: 10px;
            font-family: 'Gabarito', sans-serif;
            letter-spacing: 1px;
            /* Add border for clarity */
            word-wrap: break-word;
            /* Prevent content overflow */
        }

        .table_des th {
            background-color: beige;
            font-weight: bold;
        }

        .img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            /* Prevent image distortion */
        }

        .h2_font {
            color: #000;
            text-align: center;
            font-size: 28px;
            font-family: 'Gabarito', sans-serif;
            letter-spacing: 1px;
        }

        .btn {
            padding: 5px 10px;
            font-size: 0.9rem;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-right: 7px;
        }

        .btn-success {
            background-color: #1a7b31;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-success:hover,
        .btn-success:focus {
            background-color: #146624;
            /* A darker shade for hover/focus */
            transform: scale(1.05);
            /* Slight zoom effect */
            outline: none;
            /* Removes default outline */
        }

        .btn-danger {
            background-color: #dc7b35;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-danger:hover,
        .btn-danger:focus {
            background-color: #b35f27;
            /* A darker shade for hover/focus */
            transform: scale(1.05);
            /* Slight zoom effect */
            outline: none;
            /* Removes default outline */
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
                        <h2 class="h2_font">All Products</h2>

                        <table class="table_des">
                            <tr>
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Product Image</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>

                            @foreach ($product as $product)
                                <tr>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <img class="img" src="/product/{{ $product->image }}">
                                    </td>

                                    <td>
                                        <a class="btn btn-danger"
                                            onclick="return confirm('Are You Sure to Delete This?')"
                                            href="{{ url('delete_product', $product->id) }}">Delete</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success"
                                            href="{{ url('update_product', $product->id) }}">Edit</a>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')
            <!-- End custom js for this page -->
</body>

</html>
