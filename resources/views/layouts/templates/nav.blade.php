<!-- Navbar -->
<header class="header">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="navbar-logo">
                    <a class="navbar-logo-wrap smooth-scroll" href="{{config('app.url')}}">
                        <h2>{{ config('app.name') }}</h2> 
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        @guest
                        <!-- Work -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="#work-container">
                                Work
                            </a>
                        </li>
                        <!-- End Work -->

                        <!-- Features -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="#features">
                                Features
                            </a>
                        </li>
                        <!-- End Features -->

                        <!-- Clients -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="#clients">
                                Clients
                            </a>
                        </li>
                        <!-- Clients -->

                        <!-- Team -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="#team">
                                Team
                            </a>
                        </li>
                        <!-- End Team -->


                        <!-- Contact -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="#contact">
                                Contact
                            </a>
                        </li>
                        <!-- End Contact -->
                        @else
                        <!-- Messages -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="{{url("/admin/message")}}">
                                Messages
                            </a>
                        </li>    
                        <!-- Settings -->
                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="{{url("/admin/settings")}}">
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-item-child smooth-scroll" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endguest

                    </ul>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
