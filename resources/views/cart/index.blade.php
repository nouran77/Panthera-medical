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
                    <h3>My Shopping Bag ({{ Cart::count() }})</h3>
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
                            <div class="close1"></div>
                            <li class="ring-in"><img src="{{  asset('img/products') }}/{{ $cartItem->options->has('image')}}" alt="{{ $cartItem->name }}" ></a>
                            </li>
                            <li><span class="name">{{ $cartItem->name }}</span></li>
                            <li><span class="cost">{{ $cartItem->price }}</span></li>
                            <li><span class="quantity">

                            <form action="{{ route('cart.update',$cartItem->rowId) }}" method="PUT">

                             <input style="width: 30px;" type="text" value="{{ $cartItem->qty }}">

                                <input type="submit" class="btn btn-sm btn-default" value="submit">

                            </form>
                            </span></li>
                            <div class="clearfix"> </div>
                        </ul>
                        @endforeach
                            <div class="clearfix"> </div>
                    </div>
                    <section id="do_action" class="cart">
                        <div class="container">
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                                <div class="total_area">
                                    <ul>
                                        <li>Items<span> {{ Cart::count() }}</span></li>
                                        <li>Total<span>{{ Cart::total() }}</span></li>
                                        <li>Total<span>{{ Cart::tax() }}</span></li>
                                    </ul>
                                    <a class="btn btn-default update" href="">Checkout</a>
                                    <a class="btn btn-default check_out" href="">Cancel</a>
                                </div>
                            </div>
                        </div>
                </section><!--/#do_action-->
                </div>
            </div>
        </div>
    </div>
    <!--end-ckeckout-->
    @endsection