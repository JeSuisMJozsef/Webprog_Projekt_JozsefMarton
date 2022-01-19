@extends('layouts.app')
{{--FYN kulon blade fileban kezelve a success-error modal-ok!!!--}}
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            Categories
            <small class="text-muted">AdminPage</small>
        </h2>
    </div>
@endsection
@section('content')
    <div class="container mx-auto m-5">
        <div class="row">
            <div class="col-6">
                <a href="{{route('categories.create')}}" class="btn btn-primary btn-lg active" role="button"
                   aria-pressed="true">Add new category</a>
            </div>
        </div>
    </div>
    <div class="container mx-auto m-5 ">
        <table class="table-responsive table mx-auto">
            <thead class="thead-light">
            <tr class="mx-auto">
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Description</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row" class="text-center">{{$category->id}}</th>
                    <td class="text-center">{{$category->name}}</td>
                    <td class="text-center">{{$category->description}}</td>
                    <td class="text-center d-flex justify-content-center">
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-outline-warning mx-1"
                           role="button"
                           aria-pressed="true">Edit</a>
                        <hr/>
                        <a href="{{route('categories.show', $category->id)}}" class="btn btn-outline-info mx-1"
                           role="button"
                           aria-pressed="true">Show</a>
                        <hr/>
                        <form method="post" action="{{route('categories.delete',$category ->id)}}"
                              onsubmit="return confirm('Are you sure? It will also delete all products in this category');">

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