@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
        @endcomponent
    </div>
    <div class="col-9">
        <div class="container mt-4">
            <div class="row w-100">
                @foreach($products as $product)
                <div class="col-3">
                    <a href="{{route('products.show', $product)}}">
                        @if ($product->image !== "")
                        <img src="{{ asset($product->image) }}" class="img-thumbnail">
                        @else
                        <img src="{{ asset('img/dummy.png')}}" class="img-thumbnail">
                        @endif
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="samuraimart-product-label mt-2">
                                {{$product->name}}<br>
                                <label>￥{{$product->price}}</label>
                            </p>
                            <!-- <p class="star-rating"> -->
                            <span class="star-rating" data-rate="{{ round($product->reviews->avg('score') * 2) / 2 }}">
                            </span>
                            <!-- </p> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection