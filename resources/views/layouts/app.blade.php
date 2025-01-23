
<html>
<head>
    <meta lang="ru/eng">
    <title></title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset($style)}}" rel="stylesheet">
</head>
<body id="body">
<div class="navbar">
    <a href="/" class="logo">
    <img src="/img/unnamed.ico">
    <h2>APT</h2>
    </a>
    <ul class="main-list">
        <li><a href="/"><button @if($f==1) class="b-a" @else class='b'@endif>Home</button></a></li>
        @guest()
        @else
        <li><a href="/info"><button @if($f==3) class="b-a" @else class='b'@endif>Info</button></a></li>
        <li><a href="/contacts"><button @if($f==2) class="b-a" @else class='b'@endif>Contacts</button></a></li>
        @endguest
    </ul>
    <ul class="user-list">
        @guest
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}"><button @if($f==4) class="b-a" @else class='b'@endif>Login</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}"><button @if($f==5) class="b-a" @else class='b'@endif>Register</button></a>
            </li>
        @else
            <li class="nav-item dropdown">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                        ><button class="b">Logout  {{ Auth::user()->name }}</button></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
</div>
<div class="container">
    @yield('content')
</div>
</body>
<footer>
<div id="secret">By WaterlessNigga</div>
</footer>
<script>
    let g = document.getElementById('secret');
    let gg = document.getElementById('body');
    let ggg = gg.getAttribute('style', 'background')
    var f = 0;
    g.addEventListener('click', function (e){
        if (f === 0) {
            gg.setAttribute("style", "background: url('img/f.gif');");
            f = 1;
        }else{f = 0; gg.setAttribute("style", ggg);}
    })
</script>
</html>

