
<header id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 align-self-center">
                <a href="{{url('/')}}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" class="lg-logo "
                        alt="yahoo baba">
                    <img src="{{ asset('images/logoxm.png') }}" class="xs-logo"
                        alt="yahoo baba">
                </a>
            </div>
            <div class="col-lg-10 col-md-9">
                <div class="top-header">
                    <div class="row">
                        <div class="col-md-6 col-2 navbar-light">
                            <button class="navbar-toggler d-sm-block d-md-none toggle-side-menu bg-white"
                                type="button">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <form action="" method="GET" class="searchbox"
                                accept-charset="utf-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" id="search"
                                        placeholder="Search Courses" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn query-search" type="submit"><i
                                                class="icon-search"></i><span>Search</span></button>
                                    </div>

                                </div>
                                <div id="courses"></div>
                            </form>
                        </div>
                        <div class="col-md-6 col-10 clearfix">
                            <ul class="social-links float-right">
                                <li><a href="" class="icon-youtube-play"
                                        target="_blank"></a></li>
                                <li><a href="" class="icon-twitter"
                                        target="_blank"></a></li>
                                <li><a href="" class="icon-facebook"
                                        target="_blank"></a></li>
                                <li><a href="" class="icon-instagram"
                                        target="_blank"></a></li>
                                <li class="user-login"><a href="user/login">Login</a>
                                </li>
                                <li class="user-login"><a
                                        href="user/register">Signup</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="greedy">
                    <div class="links">

                        <a href="{{ url('/')}}" class="active">home</a>
                        @php
                        $categories = App\Models\Category::where('navbar_status','0')->where('status', '0')->get();
                    @endphp
    
                    @foreach ($categories as $catitem )
                        <a href="{{url('tutorial/'.$catitem->cat_slug)}}" class="">{{ $catitem->name}}</a>
                        @endforeach
                        <!-- <a href="interview-questions" class="">Interview Questions</a>
                        <a href="web-trends" class="">Web Trends</a>
                        <a href="codeprojects" class="">Code Projects</a> -->
                        <!-- <a href="free-templates" class="">Free Templates</a>
                        <a href="codelab" class="">Code Lab </a>
                        <a href="screenshot" class="">Screenshot</a> -->
                    </div>
                   
                </nav>
            </div>
        </div>
    </div>
</header>