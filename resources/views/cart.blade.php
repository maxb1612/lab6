@extends('layouts.main')

@section('main')
    <div class="wrapper">
        <div class="content">
            <div class="cart">
                <h1>Кошик</h1>
                @if($cart)
                    <div class="cart-content">
                        @foreach($cart as $item)
                            <div class="cart-item">
                                <ul>
                                    <li><h2>{{$item->name}}</h2></li>
                                    <li><h3>{{$item->description}}</h3></li>
                                    <li><h2>{{$item->price}} грн</h2></li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <h2 style="margin-left: 18%">Усього: {{$total}} грн</h2>
                    <form class="order-button">
                        <button>
                            <a>Замовити</a>
                        </button>
                    </form>
                @else
                    Кошик пустий
                @endif
            </div>
        </div>
    </div>

@endsection
