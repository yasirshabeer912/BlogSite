@extends('layouts.master')
@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header bg-dark text-light">
            <h4 class="text-center">Edit Category</h4>
        </div>
        <div class="card-body">
            @if ($errors->any()){
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $errors )
                        <div>{{$errors}}</div>
                    @endforeach
                </div>
            }
                
            @endif
            <form action="{{url('admin/update-category/'.$category->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Category Slug</label>
                    <input type="text" name="cat_slug" value="{{$category->cat_slug}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name="description" rows="5" class="form-control">{{$category->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="">Category Image</label>
                    <input type="file" name="image" class="form-control">
                    <img width="80px" height="80px" src="{{asset('uploads/images/'.$category->image)}}" alt="">
                </div>

                <h6>SEO tags</h6>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{$category->meta_title}}"  class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta description</label>
                    <textarea  name="meta_description" rows="5" class="form-control"> {{$category->meta_description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea  name="meta_keywords" rows="5" class="form-control">{{$category->meta_keywords}}</textarea>
                </div>

                <h6>Status Check</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status:</label>
                        <input type="checkbox" name="navbar_status" {{$category->navbar_status == '1' ? 'Checked' : ''}} id="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status:</label>
                        <input type="checkbox" name="status" {{$category->status == '1' ? 'Checked' : ''}} id="">
                    </div>
                   
                </div>
                <div class="col-md-6 text-center mx-auto">
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
            </form>
        </div>
    </div>
   
</div>
@endsection