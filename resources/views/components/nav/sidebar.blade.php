<aside class="sidebar">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img src="{{ sprintf('%s%s%s', 'https://secure.gravatar.com/avatar/', md5(strtolower(trim(auth()->user()->email))), '?s=200') }}"
                     class="user__img"
                     alt="{{ auth()->user()->name }}"
                >
                <div>
                    <div class="user__name">{{ auth()->user()->name }}</div>
                    <div class="user__email">{{ auth()->user()->email }}</div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="">View profile</a>
                <a class="dropdown-item" href="">Settings</a>

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
            <li class="navigation__active"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-view-week"></i> Variants</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                    <li><a href="boxed-layout.html">Boxed Layout</a></li>
                    <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                    <li><a href="top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>

            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

            <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

                <ul>
                    <li><a href="html-table.html">HTML Table</a></li>
                    <li><a href="data-table.html">Data Table</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                <ul>
                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                    <li><a href="form-components.html">Form Components</a></li>
                    <li><a href="form-layouts.html">Form Layouts</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                <ul>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="css-animations.html">CSS Animations</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="listview.html">Listview</a></li>
                    <li><a href="toolbars.html">Toolbars</a></li>
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="badges.html">Badges</a></li>
                    <li><a href="breadcrumbs.html">Bredcrumbs</a></li>
                    <li><a href="jumbotron.html">Jumbotron</a></li>
                    <li><a href="navs.html">Navs</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="progress.html">Progress</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                <ul class="navigation__sub">
                    <li><a href="carousel.html">Carousel</a></li>
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="dropdowns.html">Dropdowns</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="popover.html">Popover</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="tooltips.html">Tooltips</a></li>
                    <li><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                    <li><a href="tree-view.html">Tree View</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-trending-up"></i> Charts</a>

                <ul>
                    <li><a href="flot-charts.html">Flot</a></li>
                    <li><a href="other-charts.html">Other Charts</a></li>
                </ul>
            </li>

            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

            <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

            <li class="navigation__sub">
                <a href=""><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                <ul>
                    <li><a href="profile-about.html">Profile</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="new-contact.html">New Contact</a></li>
                    <li><a href="groups.html">Groups</a></li>
                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="todo-lists.html">Todo Lists</a></li>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="issue-tracker.html">Issue Tracker</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                    <li><a href="questions-answers.html">Questions & Answers</a></li>
                    <li><a href="questions-answers-details.html">Questions & Answers Details</a></li>
                    <li><a href="login.html">Login & SignUp</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="empty.html">Empty Page</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>