<ul class="nav navbar-nav">
    <li><a href="/">Home</a></li>
    <li @if (Request::is('admin/grant*')) class="active" @endif>
        <a href="/admin/grant">Grants</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
        <a href="/admin/tag">Tags</a>
    </li>
    <li @if (Request::is('admin/user*')) class="active" @endif>
        <a href="/admin/user">User</a>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/auth/login">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
               aria-expanded="false">{{ Auth::user()->name }}
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
        </li>
    @endif
</ul>