<div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">
	<!-- begin: Header Menu -->
		<button class="kt-header-menu-wrapper-close"
			id="kt_header_menu_mobile_close_btn">
			<i class="la la-close"></i>
		</button>
		<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
			<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
				<ul class="kt-menu__nav ">
					<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true">
						<a href="{{ url('/') }}" class="kt-menu__link ">
							<span class="kt-menu__link-text">Dashboard</span>
						</a>
					</li>
					<li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
						<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
							<span class="kt-menu__link-text">Forms</span>
							<i class="kt-menu__hor-arrow la la-angle-down"></i>
							<i class="kt-menu__ver-arrow la la-angle-right"></i>
						</a>
						<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
							<ul class="kt-menu__subnav">
								<li class="kt-menu__item kt-menu__item--submenu" aria-haspopup="true">
									<a href="{{ url('/form') }}" class="kt-menu__link">
										<i class="kt-menu__link-icon flaticon2-rocket-2"></i>
										<span class="kt-menu__link-text">Basic</span>
									</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="kt-menu__item" aria-haspopup="true">
						<a href="{{ url('/chat') }}" class="kt-menu__link ">
							<span class="kt-menu__link-text">Chat</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	<!-- end: Header Menu -->
	<!-- begin:: Header Topbar -->
		<div class="kt-header__topbar">
			<!--begin: User bar -->
			<div class="kt-header__topbar-item kt-header__topbar-item--user">
				<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
					<span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
					<span class="kt-hidden kt-header__topbar-username">Nick</span>
					<img class="kt-hidden" alt="Pic" src="{{ asset('assets/images/300_21.jpg') }}" />
					<span class="kt-header__topbar-icon">
						<i class="flaticon2-user-outline-symbol"></i>
					</span>
				</div>
				<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
					<!--begin: Head -->
					<div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
						<div class="kt-user-card__avatar">
							<img class="kt-hidden-" alt="Pic" src="{{ asset('assets/images/300_25.jpg') }}" />
							<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
							<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
						</div>
						<div class="kt-user-card__name">Sean Stone</div>
						<div class="kt-user-card__badge">
							<span class="btn btn-label-primary btn-sm btn-bold btn-font-md">23 messages</span>
						</div>
					</div>
					<!--end: Head -->

					<!--begin: Navigation -->
					<div class="kt-notification">
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-calendar-3 kt-font-success"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title kt-font-bold">My Profile</div>
								<div class="kt-notification__item-time">Account settings and more</div>
							</div>
						</a>
						<a href="#" class="kt-notification__item">
							<div class="kt-notification__item-icon">
								<i class="flaticon2-mail kt-font-warning"></i>
							</div>
							<div class="kt-notification__item-details">
								<div class="kt-notification__item-title kt-font-bold">My Messages</div>
								<div class="kt-notification__item-time">Inbox and tasks</div>
							</div>
						</a>
						<div class="kt-notification__custom kt-space-between">
							<a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
							<a href="custom/user/login-v2.html" target="_blank" class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
						</div>
					</div>
					<!--end: Navigation -->
				</div>
			</div>
			<!--end: User bar -->
		</div>
	<!-- end:: Header Topbar -->
</div>