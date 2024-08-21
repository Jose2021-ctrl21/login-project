<nav class="header">
    <p class="dummy">Dummy</p>
     <div class="menu-bar" onclick="myFunction(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <ul>
        <li><a href="{{route('home')}}">Service</a></li>
        <li><a href="{{route('home')}}">About</a></li>
        <li><a href="{{route('home')}}">News</a></li>
        <li><a href="{{route('home')}}">Contact</a></li>
        <li>
            @if(session()->has('username'))
                <button>Sign out</button>
            @else
                <a href="{{route('login')}}"><button>Sign in</button></a>
            @endif
        </li>
    </ul>
</nav>