@extends('layouts.app')
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            Dashboard
            <small class="text-muted">AdminPage</small>
        </h2>
    </div>
@endsection
@section('content')
    <div class="d-flex justify-content-center h-100 p-5">
        <div class="row">
            <div class="card m-5" style="width: 18rem;">
                <img src="{{ url('images/admin.png') }}" class="card-img-top" alt="...">
                <div class="card-body ">
                    <h5 class="card-title fw-bolder">Admin users</h5>
                    <p class="card-text">Add, create, update, or delete users. </p>
                    <a href="{{route('users.index')}}" class="btn btn-primary stretched-link">Go to users</a>
                </div>
            </div>
            <div class="card m-5" style="width: 18rem;">
                <img src="{{ url('images/categories.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder">Categories</h5>
                    <p class="card-text">Add, create, update, or delete categories.</p>
                    <a href="#" class="btn btn-primary stretched-link">Go to categories</a>
                </div>
            </div>
            <div class="card m-5" style="width: 18rem;">
                <img src="{{ url('images/fruit.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fw-bolder">Products</h5>
                    <p class="card-text">Add, create, update, or delete products.</p>
                    <a href="#" class="btn btn-primary stretched-link">Go to productsb</a>
                </div>
            </div>
        </div>
    </div>


@endsection
