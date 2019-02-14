<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img src="{{ sprintf('%s%s%s', 'https://secure.gravatar.com/avatar/', md5(strtolower(trim($data['user']->email))), '?s=200') }}"
                     class="user__img"
                     alt="{{ $data['user']->fullName }}">
                <div>
                    <div class="user__name">{{ $data['user']->fullName }}</div>
                    <div class="user__email">{{ $data['user']->email }}</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('user.show', $data['user']->id) }}">View profile</a>
                <a class="dropdown-item" href="{{ route('settings.index') }}">Settings</a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Sign out') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <ul class="navigation">
            <li class="{{ Route::is('dashboard') ? 'navigation__active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Home</a></li>
            <li class="navigation__sub {{ Route::is('client*') ? 'navigation__sub--active navigation__sub--toggled' : '' }}">
                <a href=""><i class="fas fa-users"></i> Clients</a>
                <ul>
                    <li><a href="#" class="{{ Route::is('client.index') ? 'navigation__active' : '' }}">All Clients</a></li>
                    <li><a href="#" class="{{ Route::is('client.create') ? 'navigation__active' : '' }}">Add New</a></li>
                </ul>
            </li>
            <li class="{{ Route::is('') ? 'navigation__active' : '' }}"><a href="#"><i class="fas fa-dumbbell"></i> Workouts</a></li>
            <li class="{{ Route::is('') ? 'navigation__active' : '' }}"><a href="#"><i class="fas fa-utensils"></i> Nutrition</a></li>
            <li class="{{ Route::is('') ? 'navigation__active' : '' }}"><a href="#"><i class="fas fa-question-circle"></i> Help</a></li>
        </ul>
    </div>
</aside>