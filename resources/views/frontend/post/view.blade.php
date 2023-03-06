@extends('layouts.frontend')
@section('title', 'Post View')

@section('content')

    <article class="col-lg-7 col-md-9 order-md-2 order-1" id="site-content">
        <div class="site-heading">
            <h2>{{ $post->name }}</h2>
        </div>
        <p>
       
            {{ $post->description }}
        </p>
       
    </article>



@endsection
