<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('admin.dashboard')}}">
                <img src="#" class="header-brand-img desktop-logo" alt="logo">
                <img src="#" class="header-brand-img toggle-logo" alt="logo">
                <img src="#" class="header-brand-img light-logo" alt="logo">
                <img src="#" class="header-brand-img light-logo1" alt="logo">
            </a><!-- LOGO -->
        </div>

        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu">
                <li>
                    <h3>Menu</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-home mx-3 fs-7"></i>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-brands fa-servicestack mx-3 fs-7"></i>
                        <span class="side-menu__label">Service Module</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Service Module</a></li>
                        <li><a href="{{route('services.index')}}" class="slide-item">All Service</a></li>
                        <li><a href="{{route('services.create')}}" class="slide-item">Add Service</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-diagram-project mx-3 fs-7"></i>
                        <span class="side-menu__label">Project Module</span>
                        <i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Project Module</a></li>
                        <li><a href="{{route('projects.index')}}" class="slide-item">All Project</a></li>
                        <li><a href="{{route('projects.create')}}" class="slide-item">Add Project </a></li>
                        <li><a href="{{route('categories.index')}}" class="slide-item">Category</a></li>

                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-users mx-3 fs-7"></i>
                        <span class="side-menu__label">Team Module</span>
                        <i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Team Module</a></li>
                        <li><a href="{{route('teams.index')}}" class="slide-item">All Team</a></li>
                        <li><a href="{{route('teams.create')}}" class="slide-item">Add Team</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-blog mx-3 fs-7"></i>
                        <span class="side-menu__label">Blog Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Blog Module</a></li>
                        <li><a href="{{route('blogs.index')}}" class="slide-item">All Blog</a></li>
                        <li><a href="{{route('blogs.create')}}" class="slide-item">Add Blog</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-users-line mx-3 fs-7"></i>
                        <span class="side-menu__label">Client Review Module</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Client Review Module</a></li>
                        <li><a href=#" class="slide-item">Client Review</a></li>
                        <li><a href="#" class="slide-item">Create Review</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-file mx-3 fs-7"></i>
                        <span class="side-menu__label">CV Module</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="#" class="slide-item">CV Method</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-address-card mx-3 fs-7"></i>
                        <span class="side-menu__label">Contact Module</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{route('contact.messages')}}" class="slide-item">Client Contact Message</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-users-line mx-3 fs-7"></i>
                        <span class="side-menu__label">Client Module</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{route('clients.index')}}" class="slide-item">Client</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-newspaper mx-3 fs-7"></i>
                        <span class="side-menu__label">Newsletters</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="#" class="slide-item">Newsletters</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="#">
                        <i class="fa-solid fa-gears mx-3 fs-7"></i>
                        <span class="side-menu__label">Setting</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                        <li><a href="{{route('website.setup.index')}}" class="slide-item">Website setup</a></li>
                        <li><a href="{{route('website.about')}}" class="slide-item">About</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                    class="sub-side-menu__label">Slider</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="{{route('slider.index')}}">All Slider</a></li>
                                <li><a class="sub-slide-item" href="{{route('slider.create')}}">Add Slider</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('website.contact')}}" class="slide-item">Contact</a></li>
                        <li><a href="#" class="slide-item">Profile</a></li>
                        <li><a href="#" class="slide-item">Account</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
