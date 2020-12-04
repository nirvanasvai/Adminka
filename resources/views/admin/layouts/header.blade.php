<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"><h3>Wait for it...</h3></div>
        <div class="lds-pos"><h1>Boooooom!</h1></div>
    </div>
</div>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="{{url('/admin')}}">
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{asset('back/assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('back/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
        <!-- dark Logo text -->
        <img src="{{asset('back/assets/images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
        <img src="{{asset('back/assets/images/logo-light-text.png')}}" class="light-logo" alt="homepage" />
       </span>
                    </a>
                </div>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <!-- Notification -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)" id="bell" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i data-feather="bell" class="svg-icon"></i></span>
                            <span class="badge badge-primary notify-no rounded-circle">0</span>
                        </a>
                    <li class="nav-item dropdown">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="javascript:void(0)">
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        @guest
                        <li><a href="{{ route('login') }}">Войти</a></li>
                        <li><a href="{{ route('register') }}">Регестрация</a></li>
                        @else
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"> {{ Auth::user()->name }}</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Logout

                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                        @endguest
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{url('/admin')}}" aria-expanded="false"><i
                                data-feather="home" class="feather-icon"></i><span class="hide-menu">Админ Панель</span></a></li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Приложения</span></li>


                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="j{{route('main.index')}}" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                class="hide-menu">Главная </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="{{route('main.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Главная
                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('review.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Отзывы
                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('doing.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Чем занимаемся?

                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('work.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Как мы это делаем?

                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('banner.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Баннер с лайками!

                                        </span></a>
                            </li>
                        </ul>
                    </li>




                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('blog.index')}}" aria-expanded="false"><i
                                data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Блог</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="j{{route('about.index')}}" aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                class="hide-menu">О нас </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="{{route('about.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Описание
                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('team.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Наша Команда
                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('logo.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Логотипы

                                        </span></a>
                            </li>
                            <li class="sidebar-item"><a href="{{route('gallery.index')}}" class="sidebar-link"><span
                                        class="hide-menu"> Галлерея

                                        </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('portfolio.index')}}" aria-expanded="false"><i
                                data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Портфолио</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('service.index')}}" aria-expanded="false"><i
                                data-feather="calendar" class="feather-icon"></i><span class="hide-menu">Услуги</span></a></li>
                    <li class="list-divider"></li>
                </ul>
            </nav>
        </div>
    </aside>
</div>

