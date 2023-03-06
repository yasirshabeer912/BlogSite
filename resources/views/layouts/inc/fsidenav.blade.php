

<aside id="course-menu" class="col-lg-2 col-md-3 order-md-1 side-menu-content">
  <ul class="side-menu">
    @php
    $categories = App\Models\Category::where('navbar_status','0')->where('status', '0')->get();
@endphp

@foreach ($categories as $catitem )
      <li><a href="{{url('tutorial/'.$catitem->cat_slug)}}"> LEARN {{ $catitem->name}}</a></li>
      @endforeach
  </ul>
</aside>