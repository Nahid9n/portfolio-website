<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="{{Request::route()->getName() == 'home' ? 'active' :''}}"><a href="{{route('home')}}">Home</a></li>
                            <li class="{{Request::route()->getName() == 'project' ? 'active' :''}}"><a href="{{route('project')}}">Projects</a></li>
                            <li class="{{Request::route()->getName() == 'service' ? 'active' :''}}"><a href="{{route('service')}}">Services</a></li>
                            <li class="{{Request::route()->getName() == 'blog' ? 'active' :''}}"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="{{Request::route()->getName() == 'about' ? 'active' :''}}"><a href="{{route('about')}}">About</a></li>
                            <li class="{{Request::route()->getName() == 'contact' ? 'active' :''}}"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
