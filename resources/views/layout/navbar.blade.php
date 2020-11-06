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
                    <li class="nav-item  {{ Route::is('home') ? 'active' : '' }}">
                        @can('user-display')
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                        @endcan
                    </li>
                    <li class="nav-item  {{ Route::is('about') ? 'active' : '' }}">
                        @can('user-display')
                        <a class="nav-link js-scroll-trigger" href="{{ url('/about') }}">About</a>
                        @endcan
                    </li>
                {{-- @if ($page=="Data")
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/data') }}">Data</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/data') }}">Data</a>
                    </li>
                @endif --}}
                    <li class="nav-item {{ Route::is('article') ? 'active' : '' }}">
                        @can('manage-articles')
                        <a class="nav-link js-scroll-trigger" href="{{ url('/article') }}">Article</a>
                        @endcan
                    </li>
                    <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
                        @can('manage-articles')
                        <a class="nav-link js-scroll-trigger" href="{{ url('/manage') }}">Manage Article</a>
                        @endcan
                    </li>
                    <li class="nav-item {{ Route::is('manageusers') ? 'active' : '' }}">
                        @can('manage-articles')
                        <a class="nav-link js-scroll-trigger" href="{{ url('/manageuser') }}">Manage User</a>
                        @endcan
                    </li>
                    <div class="dropdown1 {{ Route::is('about') ? 'active' : '' }}">
                        @can('user-display')
                        <button class="dropbtn1">Social Media</button>
                        <div class="dropdown1-content">
                        <a href="https://www.facebook.com/Kaneisan/" target="_blank">Facebook</a>
                        <a href="https://twitter.com/saddoggoo" target="_blank">Twitter</a>
                        <a href="https://www.instagram.com/kanei_01/" target="_blank">Instagram</a>
                        </div>
                        @endcan
                    </div>
                    <div>
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
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
