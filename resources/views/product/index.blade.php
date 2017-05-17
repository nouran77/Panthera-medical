@extends('layouts.product')

@section('content')
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    <!--prdt-starts-->
    <div class="prdt">
        <div class="container">
            <div class="prdt-top">
                <div class="col-md-9 prdt-left">
                    @foreach($products as $product)
                    <div class="product-one">
                        <div class="col-md-4 product-left p-left animatee" data-sr = "enter top, hustle 150 px, wait 300ms" >
                            <div class="product-main simpleCart_shelfItem">
                                {{--<a href="{{route('cart.edit', $product->id)}}" class="mask"><img class="img-responsive zoom-img" src="{{  asset('img/products') }}/{{ $product->image }}" alt="{{ $product->name }}" /></a>--}}
                                <a href="productDetails/{{ $product->id }}" class="mask"><img class="img-responsive zoom-img" src="{{  asset('img/products') }}/{{ $product->image }}" alt="{{ $product->name }}" /></a>
                                <div class="product-bottom">
                                    <h3>{{ $product->name_english }}</h3>
                                    <p>Explore Now</p>
                                    @if($available->available == true)
                                    <h4><a class="item_add" href="productDetails/{{ $product->id }}"><i></i></a> <span name="showthis" class="item_price">{{ $product->price }}</span></h4>
                                    @endif
                                </div>
                                <div class="srch srch1">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                    <div class="product-one">
                        <div class="clearfix"></div>
                    </div>
                </div>
                {{--<input type="checkbox" name="checkbox" id="checkbox" value="scheckbox" />--}}
                {{--<input id="showthis" name="showthis" size="50" type="text" value="text here" />--}}

                <div class="col-md-3 prdt-right">
                    <div class="w_sidebar">
                        <section  class="sky-form">
                            <h4>Catogories</h4>
                            <div class="row1 scroll-pane">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
                                </div>
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
                                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--product-end-->

    {{--<script>--}}
        {{--$(function () {--}}
            {{--$('span[name="showthis"]').hide();--}}

            {{--//show it when the checkbox is clicked--}}
            {{--$('input[name="checkbox"]').on('click', function () {--}}
                {{--if ($(this).prop('checked')) {--}}
                    {{--$('span[name="showthis"]').fadeToggle();--}}
                {{--} else {--}}
                    {{--$('span[name="showthis"]').hide();--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@endsection
