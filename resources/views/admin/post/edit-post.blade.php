@extends('layouts.master')
@section('title', 'post')

@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header bg-dark text-light">
                <h4 class="text-center">Edit Post</h4>
            </div>
            <div class="card-body">
                @if ($errors->any()){
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $errors)
                            <div>{{ $errors }}</div>
                        @endforeach
                    </div>
                    }

                @endif
                <form action="{{ url('admin/update-post/'.$post->id) }}" method="post">
                    @csrf
                    @method('PUT')
                   
                    <div class="mb-3">
                        <label for="">Post Name</label>
                        <input type="text" name="name" value="{{$post->name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Post Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{$post->slug}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            <option disabled>Choose...</option>
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{$post->category_id== $item->id ? 'selected' : ''}}>
                                    {{ $item->name }}
                                </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="mySsummernote" rows="5" class="form-control">{{$post->description}}"</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">Post Iframe</label>
                        <input type="text" name="yt_frame" class="form-control" value="{{$post->yt_frame}}">
                    </div>

                    <h6>SEO tags</h6>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{$post->meta_title}}">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta description</label>
                        <textarea name="meta_description" rows="5" class="form-control">{{$post->meta_description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword" rows="5" class="form-control">{{$post->meta_keyword}}</textarea>
                    </div>

                    <h6>Status Check</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="">Status:</label>
                            <input type="checkbox" name="status" {{$post->status == '1' ? 'Checked' : ''}} id="">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update post</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
@endsection
