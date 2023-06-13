@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <h2>Edit user</h2>
            <form method="post" action="{{ route('users.update', ['id' => $user->id]) }}">
                <div class="form-group">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $user->id }}">
                </div>
                <div class="form-group">
                    <label for="name">Fullname</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    @if ($errors->has('name'))<span class="text-danger">{{ $errors->first('name') }}</span>@endif
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                           readonly>
                    @if ($errors->has('email'))<span class="text-danger">{{ $errors->first('email') }}</span>@endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
