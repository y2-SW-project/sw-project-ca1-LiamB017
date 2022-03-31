@extends('layouts.app')

<!-- This page displays all products from the database, each product can be viewed individually by
using the view button, this button uses the route user.products.show -->

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products
                    
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
                              <th>Type</th>
                              <th>Condition</th>
                              <th></th>
</thead>
<tbody>
    @foreach ($products as $product)
    <tr data-id="{{ $product->id }}">
        <td>{{ $product->title}}</td>
        <td>{{ $product->description}}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->date_added}}</td>
        <td>{{ $product->brand_id}}</td>
        <td>{{ $product->type->title}}</td>
        <td>{{ $product->condition_id}}</td>

        <td>
            <a href="{{ route('user.products.show', $product->id) }}" class="btn btn-primary">View</a>
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


              