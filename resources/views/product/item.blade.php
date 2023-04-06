@extends('layouts.app')

@section('content')
<div class="section-products">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section class="text-center text-lg-start shadow-1-strong rounded">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-10">
                        <div class="card">
                            <div class="card-body m-3">
                            <div class="row">
                                <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                <img src="https://i.ibb.co/L8Nrb7p/1.jpg"
                                    class="img-fluid shadow-1" alt="woman avatar" />
                                </div>
                                <div class="col-lg-8">
                                    <p class="fw-bold lead mb-2"><strong>{{$product->name}}</strong></p>
                                    <p class="text-muted fw-light mb-4">{{$product->decription}}
                                    </p>
                                    <p>${{$product->price}}</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>
            </div>
        </div>
    </div>
</div>

@endsection
