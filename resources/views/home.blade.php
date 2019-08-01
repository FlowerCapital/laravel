selamat datang {{ Auth::user()->name ?? '' }}

<br>

<a href="{{route('logout')}}">Logout</a>
