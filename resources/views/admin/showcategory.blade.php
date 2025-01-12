<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">

    <style type="text/css">
        .body {
            font-family: 'Gabarito', sans-serif !important;
        }

        .div_center {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            max-width: 100%;
        }

        .h2_font {
            color: #000;
            text-align: center;
            font-size: 28px;
            font-family: 'Gabarito', sans-serif;
            letter-spacing: 1px;
        }

        .table {
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

        .table th,
        td {
            color: #000;
            padding: 10px;
            font-family: 'Gabarito', sans-serif;
            letter-spacing: 1px;
            /* Add border for clarity */
            word-wrap: break-word;
            /* Prevent content overflow */

        }

        .table th {
            background-color: beige;
            font-weight: bold;
        }

        .table img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 0;
            /* Ensures the image is not circular */
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
                        <div class="table-container">
                            <h2 class="h2_font">Category List</h2>
                            <table class="table">
                                <tr>
                                    <th>Category Name</td>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{ $data->category_name }}</td>
                                        <td>
                                            @if ($data->image)
                                                <img src="{{ asset('images/' . $data->image) }}" alt="{{ $data->category_name }}">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        
                                        <td>{{ $data->status ?? 'Not Set' }}</td>
                                        <td>
                                            <a href="{{ route('edit_category', $data->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <a onclick="return confirm('Are You Sure to Delete This?')"
                                                class="btn btn-danger"
                                                href="{{ url('delete_category', $data->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('admin.script')
</body>

</html>
