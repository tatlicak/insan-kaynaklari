<header class="main-nav">
    <nav>
        <div class="main-navbar">
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                 
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="{{route('personel')}}"><i data-feather="anchor"></i><span>Personel İşlemleri</span></a>
                       
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="anchor"></i><span>Maaş İşlemleri</span></a>
                        <ul class="nav-submenu menu-content" style="display: none">
                            
                            <li>
                                <a class="submenu-title {{ in_array(Route::currentRouteName(), ['boxed','layout-rtl']) ? 'active' : '' }}" href="javascript:void(0)">
                                    Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['boxed','layout-rtl', 'default-layout', 'compact-layout', 'modern-layout']) ? 'block' : 'none' }};">
                                    
                                    <li><a href="{{route('modern-layout')}}" class="{{routeActive('modern-layout')}}">Modern Layout</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="anchor"></i><span>Departman İşlemleri</span></a>
                        <ul class="nav-submenu menu-content" style="display: none">
                            
                            <li>
                                <a class="submenu-title {{ in_array(Route::currentRouteName(), ['boxed','layout-rtl']) ? 'active' : '' }}" href="javascript:void(0)">
                                    Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span>
                                </a>
                                <ul class="nav-sub-childmenu submenu-content" style="display: {{ in_array(Route::currentRouteName(), ['boxed','layout-rtl', 'default-layout', 'compact-layout', 'modern-layout']) ? 'block' : 'none' }};">
                                    
                                    <li><a href="{{route('modern-layout')}}" class="{{routeActive('modern-layout')}}">Modern Layout</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>