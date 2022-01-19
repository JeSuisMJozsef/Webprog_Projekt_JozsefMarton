@extends('layouts.app')
{{--FYN kulon blade fileban kezelve a success-error modal-ok!!!--}}
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            {{$cat->name}} Category
            <small class="text-muted">AdminPage</small>
        </h2>
    </div>
@endsection
@section('content')

    <div class="container mx-auto m-5">
        <div class="row">
            <div class="col-6">
                <a href="{{url()->previous()}}" class="btn btn-secondary btn-lg active" role="button"
                   aria-pressed="true">Back</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto m-5 ">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h3><strong>Name:</strong></h3>
                    <h4>{{ $cat->name }}</h4>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h3><strong>Description:</strong></h3>
                   <h4>{{ $cat->description }}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h4><strong> Products in this category: </strong></h4>
                </div>
            </div>
        </div>
        <table class="table-responsive table mx-auto">
            <thead class="thead-light">
            <tr class="mx-auto">
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Sku</th>
                <th scope="col" class="text-center">Packaging</th>
                <th scope="col" class="text-center">Stock</th>
                <th scope="col" class="text-center">Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prod as $product)
                <tr>
                    <th scope="row" class="text-center">{{$product->id}}</th>
                    <td class="text-center">{{$product->name}}</td>
                    <td class="text-center">{{$product->sku}}</td>
                    <td class="text-center">{{$product->packaging}}</td>
                    <td class="text-center">{{$product->stock}}</td>
                    <td class="text-center">{{$product->price}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@endsection