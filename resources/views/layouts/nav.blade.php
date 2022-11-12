
{{--color-on-scroll="20"--}}
<nav class="navbar navbar-expand-lg bg-dark fixed-top" >
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{route('home')}}"  title="" data-placement="bottom" >
                <i class="now-ui-icons objects_planet"></i> mediato
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="/frontend/img/blurred-image-1.jpg">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                        <i class="now-ui-icons ui-2_settings-90"></i>
                        <p>Skills</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                        @foreach($skills as $skill)
                            <a class="dropdown-item"  href="{{route('front.skill',['id'=>$skill->id])}}">
                                <i class="now-ui-icons ui-2_favourite-28"></i>{{$skill->name}}
                            </a>
                        @endforeach

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                        <i class="now-ui-icons design_app"></i>
                        <p>Categories</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                        @foreach($categories as $category)
                        <a class="dropdown-item" href="{{route('front.category',['id'=>$category->id])}}">
                            <i class="now-ui-icons business_chart-pie-36"></i>{{$category->name}}
                        </a>
                        @endforeach
                    </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link btn btn-neutral" href="{{url('/login')}}" target="_blank">

                        <p>Log in</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-neutral" href="{{url('/register')}}" target="_blank">
                        <i class="now-ui-icons arrows-1_share-66"></i>
                        <p>Sign Up</p>
                    </a>
                </li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                            <i class="now-ui-icons users_single-02"></i>

                            <p>   {{ Auth::user()->name }}</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                 <i class="now-ui-icons arrows-1_share-66"></i> {{ __('Logout') }}
                            </a>
                              @if (auth()->user()->group == 'admin')
                            <a class="dropdown-item" href="  {{ route('home.index') }}">
                                <i class="now-ui-icons education_paper"></i>   <p> Admin Dashboard</p>

                            </a>
                          @endif

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </li>




                @endguest
            </ul>
        </div>
    </div>
</nav>
