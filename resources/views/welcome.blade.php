@section('title')
    Home
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset('front/images/repea.jpg')}}" class="slider_pic">
                            <div class="carousel-caption" style="padding-bottom: 8% !important;">
                                <img src="{{asset('front/images/t-shirt8_03_03.png')}}" class="col-md-4 col-xs-9 col-sm-6  img-responsive t-shirt" style="margin-right: 60px;">
                                <h3 style="text-align:start; font-size:36px;">Cowhide <br> Standard Crew</h3>
                                <p style="text-align:start; width:69%;">White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-neck T-shirt is made of organic cotton and comes in a regular fit.</p>
                                <a type="button" class="btn btn-success">SHOP NOW</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset('front/images/repea.jpg')}}" class="slider_pic">
                            <div class="carousel-caption" style="padding-bottom: 8% !important;">
                                <img src="{{('front/images/t-shirt8_03_03.png')}}" class="col-md-4 col-xs-9 col-sm-6  img-responsive t-shirt" style="margin-right: 60px;">
                                <h3 style="text-align:start; font-size:36px;">Cowhide <br> Standard Crew</h3>
                                <p style="text-align:start; width:69%;">White coloured, short-sleeved, printed T-shirt for men by Levi's. This crew-neck T-shirt is made of organic cotton and comes in a regular fit.</p>
                                <a type="button" class="btn btn-success">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <a href="#carousel-example-generic" data-slide="prev"></a>
                    <a href="#carousel-example-generic" data-slide="next"></a>
                </div>
            </div>
        </div>
    </div>


    <style>

        .feature{
            margin-top:30px;
            background-color:#42c0b8;
            width:100%;
            height:65px;
            color:#fff;
            text-align:center;
        }
    </style>
    <div class="feature container">
        <h3 class="col-xs-12 col-md-5">FEATURED PRODUCTS</h3>
    </div>
    <!-- cart for buy -->
    <div class="container cart">
        <div class="new col-md-4 col-xs-12">
            <img src="{{asset('front/images/shoes.png.png')}}" alt="Red Shoes" class="prod_pic img-responsive">
            <h3 class="prod_name">Branded Shoe</h3>
            <p class="prod_price">$300</p>
            <a class="btn btn-default prod_button" href="#" role="button">BUY NOW</a>
        </div>
        <div class="new col-md-4 col-xs-12">
            <img src="{{asset('front/images/new-t--shirt_06.jpg')}}" alt="Red Shoes" class="prod_pic img-responsive">
            <h3 class="prod_name">Branded Shoe</h3>
            <p class="prod_price">$150</p>
            <a class="btn btn-default prod_button" href="#" role="button">BUY NOW</a>
        </div>
        <div class="new col-md-4 col-xs-12">
            <img src="{{asset('front/images/new-t-shirt_03.jpg')}}" alt="Red Shoes" class="prod_pic img-responsive">
            <h3 class="prod_name">Branded Shoe</h3>
            <p class="prod_price">$300</p>
            <a class="btn btn-default prod_button" href="#" role="button">BUY NOW</a>
        </div>
        <div class="new col-md-4 col-xs-12">
            <img src="{{asset('front/images/walet_11.jpg')}}" alt="Red Shoes" class="prod_pic img-responsive">
            <h3 class="prod_name">Branded Shoe</h3>
            <p class="prod_price">$300</p>
            <a class="btn btn-default prod_button" href="#" role="button">BUY NOW</a>
        </div>
        <div class="new col-md-4 col-xs-12">
            <img src="{{asset('front/images/shoes.png.png')}}" alt="Red Shoes" class="prod_pic img-responsive">
            <h3 class="prod_name">Branded Shoe</h3>
            <p class="prod_price">$300</p>
            <a class="btn btn-default prod_button" href="#" role="button">BUY NOW</a>
        </div>
        <div class="new col-md-4 col-xs-12">
            <img src="{{asset('front/images/walet_11.jpg')}}" alt="Red Shoes" class="prod_pic img-responsive">
            <h3 class="prod_name">Branded Shoe</h3>
            <p class="prod_price">$300</p>
            <a class="btn btn-default prod_button" href="#" role="button">BUY NOW</a>
        </div>
    </div>
@endsection

