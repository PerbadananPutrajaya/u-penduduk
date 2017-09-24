<button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
<a class="navbar-brand" href="#"></a>
<button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>

<ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url("dashboard") }}">Dashboard</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
    </li>
</ul>
<ul class="nav navbar-nav ml-auto">
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
    </li>
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-list"></i></a>
    </li>
    <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img src="{{Gravatar::get(auth()->user()->email)}}" class="img-avatar" alt="{{ auth()->user()->email }}">
            <span class="d-md-down-none">{{ auth()->user()->email }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
            <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
            <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
            <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
            <div class="dropdown-header text-center">
                <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-default">42</span></a>
            <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
            <div class="divider"></div>
            <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="{{ url("logout") }}"><i class="fa fa-lock"></i> Logout</a>
        </div>
    </li>
</ul>
<button class="navbar-toggler aside-menu-toggler" type="button">☰</button>