@extends('layouts.master')
@section('title', 'Users')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header bg-dark text-light">
                <h4 class="text-center">All Users
                    {{-- <a href="{{url('admin/add-post')}}" class="btn btn-primary float-end">Add Post</a> --}}
                </h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role_as == '1' ? 'Admin' : 'User' }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ url('admin/edit-user/' . $item->id) }}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('admin/delete-post/' . $item->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
