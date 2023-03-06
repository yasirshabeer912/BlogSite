@extends('layouts.frontend')
@section('title', 'Home')

@section('content')

<article class="col-lg-7 col-md-9 order-md-2 order-1" id="site-content">
    <!-- <h1 class="site-heading">Welcome To Yahoo Baba</h1> -->
    <div class="service-info">
        <div class="row">
            @php
            $categories = App\Models\Category::where('navbar_status','0')->where('status', '0')->get();
        @endphp

        @foreach ($categories as $catitem )
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-box">
                 
                  
                    <a href="{{url('tutorial/'.$catitem->cat_slug)}}">
                        <img src="{{asset('uploads/images/'.$catitem->image)}}" alt="">
                        <div class="service-content">
                            <h3 class="service-title">Learn {{ $catitem->name}}</h3>
                            <span class="read-more">Read</span>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</article>





@endsection