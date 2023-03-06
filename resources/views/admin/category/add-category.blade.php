@extends('layouts.master')
@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header bg-dark text-light">
            <h4 class="text-center">Add Category</h4>
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
            <form action="{{url('admin/insert-category')}}" method="post" enctype="multipart/form-data" >
                @csrf

                <div class="mb-3">
                    <label for="">Category Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Category Slug</label>
                    <input type="text" name="cat_slug" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea  name="description" rows="5" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Category Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <h6>SEO tags</h6>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Meta description</label>
                    <textarea  name="meta_description" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea  name="meta_keywords" rows="5" class="form-control"></textarea>
                </div>

                <h6>Status Check</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status:</label>
                        <input type="checkbox" name="navbar_status" id="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status:</label>
                        <input type="checkbox" name="status" id="">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
   
</div>
@endsection