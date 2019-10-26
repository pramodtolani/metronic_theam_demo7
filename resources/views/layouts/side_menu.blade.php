<button class="kt-aside-close " id="kt_aside_close_btn">
	<i class="la la-close"></i>
</button>

<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
	<!-- begin:: Brand -->
		<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
	    	<div class="kt-aside__brand-logo">
	        	<a href="/metronic/preview/demo7/index.html">
					<img alt="Logo" src="{{ asset('assets/images/logo-7.png') }}"/>
				</a>
            </div>
		</div>
	<!-- end:: Brand -->
    <!-- begin:: Aside Menu -->
		<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
	    	<div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
	        	<ul class="kt-menu__nav ">
					<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--submenu-fullheight kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="click" data-ktmenu-dropdown-toggle-class="kt-aside-menu-overlay--on">
	                	<a href="{{ url('/') }}" class="kt-menu__link">
	                    	<i class="kt-menu__link-icon flaticon2-protection"></i>
	                        <span class="kt-menu__link-text">Dashboard</span>
						</a>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--submenu-fullheight kt-menu__item--open1 kt-menu__item--here1" aria-haspopup="true" data-ktmenu-submenu-toggle="click" data-ktmenu-dropdown-toggle-class="kt-aside-menu-overlay--on">
	                	<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
	                    	<i class="kt-menu__link-icon flaticon2-file"></i>
	                        <span class="kt-menu__link-text">Form</span>
	                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
	                    <div class="kt-menu__submenu ">
							<span class="kt-menu__arrow"></span>
							<div class="kt-menu__wrapper">
	                        	<ul class="kt-menu__subnav">
	                            	<li class="kt-menu__item  kt-menu__item--parent kt-menu__item--submenu-fullheight" aria-haspopup="true">
										<span class="kt-menu__link">
											<span class="kt-menu__link-text">Form</span>
										</span>
									</li>
	                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="click" data-ktmenu-submenu-mode="accordion">
										<a href="{{ url('/form') }}" class="kt-menu__link kt-menu__toggle">
											<span class="kt-menu__link-text">Basic</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--submenu-fullheight" aria-haspopup="true" data-ktmenu-submenu-toggle="click" data-ktmenu-dropdown-toggle-class="kt-aside-menu-overlay--on">
	                	<a href="{{ url('/chat') }}" class="kt-menu__link">
	                    	<i class="kt-menu__link-icon flaticon2-chat"></i>
	                        <span class="kt-menu__link-text">Chat</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	<!-- end:: Aside Menu -->
</div>

	<div class="kt-aside-menu-overlay"></div>