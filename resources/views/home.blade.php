@extends('frontend_layout')

@section('css')
<link href="/css/home.css" rel="stylesheet" text="text/css">
@endsection()

@section('content')
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="product-item-container">
                <img class="product-item-image" src="/img/venerdi.jpeg"></img>
                <div class="product-item-description">
                <!--ambil data -->
                    <p>{{ $product->name }}</p>
                    <p>Rp {{$product->price }}</p>
                    <p>Discount {{ $product ->discount }}%</p>
                </div>
                <div class="product-item-cta">
                    <button class="btn btn-primary beli-cta" data-id="{{$product->id}}">Beli</button>
                </div>
            </div>
        </div>
       @endforeach 
    </div>    
@endsection()

@section('js')

<script>
    $(".beli-cta").on("click",function(event) {
        var el = event.target
        var id = $(el).data('id');
        alert("tambah cart"+id);
        $.post('/cart/add-content',
        {id: id},
        function(){
            refreshCart();
        
        });
    });
</script>
@endsection