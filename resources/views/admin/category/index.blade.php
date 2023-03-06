@extends('layouts.master')
@section('title', 'Category')

@section('content')

<div class="container mt-5">
    <div class="card">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
        <div class="card-header bg-dark text-warning">
            <h4 class="text-center">View Category
                <a href="{{'add-category'}}" class="btn btn-primary float-end">Add Category</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Category Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
    
                <tbody>
                    @foreach ( $category as $item )
                        
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <img src="{{asset('uploads/images/'.$item->image)}}" width="80px" height="80px" alt="Img" class=" object-fit-cover">
                        </td>
                        <td>{{$item->status == '1' ? 'Hidden' : 'Shown'}}</td>
                        <td>
                            <a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

  

</div>
@endsection