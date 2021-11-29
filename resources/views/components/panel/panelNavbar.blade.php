<nav class="main-header navbar navbar-expand navbar-dark">
    <div class="container-fluid">
        <!-- Start navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar-full" href="#" role="button"><x-ui.icon class="bi-text-indent-right" size="1.4rem"/>

                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- End navbar links -->
        <ul class="navbar-nav ms-auto">

            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ Auth::user()->profile_photo_url }}" class="user-image img-circle shadow" alt="{{ Auth()->user()->name}}">
                    <span class="d-none d-md-inline" title="{{ Auth()->user()->name}}">{{ Auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle shadow" alt="{{ Auth()->user()->name}}">

                        <p>
                           {{ Auth()->user()->name}}

                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Admin</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Manager</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Student</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">

                        <x-jet-dropdown-link href="{{ route('profile.show') }}" class="btn btn-default btn-flat">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>
                         <!-- Authentication -->
                         <x-jet-dropdown-link href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" class="btn btn-default btn-flat float-end">
                                    {{ __('Log out') }}
                                </x-jet-dropdown-link>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                        </form>



                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
