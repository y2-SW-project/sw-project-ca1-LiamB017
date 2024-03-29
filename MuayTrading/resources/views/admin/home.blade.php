@extends('layouts.logout')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-sd">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              
                 You are logged in as admin
                 <a href="{{ route('admin.products.create') }}" class="btn btn-danger btn-md">Sell</button></a>
                 <a href="{{ route('admin.products.index') }}" class="btn btn-danger btn-md">Browse</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection