@extends('layouts.frontend')
@section('title', 'Home')
@section('content')


    <article class="col-lg-7 col-md-9 order-md-2 order-1" id="site-content">
        <div class="chapter-container">
            <div class="site-heading">
                <h2>All Topics in {{ $category->name}}</h2>
            </div>
            <div class="course_content">
                <h4 class="chapterlist-header">{{ $category->name}} Tutorial</h4>
                <ul class="chapter-list">
                    @forelse ($post as $posth)
                    <li>
                        <a href="{{url('tutorial/'.$category->cat_slug .'/'.$posth->slug)}}">{{$posth->name}}</a>
                    </li>
                    @empty
                    <li>
                        <h6>No Post Availaible</h6>
                    </li>
                    @endforelse
                </ul>
            </div>

        </div>
    </article>



@endsection


