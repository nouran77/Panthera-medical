@extends('layouts.cart')

@section('content')
    <!--start-ckeckout-->
    <div class="ckeckout">
        <div class="container">
            <div class="ckeck-top heading">
                <h2>CHECKOUT</h2>
            </div>
            <div class="ckeckout-top">
                <div class="cart-items">
                    <h3>My Shopping Bag (3)</h3>
                    <script>$(document).ready(function(c) {
                            $('.close1').on('click', function(c){
                                $('.cart-header').fadeOut('slow', function(c){
                                    $('.cart-header').remove();
                                });
                            });
                        });
                    </script>
                    <script>$(document).ready(function(c) {
                            $('.close2').on('click', function(c){
                                $('.cart-header1').fadeOut('slow', function(c){
                                    $('.cart-header1').remove();
                                });
                            });
                        });
                    </script>
                    <script>$(document).ready(function(c) {
                            $('.close3').on('click', function(c){
                                $('.cart-header2').fadeOut('slow', function(c){
                                    $('.cart-header2').remove();
                                });
                            });
                        });
                    </script>

                    <div class="in-check" >
                        <ul class="unit">
                            <li><span>Item</span></li>
                            <li><span>Product Name</span></li>
                            <li><span>Unit Price</span></li>
                            <li><span>Quantity</span></li>
                            <li> </li>
                            <div class="clearfix"> </div>
                        </ul>
                        @foreach($cartItems as $cartItem)
                        <ul class="cart-header">
                            <div class="close1"> </div>
                            <li class="ring-in"><a href="single.html" ><img src="{{  asset('img/products') }}/{{ $cartItem->image }}" alt="{{ $cartItem->name }}" class="img-responsive" alt=""></a>
                            </li>
                            <li><span class="name">{{ $cartItem->name }}</span></li>
                            <li><span class="cost">{{ $cartItem->price }}</span></li>
                            <li><span class="quantity">{{ $cartItem->qty }}</span></li>
                            <div class="clearfix"> </div>
                        </ul>
                        @endforeach
                            <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-ckeckout-->
    @endsection