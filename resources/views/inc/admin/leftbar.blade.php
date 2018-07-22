<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('plugins/adminbsb-materialdesign/images/user.png') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            {{-- Dashboard --}}
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- Roles --}}
            <li class="{{ Request::is('admin/roles') ? 'active' : '' }}">
                <a href="{{ route('roles') }}">
                    <i class="material-icons">lock</i>
                    <span>Roles</span>
                </a>
            </li>
            {{-- Users --}}
            <li class="{{ Request::is('admin/users') ? 'active' : '' }}">
                <a href="{{ route('users') }}">
                    <i class="material-icons">person</i>
                    <span>Users</span>
                </a>
            </li>
            {{-- Media --}}
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">perm_media</i>
                    <span>Media</span>
                </a>
            </li>
            {{-- Posts --}}
            <li class="{{ Request::is('admin/posts') ? 'active' : '' }}">
                <a href="{{ route('posts') }}">
                    <i class="material-icons">assignment</i>
                    <span>Posts</span>
                </a>
            </li>
            {{-- Pages --}}
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">description</i>
                    <span>Pages</span>
                </a>
            </li>
            {{-- Categories --}}
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }}">
                <a href="{{ route('categories') }}">
                    <i class="material-icons">donut_small</i>
                    <span>Categories</span>
                </a>
            </li>
            {{-- Tools --}}
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">event_note</i>
                    <span>Tools</span>
                </a>
            </li>
            {{-- Settings --}}
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="material-icons">settings</i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>