@extends('layouts.app')
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            Edit product
        </h2>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit product: {{$product->name}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update',$product->id) }}">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="category"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                                <div class="col-md-6">
                                    <select id="category"
                                            class="form-control @error('category') is-invalid @enderror"
                                            name="category_id"
                                            required autofocus>
                                        <option value="{{$product->category_id}}">{{$product->category->name}}</option>
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{$product->name }}" required autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="sku"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Sku') }}</label>

                                <div class="col-md-6">
                                    <input id="sku" type="text"
                                           class="form-control @error('sku') is-invalid @enderror"
                                           name="sku"
                                           value="{{ $product->sku }}" required>

                                    @error('sku')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="packaging"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Packaging') }}</label>

                                <div class="col-md-6">
                                    <input id="packaging" type="text"
                                           class="form-control @error('packaging') is-invalid @enderror"
                                           name="packaging"
                                           value="{{ $product->packaging }}" required>

                                    @error('packaging')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="stock"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Stock') }}</label>

                                <div class="col-md-6">
                                    <input id="stock" type="number" min="0" step="0.1"
                                           class="form-control @error('stock') is-invalid @enderror"
                                           name="stock"
                                           value="{{ $product->stock }}" required>

                                    @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" min="0.5" step="0.1"
                                           class="form-control @error('price') is-invalid @enderror"
                                           name="price"
                                           value="{{ $product->price }}" required>

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
