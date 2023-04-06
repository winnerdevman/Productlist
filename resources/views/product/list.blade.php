@extends('layouts.app')

@section('content')
<div class="section-products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Products') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 category-list">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="/products">All Items</a>
                                    </li>
                                    @foreach($categories as $category)
                                    <li class="list-group-item @if ($category_id== $category->id) active @endif">
                                        <a href="/products?category={{$category->id}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-md-10 products">
                                <div class="row mb-4px">
                                    <div class="col-md-12">
                                        <a href="/products?category={{$category->id}}&sort=asc" class="btn @if ($sort && $sort=='asc') btn-success @endif">
                                            Asc
                                        </a>
                                        <a href="/products?category={{$category->id}}&sort=desc" class="btn @if ($sort && $sort=='desc') btn-success @endif">
                                            Desc
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach($products as $product)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div id="product-1" class="single-product">
                                                <a href="/products/{{$product->id}}">
                                                <div class="part-1">
                                                    <ul>
                                                        <!--li><a href="#"><i class="fas fa-shopping-cart"></i></a></li-->
                                                    </ul>
                                                </div></a>
                                                <div class="part-2">
                                                    <h3 class="product-title">{{$product->name}}</h3>
                                                    <h4 class="product-old-price">${{$product->price}}</h4>
                                                    <h4 class="product-price">${{$product->price}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Single Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
