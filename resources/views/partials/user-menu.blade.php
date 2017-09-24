<div class="btn-group navbar-nav">
    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
        <img class="rounded-circle" src="{{Gravatar::get(auth()->user()->email, 'small-secure')}}" alt="gravatar"/>
    </button>
    <div class="dropdown-menu dropdown-backdrop dropdown-menu-right">
        <span class="dropdown-item">Signed in as <br> {{ auth()->user()->email }}</span>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item {{ (Request::is('dashboard') ? 'active' : '') }}"
           href="{{ action('LoginController@showDashBoard') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>
            Dashboard</a>
        <a class="dropdown-item" href="#"><img class="rounded-circle" src="{{Gravatar::get(auth()->user()->email, 'small-secure')}}" alt="gravatar"/> Your profile</a>
        <a class="dropdown-item" href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ action('LoginController@logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
    </div>
</div>