<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-4 d-flex align-items-stretch">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{url('product_details',$product->id)}}" class="option1">
                                    Product Details
                                </a>
                                <a href="" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('product/' . $product->image) }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{ $product->title }}
                            </h5>
                            <h6>
                                RM{{ $product->price }}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination-container" style="padding-top: 20px;">
            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</section>
</body>
</html>
