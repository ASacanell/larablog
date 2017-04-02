<div class="header">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @else
                <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                <a href="#" data-toggle="modal" data-target="#registerModal">Register</a>
            @endif
        </div>
    @endif
</div>