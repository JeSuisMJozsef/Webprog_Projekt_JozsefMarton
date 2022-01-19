@extends('layouts.app')
@extends('modals.modals')
@section('title')
    <div class="d-flex justify-content-end">
        <h2>
            Welcome
            <small class="text-muted">AdminPage</small>
        </h2>
    </div>
@endsection
@section('content')
    <div class="text-center p-5">
        <a href="{{route('home')}}">
            <img src="{{ url('images/welcome.jpeg') }}" class="img-fluid shadow p-3 mb-5 bg-white rounded-circle" alt="welcome"/>
        </a>

    </div>
@endsection



