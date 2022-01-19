@extends('layouts.app')
{{--FYN kulon blade fileban kezelve a success-error modal-ok!!!--}}
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            Products
            <small class="text-muted">AdminPage</small>
        </h2>
    </div>
@endsection
@section('content')
    <div class="container mx-auto m-5">
        <div class="row">
            <div class="col-6">
                <a href="{{route('products.create')}}" class="btn btn-primary btn-lg active" role="button"
                   aria-pressed="true">Add new product</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto m-5">
        <div class="row">
            <div >
                <form class=" d-flex" method="get" action="{{route('products.search')}}">
                    <input class="form-control me-2 w-25" type="search" name="search"
                           placeholder="Search in products (name or sku)"
                           aria-label="Search" required>
                    <button class="btn btn-outline-success " type="submit">Search</button>
                    @if(isset($search))
                        <h4 class="btn btn-outline-success d-flex mx-2 my-0 ">{{$search}} <a href="{{route('products.index')}}"
                                                                                class="btn-close"
                                                                                role="button"
                                                                                aria-pressed="true"></a></h4>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <div class="container mx-auto m-5 ">
        <table class="table-responsive table mx-auto">
            <thead class="thead-light">
            <tr class="mx-auto">
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Category</th>
                <th scope="col" class="text-center">Sku</th>
                <th scope="col" class="text-center">Packaging</th>
                <th scope="col" class="text-center">Stock</th>
                <th scope="col" class="text-center">Price</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr ></tr>
            @foreach($products as $product)
                <tr>
                    <th scope="row" class="text-center align-middle">{{$product->id}}</th>
                    <td class="text-center align-middle">{{$product->name}}</td>
                    <td class="text-center align-middle">{{$product->category->name}}</td>
                    <td class="text-center align-middle">{{$product->sku}}</td>
                    <td class="text-center align-middle">{{$product->packaging}}</td>
                    <td class="text-center align-middle">{{$product->stock}}</td>
                    <td class="text-center align-middle">{{$product->price}}</td>
                    <td class="text-center d-flex justify-content-center">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-outline-warning mx-1"
                           role="button"
                           aria-pressed="true">Edit</a>
                        <hr/>
                        <form method="post" action="{{route('products.delete',$product->id)}}"
                              onsubmit="return confirm('Are you sure?');">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger mx-1">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@endsection