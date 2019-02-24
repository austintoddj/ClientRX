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
                <a class="dropdown-item" href="#">Privacy and security</a>

                <div class="dropdown-divider"></div>

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
            <li class="{{ app('router')->is('dashboard') ? 'navigation__active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-newspaper"></i> News Feed</a></li>
            <li class="navigation__sub {{ app('router')->is('client*') ? 'navigation__sub--active navigation__sub--toggled' : '' }}">
                <a href=""><i class="fas fa-users"></i> Clients</a>
                <ul>
                    <li class="{{ app('router')->is('client.index') ? 'navigation__active' : '' }}"><a href="{{ route('client.index') }}">All Clients</a></li>
                    <li class="{{ app('router')->is('client.create') ? 'navigation__active' : '' }}"><a href="{{ route('client.create') }}">Add New</a></li>
                </ul>
            </li>
            <li class="{{ app('router')->is('') ? 'navigation__active' : '' }}"><a href="#"><i class="fas fa-dumbbell"></i> Workouts</a></li>
            <li class="{{ app('router')->is('') ? 'navigation__active' : '' }}"><a href="#"><i class="fas fa-utensils"></i> Nutrition</a></li>
            <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Billing</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> Shop</a></li>
            <li class="{{ app('router')->is('') ? 'navigation__active' : '' }}"><a href="#"><i class="fas fa-question-circle"></i> Help</a></li>
        </ul>
    </div>
</aside>