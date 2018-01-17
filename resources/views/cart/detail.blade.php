@extends('frontend_layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Barang</th>
                    <th>QTY</th>
                    <th>Harga</th>
                </tr>
                @foreach($productSelected as $product)
                    <tr>
                        <th>{{ $product->name}}</th>
                        <th>{{ $qty[$product->id]}}</th>
                        <th>{{ $product->price}}</th>
                    </tr>
                @endforeach
            </table>
            <div>
                Total: {{$total}}
            </div>
            <div>
                <a class="btn btn-primary" href="#">Check out</a>
            </div>
        </div>
    </div>
@endsection