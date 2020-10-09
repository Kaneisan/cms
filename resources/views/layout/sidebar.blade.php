<div class="wrapper">
    <!-- Sidebar -->
    {{-- @php
     dd($articles2);
    @endphp --}}
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="sidebar-header">
            <h3>Bootstrap Sidebar</h3>
            <p style="color:white">Ini Side bar</p>
        </div>

        <ul class="list-unstyled components">

            <li>
                <a href="{{url('/home')}}">Home</a>
            </li>
            <li>
                <a href="{{url('/about')}}">About Me</a>
            </li>
            <li>
                <a href="{{url('/sosmed')}}">Social Media</a>
            </li>

            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Article Bahasa Pemograman</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    @foreach ($articles2 as $article)
                    <li>
                        <a href="{{url('/article',[$article->id])}}">{{$article->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Article Game Popular</a>
                <ul class="collapse list-unstyled" id="pageSubmenu1">
                    @foreach ($articles3 as $article)
                    <li>
                        <a href="{{url('/article',[$article->id])}}">{{$article->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            {{-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Article Games Popular</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">CS:GO</a>
                    </li>
                    <li>
                        <a href="#">DOTA2</a>
                    </li>
                    <li>
                        <a href="#">PUBG</a>
                    </li>
                    <li>
                        <a href="#">Among Us</a>
                    </li>
                    <li>
                        <a href="#">Monster Hunter: World</a>
                    </li>
                </ul>
            </li> --}}
            <li>
        </ul>
    </nav>
</div>
