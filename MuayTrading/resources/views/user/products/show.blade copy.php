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

                <div class="card-body">
                    
                      <table id="table-products" class="table table-hover">
                          <tbody>
                              <tr>
                          <thead>
                              <td>Title</td>
                              <td>{{ $product->title }}</td>
</tr>
<tr>
                          <thead>
                              <td>Description</td>
                              <td>{{ $product->description }}</td>
</tr>
<tr>
                          <thead>
                              <td>Price</td>
                              <td>{{ $product->price }}</td>
</tr>
<tr>
                          <thead>
                              <td>Date Added</td>
                              <td>{{ $product->date_added }}</td>
</tr>
<tr>
                          <thead>
                              <td>Brand</td>
                              <td>{{ $product->brand->title }}</td>
</tr>
<tr>
                          <thead>
                              <td>Type</td>
                              <td>{{ $product->type->title }}</td>
</tr>
<tr>
                          <thead>
                              <td>Condition</td>
                              <td>{{ $product->condition->title }}</td>
</tr>

<tr>
                          <thead>
                             
                              <td>   <img src= "{{ asset('/storage/images/product_01.jpg')}}"  class="w-25 rounded  d-block img-fluid" alt="Responsive Image"> </td>
</tr>


                  

                    
<tbody>
</table>
    
            <a href="{{ route('user.products.index') }}" class="btn btn-default">Back</a>

</div>
</div>
</div>
</div>  
          </div>
          @endsection