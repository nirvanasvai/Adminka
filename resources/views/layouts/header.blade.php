<header>
    <div class="container">
        <div class="nav_content">
            <div class="logo">
                <a href="/"> <img src="{{asset('dist/images/logo.png')}}" alt=""></a>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="/" class="active_link">Главная</a>
                    </li>
                    <li>
                        <a href="{{url('uslugi')}}">Услуги</a>
                    </li>
                    <li>
                        <a href="{{url('portfolio')}}">Портфолио</a>
                    </li>
                    <li>
                        <a href="{{url('about')}}">О нас</a>
                    </li>
                    <li>
                        <a href="{{url('kontakty')}}">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="lang">
                <select class="js_select2 js-states form-control">
                    <option value="WY">по-русски</option>
                    <option value="WY">qazaqsha</option>
                    <option value="WY">english</option>
                    <option value="WY">հայերենով</option>
                </select>
            </div>
        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="container">
        <div class="mobile_head">
            <div class="logo">
                <img src="{{asset('dist/images/logo.png')}}" alt="">
            </div>
            <div class="burger_menu">
                <span></span>
            </div>
        </div>
        <div class="mobile_nav row">
            <ul>
                <li>
                    <a href="/">Главная</a>
                </li>
                <li>
                    <a href="{{url('uslugi')}}">Услуги</a>
                </li>
                <li>
                    <a href="{{url('portfolio')}}">Портфолио</a>
                </li>
                <li>
                    <a href="{{url('about')}}">О нас</a>
                </li>
                <li>
                    <a href="{{url('kontakty')}}">Контакты</a>
                </li>
            </ul>
        </div>
    </div>
</div>
