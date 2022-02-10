
   <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs"
                            href="#">
                            <i class="ft-menu font-large-1"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="/dashboard">
                        <img class="brand-logo" style="width:150px; height:40px;" alt="modern admin logo" src="{{ asset('app-assets/images/logo/expreco.png') }}">
                            <h3 class="brand-text">
                               
                            </h3>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="toggle-icon ft-toggle-right font-medium-3 white"
                                data-ticon="ft-toggle-right">
                            </i>
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                            <i class="la la-ellipsis-v"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                       @livewire('components.fullscreen')
                      
                    </ul>

                    <ul class="nav navbar-nav float-right">
                       
                       {{-- @livewire('components.language') --}}
                       <livewire:components.notification/>
                        {{-- @livewire('components.message') --}}
                        <livewire:components.user/>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

