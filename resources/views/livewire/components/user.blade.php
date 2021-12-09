<div>
    <div>
        {{-- Success is as dangerous as failure. --}}
        <div>
            <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                    <span class="mr-1 user-name text-bold-700">{{ auth()->user()->name }}</span>
                    <span class="avatar avatar-online"><img src="{{ auth()->user()->getImage() }}" style="height:35px;"
                        alt=""> <i></i> </span>
                </a>
    
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><i class="fa fa-user"></i>
                        Edit Profile
                    </a>
                    <div class="dropdown-divider"> </div>
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </div>
            </li>
        </div>
    </div>
</div>
