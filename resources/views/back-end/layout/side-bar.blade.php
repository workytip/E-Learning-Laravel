<div class="sidebar-wrapper">

<div class="logo">
        <a href="{{route('home')}}" class="simple-text">
            <i class="nc-icon nc-planet"> Mediato </i>
        </a>
    </div>
    <ul class="nav">
       <li class="nav-item {{is_active('home')}}">
        <a class="nav-link" href="{{route('home.index')}}">
            <i class="nc-icon nc-icon nc-paper-2"></i>
            <p>Dashboard</p>
        </a>
        </li>
        <li class="nav-item {{is_active('users')}}">
            <a class="nav-link" href="{{route('users.index')}}">
                <i class="nc-icon nc-icon nc-single-02"></i>
                <p>Users </p>
            </a>
        </li>
        <li class="nav-item {{is_active('categories')}} ">
            <a class="nav-link" href="{{route('categories.index')}}">
                <i class="nc-icon nc-album-2"></i>
                <p>Categories</p>
            </a>
        </li>
        <li class="nav-item {{is_active('skills')}} ">
            <a class="nav-link" href="{{route('skills.index')}}">
                <i class="nc-icon  nc-bulb-63"></i>
                <p>Skills</p>
            </a>
        </li>
        <li class="nav-item {{is_active('tags')}} ">
            <a class="nav-link" href="{{route('tags.index')}}">
                <i class="nc-icon  nc-tag-content"></i>
                <p>Tags</p>
            </a>
        </li>
        <li class="nav-item {{is_active('pages')}} ">
            <a class="nav-link" href="{{route('pages.index')}}">
                <i class="nc-icon  nc-tap-01"></i>
                <p>Pages</p>
            </a>
        </li>
        <li class="nav-item {{is_active('videos')}} ">
            <a class="nav-link" href="{{route('videos.index')}}">
                <i class="nc-icon  nc-button-play"></i>
                <p>Videos</p>
            </a>
        </li>

{{--        <li class="nav-item active active-pro">--}}
{{--            <a class="nav-link active" href="javascript:">--}}
{{--                <i class="nc-icon nc-alien-33"></i>--}}
{{--                <p>Upgrade plan</p>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>
    </div>

    <div class="sidebar-background" style="background-image:url(/assets/img/sidebar-5.jpg) "></div>
