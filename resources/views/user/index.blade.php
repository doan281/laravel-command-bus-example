@extends('layouts.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">User</h1>
    </div>
    <h2>List of user</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $key => $user)
                <tr>
                    <td>#{{ $user->id  }}</td>
                    <td>{{ $user->name  }}</td>
                    <td>{{ $user->email  }}</td>
                    <td>{{ date('d/m/Y H:i', strtotime($user->created_at))  }}</td>
                    <td>{{ date('d/m/Y H:i', strtotime($user->updated_at))  }}</td>
                    <td>
                        <a href="{{ route('users.edit', ['id' => $user->id ])  }}">Edit</a>&nbsp;|
                        <a href="{{ route('users.delete', ['id' => $user->id ])  }}">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No data.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
