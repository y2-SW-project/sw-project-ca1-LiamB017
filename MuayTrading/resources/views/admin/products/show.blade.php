@extends('layouts.logout')

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
<div class="container d-flex justify-content-center">
<div class="row mt-3">

<div class="col-6 ">
    <img src= "{{ asset('/storage/images/product_01.jpg')}}"  class=" rounded  d-block img-fluid" alt="Responsive Image">
</div>

<div class="col-6 px-5 ">
    <p class="producttitle fs-3 d-flex text-weight-bolder ">{{$product->title}}</p>
    <p class="price fs-4 d-flex text-weight-bolder ">${{$product->price}}</p>
    <div class="Gear">
    <p class="price fs-4 d-flex text-weight-bolder pt-4">Gear Type:           {{$product->type->title}}</p>
    <div class="divider py-1 bg-dark "></div>
    </div>
    <div class="Brand">
    <p class="price fs-4 d-flex text-weight-bolder mt-2 ">Brand:           {{$product->brand->title}}</p>
    <div class="divider py-1 bg-dark "></div>
    </div>
    <div class="Condition">
    <p class="price fs-4 d-flex text-weight-bolder mt-2 ">Condition:           {{$product->condition->title}}</p>
    <div class="divider py-1 bg-dark "></div>
    </div>
    <a href="{{ route('user.products.index') }}" class="btn  btn-primary btn-lg d-flex justify-content-center mt-4 ">BUY NOW</a>

</div>
</div>


</div>
<div class="container">
<div class="row mt-3">
<div class="col">
<a href="{{ route('admin.products.index') }}" class="btn  btn-primary btn-lg mx-4 mt-3 ">Back</a>
</div>
</div>
</div>
<div class="col">

</div>
</div>
</div>
</div>
</div>  
          </div>
        
        
          @endsection