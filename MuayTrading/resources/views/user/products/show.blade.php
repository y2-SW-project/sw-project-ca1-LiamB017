@extends('layouts.app')

<!-- This view shows a previously selected product individually, along with all of it's info -->

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">
                    Product: {{ $product->title }}
                </div>


    

</div>
<div class="container">
<div class="row">

<div class="col-6">
    <img src= "{{ asset('/storage/images/product_01.jpg')}}"  class=" rounded  d-block img-fluid" alt="Responsive Image">
</div>

<div class="col-6 px-5 ">
    <p class="producttitle fs-3 d-flex text-weight-bolder ">{{$product->title}}</p>
    <p class="price fs-4 d-flex text-weight-bolder ">${{$product->price}}</p>
    <div class="Gear">
    <p class="price fs-4 d-flex text-weight-bolder pt-4">Gear Type:           {{$product->type->title}}</p>
    <div class="divider py-1 bg-dark "></div>
    </div>
    <p class="price fs-4 d-flex text-weight-bolder mt-2 ">Brand:           {{$product->brand->title}}</p>

</div>
</div>


</div>

<a href="{{ route('user.products.index') }}" class="btn btn-default">Back</a>
</div>
</div>
</div>  
          </div>
          @endsection