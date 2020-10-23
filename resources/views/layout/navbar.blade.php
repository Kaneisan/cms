<div id="content">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                @if ($page=="Home")
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                    </li>
                @endif
                @if ($page=="About")
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/about') }}">About</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/about') }}">About</a>
                    </li>
                @endif
                {{-- @if ($page=="Data")
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/data') }}">Data</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/data') }}">Data</a>
                    </li>
                @endif --}}
                @if ($page=="Artikel")
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/article') }}">Article</a>
                    </li>
                @else
                    <li class="nav-item ">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/article') }}">Article</a>
                    </li>
                @endif
                @if ($page=="Manage")
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/manage') }}">Manage</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/manage') }}">Manage</a>
                    </li>
                @endif

                    <div class="dropdown1">
                        <button class="dropbtn1">Social Media</button>
                        <div class="dropdown1-content">
                        <a href="https://www.facebook.com/Kaneisan/" target="_blank">Facebook</a>
                        <a href="https://twitter.com/saddoggoo" target="_blank">Twitter</a>
                        <a href="https://www.instagram.com/kanei_01/" target="_blank">Instagram</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="logout nav-link js-scroll-trigger" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{route("logout")}}" method="POST" style='display:none;'>
                        @csrf

                    </form>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Page</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
