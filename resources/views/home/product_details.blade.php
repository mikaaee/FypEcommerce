<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Adik Cosmetics Website</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style type="text/css">
        /* General Button Styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        /* Primary Button Style */
        .btn-primary {
            background-color: #d895b1;
            /* Blue background */
            color: white;
            /* White text */
            border: 2px solid #d895b1;
            border-radius: 30px;
        }

        /* Button Hover Effect */
        .btn-primary:hover {
            background-color: #fff;
            /* Darker blue on hover */
            color: #d895b1;
            border-color: #d895b1;
            /* Darker border on hover */
            transform: scale(1.05);
            /* Slightly enlarge the button */
        }

        /* Button Active Effect (when clicked) */
        .btn-primary:active {
            background-color: #003d80;
            /* Even darker blue when clicked */
            border-color: #003d80;
        }

        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
            }
        }

        .detail-box {
            margin-left: 40px;
            flex: 1;
            max-width: 50%;
        }

        /* General Reset */
        body,
        h1,
        h2,
        p,
        ul,
        li,
        a,
        button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        
        /* Main Content */
        .product-details {
            display: flex;
            margin: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 100%;
        }

        .product-image img {
            width: 300px;
            border-radius: 10px;
        }

        .product-info {
            margin-left: 40px;
            flex: 1;
        }

        .product-info h2 {
            font-size: 1.8rem;
            color: #000;
            margin-bottom: 10px;
        }

        .product-info .price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .product-info .description {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .quantity-selector button {
            background-color: #f7d5dc;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .quantity-selector button:hover {
            background-color: #d895b1;
            color: #fff;
        }

        .quantity-selector span {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .add-to-cart {
            background-color: #d895b1;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart:hover {
            background-color: #f7d5dc;
            color: #d895b1;
        }
    </style>
</head>

<body>
    
        <!-- header section starts -->
        <header class="header_section">
        @include('home.header')
        <!-- end header section -->
        </header>
        <div class="hero_area">
        <!-- Product Details Section -->
        <main class="product-details">
            <div class="product-image">
                <img src="{{ asset('storage/product/' . $product->image) }}" alt="Product Image">


            </div>
            <div class="product-info">
                <h2>{{ $product->title }}</h2> 
                <p class="price">RM  {{ $product->price }}</p>
                <p class="description">{{ $product->description }}</p>
                <p>Quantity: {{ $product->quantity }}</p>
                <br>
                <div class="quantity-selector">
                    <button class="decrease">-</button>
                    <span>1</span>
                    <button class="increase">+</button>
                </div>
                <a href="" class="add-to-cart">Add to Cart</a>
            </div>
        </main>
    </div>
    <!-- footer start -->
    @include('home.footer')
    <!-- footer end -->

    <!-- jQuery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
    <script>
        // Get the elements
        const decreaseButton = document.querySelector('.decrease');
        const increaseButton = document.querySelector('.increase');
        const quantitySpan = document.querySelector('.quantity-selector span'); // Use this selector to target the span

        // Initialize the quantity
        let quantity = 1;

        // Decrease the quantity
        decreaseButton.addEventListener('click', function() {
            if (quantity > 1) { // Prevent quantity from going below 1
                quantity--;
                quantitySpan.textContent = quantity;
            }
        });

        // Increase the quantity
        increaseButton.addEventListener('click', function() {
            quantity++;
            quantitySpan.textContent = quantity;
        });
    </script>


</body>

</html>
