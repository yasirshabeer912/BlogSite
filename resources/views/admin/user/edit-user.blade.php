@extends('layouts.master')
@section('title', 'Users')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header bg-dark text-light">
                <h4 class="text-center">Edit User
                    <a href="{{url('admin/users')}}" class="btn btn-primary float-end">view Users</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/update-user/'.$users->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$users->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$users->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Role</label>
                       <select name="role_as" id="" class="form-control">
                        <option value="1" {{$users->role_as == '1' ? 'selected' : ''}}>Admin</option>
                        <option value="0"{{$users->role_as == '0' ? 'selected' : ''}}>User</option>
                       </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update User</button>

                </form>
            </div>
        </div>

    </div>
@endsection
