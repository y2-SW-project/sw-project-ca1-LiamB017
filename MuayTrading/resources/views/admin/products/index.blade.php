@extends('layouts.logout')

<!-- This page displays all products from the database, each product can be viewed individually by
using the view button, this button uses the route user.products.show -->

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary"> <p class="lead text-white">Products</p>
                    
                </div>

                <div class="card-body">
                    @if (count($products)=== 0)
                    <p>There are no Products </p>
                    @else
                      <table id="table-products" class="table table-hover">
                          <thead>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Price</th>
                              <th>Date Added</th>
                              <th>Brand</th>
                              <th>Condition</th>
                              <th>Type</th>
                             
                         
</thead>
<tbody>
    @foreach ($products as $product)
    <tr data-id="{{ $product->id }}">
        <td>{{ $product->title}}</td>
        <td>{{ $product->description}}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->date_added}}</td>
        <td>{{ $product->brand->title}}</td>
        <td>{{ $product->condition->title}}</td>
        <td>{{ $product->type->title}}</td>
        <td>
        <img src= "{{ asset('/storage/images/product_01.jpg')}}"  class="w-25 rounded  d-block img-fluid" alt="Responsive Image"> 
       
        </td>
        <td>
            <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary">View</a>
            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary mt-3">Edit</a>
   <form style="display:inline-" method="POST" action="{{ route('admin.products.destroy', $product->id) }}">
   <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit" class="form-control btn btn-danger mt-3">Delete</a>
</form>
       

    

</form>
</td>
</tr>

@endforeach
</tbody>
</table>
@endif
</div>
</div>
</div>
</div>
</div>
@endsection


              