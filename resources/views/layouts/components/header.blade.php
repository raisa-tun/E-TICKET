<nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <a class="navbar-brand page-scroll" href="#main"><img src="{{ asset('assets/images/logo.png') }}" style="height:40px;width:200px" alt="adminity Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('bus_schedule.index')}}">Bus Schedule</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" id="loginTrigger">Login</a>
                </li>
                
                @if(auth()->guard('admin')->check())
                <li class="nav-item">
                    <a class="nav-link" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                        {{__('Logout')}} </a>
                    <form id="logout-form" action="{{route('adminLogout')}}" method="post" class="hidden" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </li>
                @endif
                
            </ul>
        </div>
    </div>
</nav>
