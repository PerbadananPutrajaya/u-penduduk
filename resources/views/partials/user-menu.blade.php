<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img
                src="{{Gravatar::get(auth()->user()->email, 'small-secure')}}" alt="gravatar"/> <span
                class="caret"></span></a>
    <ul class="dropdown-menu">
        <li class="dropdown-header">Signed in as <br> {{ auth()->user()->email }}</li>
        <li role="separator" class="divider"></li>
        <li><a href="{{ action('LoginController@showDashBoard') }}">Dashboard</a></li>
        <li><a href="#">Your profile</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Settings</a></li>
        <li><a href="{{ action('LoginController@logout') }}">Sign out</a></li>
    </ul>
</li>