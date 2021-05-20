@extends('layouts.main')
@section('title')
    Категорія товару
@endsection

@section('main')

    <div class="wrapper">

        <div class="content">
            <h1>Рекомендуємо</h1>

            <div class="container-xxl container-sm container flex-wrap">
                @if($products)
                    @foreach($products->chunk(4) as $product)
                        <div class="row row-cols-4">
                            @foreach($product as $add)
                                <div class="col-xxl-3 col-sm-6 col-12">
                                    <div class="item-box">
                                        <a>
                                            <img src="{{$add->pic_path}}" alt="item_placeholder">
                                        </a>
                                        <div class="item-box-text">
                                            <h2 class="item-name"><a>{{$add->name}}</a></h2>
                                            <h3 class="item-description"><a>{{$add->description}}</a></h3>
                                        </div>
                                        <ul>
                                            <li><h2><a class="item-price">{{$add->price}} грн</a></h2></li>
                                            <li><h2><a href="#" class="item-buy">У кошик</a></h2></li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @else
                    Упс, щось не так
                @endif

            </div>
        </div>
    </div>
@endsection
