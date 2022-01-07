@extends('layouts.app')
{{--FYN kulon blade fileban kezelve a success-error modal-ok!!!--}}
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            Users
            <small class="text-muted">AdminPage</small>
        </h2>
    </div>
@endsection
@section('content')
    <div class="container mx-auto m-5">
        <div class="row">
            <div class="col-6">
                <a href="{{route('users.create')}}" class="btn btn-primary btn-lg active" role="button"
                   aria-pressed="true">Add new admin
                    user</a>
            </div>
        </div>
    </div>
    <div class="container mx-auto m-5 ">
        <table class="table mx-auto">
            <thead class="thead-light">
            <tr class="mx-auto">
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Username</th>
                <th scope="col" class="text-center">E-mail address</th>
                <th scope="col" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row" class="text-center">{{$user->id}}</th>
                    <td class="text-center">{{$user->name}}</td>
                    <td class="text-center">{{$user->email}}</td>
                    <td class="text-center d-flex justify-content-center">
                        <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-warning mx-1"
                           role="button"
                           aria-pressed="true">Edit</a>
                        <hr/>
                        <form method="post" action="{{route('users.delete',$user->id)}}"
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