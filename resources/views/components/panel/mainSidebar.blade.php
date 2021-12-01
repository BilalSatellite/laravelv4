<aside class="main-sidebar sidebar-bg-dark sidebar-color-primary shadow">
    <div class="brand-container">
        <a href="javascript:;" class="brand-link"style="text-decoration: none">
            <img src="{{ asset('images/user-info.jpg') }}" alt="AdminLTE Logo" class="brand-image opacity-80 shadow">
            <span class="brand-text fw-light" >SATELLITE</span>
        </a>
        <a class="pushmenu mx-1" data-lte-toggle="sidebar-mini" href="javascript:;" role="button"><x-ui.icon class="bi-arrow-left-circle"/></a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <!-- Sidebar Menu -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <x-jet-nav-link href="{{ route('dashboard') }}" class="nav-item" :active="request()->routeIs('dashboard')">
                    <x-ui.icon class="nav-icon bi-speedometer"/>
                    <p>{{ __('Dashboard') }}</p>
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('profile.show') }}" class="nav-item" :active="request()->routeIs('profile.show')">
                    <x-ui.icon class="nav-icon bi-person-circle"/>
                    <p>{{ __('My Profile') }}</p>
                </x-jet-nav-link>
                <li class="nav-header"><x-ui.icon class="nav-icon bi-tags-fill"/>Users Manage</li>
                <x-jet-nav-link href="{{ route('users') }}" class="nav-item" :active="request()->routeIs('users')">
                    <x-ui.icon class="nav-icon bi-person-circle"/>
                    <p>{{ __('Users') }}</p>
                </x-jet-nav-link>


                <!-- Dropdown Menu-->
                {{-- <x-jet-dropdown id="mainsidebare">
                    <x-slot name="trigger">
                            <x-ui.icon class="nav-icon bi-people"/>
                            <p> MULTI LEVEL
                                <x-ui.icon class="end bi-caret-left-fill"/>
                            </p>
                    </x-slot>
                    <x-slot name="content" class="nav nav-treeview">
                        <x-jet-nav-link href="{{ route('users') }}">
                            <x-ui.icon class="nav-icon bi-person-circle"/>
                            <p>{{ __('Users') }}</p>
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('profile.show') }}">
                            <x-ui.icon class="nav-icon bi-person-circle"/>
                            <p>{{ __('My Profile') }}</p>
                        </x-jet-nav-link>

                        <x-jet-nav-link href="{{ route('profile.show') }}">
                            <x-ui.icon class="nav-icon bi-person-circle"/>
                            <p>{{ __('My Profile') }}</p>
                        </x-jet-nav-link>

                    </x-slot>
                </x-jet-dropdown> --}}



                <li class="nav-header"><x-ui.icon class="nav-icon bi-tags-fill"/> Lable</li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>

