@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{ route('home.create') }}" class="btn btn-primary mb-3">Add User</a>
                    {{--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}--}}

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th colspan="2" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="{{ route('home.edit', $user->id) }}" class="btn btn-link text-decoration-none">edit</a></td>
                            <td>
                                <form action="{{ route('home.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link text-decoration-none">delete</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>








            </div>
        </div>
    </div>
</div>
@endsection
