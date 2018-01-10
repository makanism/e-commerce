@extends('frontend_layout')

@section('css')
<link href="/css/home.css" rel="stylesheet" text="text/css">
@endsection()

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-image" src="/img/venerdi.jpeg"></img>
                <div class="product-item-description">
                    <p>Product Name</p>
                    <p>Rp.1000</p>
                    <p>Discount 70%</p>
                </div>
                <div class="product-item-cta">
                    <button class="btn btn-primary">Beli</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-image" src="/img/venerdi.jpeg"></img>
                <div class="product-item-description">
                    <p>Product Name</p>
                    <p>Rp.1000</p>
                    <p>Discount 70%</p>
                </div>
                <div class="product-item-cta">
                    <button class="btn btn-primary">Beli</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-image" src="/img/venerdi.jpeg"></img>
                <div class="product-item-description">
                    <p>Product Name</p>
                    <p>Rp.1000</p>
                    <p>Discount 70%</p>
                </div>
                <div class="product-item-cta">
                    <button class="btn btn-primary">Beli</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-image" src="/img/venerdi.jpeg"></img>
                <div class="product-item-description">
                    <p>Product Name</p>
                    <p>Rp.1000</p>
                    <p>Discount 70%</p>
                </div>
                <div class="product-item-cta">
                    <button class="btn btn-primary">Beli</button>
                </div>
            </div>
        </div>
    </div>
@endsection()