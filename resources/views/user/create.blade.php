@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <h2>Add user</h2>
            <form method="post" action="{{ route('users.store') }}">
                <div class="form-group">
                    {{ csrf_field() }}
                </div>
                <div class="form-group">
                    <label for="name">Fullname</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="{{ old('name') }}">
                    @if ($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span>@endif
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                    @if ($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>@endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))<span class="text-danger">{{ $errors->first('password') }}</span>@endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
