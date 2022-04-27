@extends('layouts.logout')

<!-- Users may edit an already existing product in the database, admin.products.update is used to
save the changes made to a product -->
@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Edit product
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.products.update', $product->id)}}">
            <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" />
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" />
              </div>
              <div class="form-group">
                <label for="date_added"> Date Added</label>
                <input type="date" class="form-control" id="date_added" name="date_added" value="{{ old('date_added') }}" />
              </div>
              <div class="form-group">
                <label for="brand_id">Brand</label>
                <input type="text" class="form-control" id="brand_id" name="brand_id" value="{{ old('brand_id') }}" />
              </div>
              <div class="form-group">
                <label for="type_id">Type</label>
                <input type="text" class="form-control" id="type_id" name="type_id" value="{{ old('type_id') }}" />
              </div>
              <div class="form-group">
                <label for="condition_id">Condition</label>
                <input type="text" class="form-control" id="condition_id" name="condition_id" value="{{ old('condition_id') }}" />
              </div>
              <div class="form-group">
                <label for="image_id">Image</label>
                <input type="text" class="form-control" id="image_id" name="image_id" value="{{ old('image_id') }}" />
              </div>
              

              <a href="{{ route('admin.products.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection