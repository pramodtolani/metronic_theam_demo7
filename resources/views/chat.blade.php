@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
        <!--Begin:: App Aside Mobile Toggle-->
	        <button class="kt-app__aside-close" id="kt_chat_aside_close">
		        <i class="la la-close"></i>
		    </button>
        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside kt-app__aside--lg kt-app__aside--fit" id="kt_chat_aside" style="opacity: 1;">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last">
                <div class="kt-portlet__body">
                    <div class="kt-searchbar">
                        <div class="input-group">
                            <div class="input-group-prepend">
	                            <span class="input-group-text" id="basic-addon1">
	                            	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
									    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
									        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
									        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero"></path>
									    </g>
									</svg>
								</span>
							</div>
                            <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="kt-widget kt-widget--users kt-mt-20">
                        <div class="kt-scroll kt-scroll--pull ps ps--active-y" style="height: 29px; overflow: hidden;">
                            <div class="kt-widget__items">
                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
                                    <img src="{{ asset('assets/images/300_9.jpg') }}" alt="image">
                                </span>
                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Matt Pears</a>
                                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                        </div>
                                        <span class="kt-widget__desc">
	                                        Head of Development
	                                    </span>
                                    </div>
                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">36 Mines</span>
                                        <span class="kt-badge kt-badge--success kt-font-bold">7</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_7.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Charlie Stone</a>
                                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Art Director
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">5 Hours</span>
                                        <span class="kt-badge kt-badge--success kt-font-bold">2</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_12.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Jason Muller</a>
                                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Python Developer
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">2 Days</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_4.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Teresa Fox</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        PR Executive
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">4 Days</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_8.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Giannis Nelson</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Lead Cowboy
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">1 Week</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_10.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Lisa Moss</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        QA Manager
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">3 Week</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_13.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Carles Puyol</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Defence Officer
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">2 Month</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_21.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Luka Doncic</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Dose whatever he wants
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">1 Year</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_9.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Matt Pears</a>
                                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Head of Development
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">36 Mines</span>
                                        <span class="kt-badge kt-badge--success kt-font-bold">7</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_7.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Charlie Stone</a>
                                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Art Director
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">5 Hours</span>
                                        <span class="kt-badge kt-badge--success kt-font-bold">2</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_12.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Jason Muller</a>
                                            <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Python Developer
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">2 Days</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_4.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Teresa Fox</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        PR Executive
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">4 Days</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/100_8.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Giannis Nelson</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Lead Cowboy
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">1 Week</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_10.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Lisa Moss</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        QA Manager
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">3 Week</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_13.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Carles Puyol</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Defence Officer
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">2 Month</span>
                                    </div>
                                </div>

                                <div class="kt-widget__item">
                                    <span class="kt-userpic kt-userpic--circle">
	                                    <img src="{{ asset('assets/images/300_21.jpg') }}" alt="image">
	                                </span>

                                    <div class="kt-widget__info">
                                        <div class="kt-widget__section">
                                            <a href="#" class="kt-widget__username">Luka Doncic</a>
                                        </div>

                                        <span class="kt-widget__desc">
	                                        Dose whatever he wants
	                                    </span>
                                    </div>

                                    <div class="kt-widget__action">
                                        <span class="kt-widget__date">1 Year</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: -250px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 250px; height: 29px; right: -2px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: -11px; height: 40px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--head-lg kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <!--begin:: Aside Mobile Toggle -->
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop" id="kt_chat_aside_mobile_toggle">
	                                <i class="flaticon2-open-text-book"></i>
	                            </button>
                                <!--end:: Aside Mobile Toggle-->

                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                    <i class="flaticon-more-1"></i>
	                                </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-left dropdown-menu-md" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-group"></i>
	                                                <span class="kt-nav__link-text">New Group</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
	                                                <span class="kt-nav__link-text">Contacts</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
	                                                <span class="kt-nav__link-text">Groups</span>
	                                                <span class="kt-nav__link-badge">
	                                                        <span class="kt-badge kt-badge--brand kt-badge--inline">new</span>
	                                                </span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-bell-2"></i>
	                                                <span class="kt-nav__link-text">Calls</span>
                                            	</a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-dashboard"></i>
	                                                <span class="kt-nav__link-text">Settings</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-protected"></i>
	                                                <span class="kt-nav__link-text">Help</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-bell-2"></i>
	                                                <span class="kt-nav__link-text">Privacy</span>
	                                            </a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                            </div>

                            <div class="kt-chat__center">
                                <div class="kt-chat__label">
                                    <a href="#" class="kt-chat__title">Jason Muller</a>
                                    <span class="kt-chat__status">
                                    	<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                    </span>
                                </div>

                                <div class="kt-chat__pic kt-hidden">
                                    <span class="kt-userpic kt-userpic--sm kt-userpic--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Jason Muller">
	                                    <img src="{{ asset('assets/images/300_12.jpg') }}" alt="image">
	                                </span>
                                    <span class="kt-userpic kt-userpic--sm kt-userpic--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Nick Bold">
	                                    <img src="{{ asset('assets/images/300_11.jpg') }}" alt="image">
	                                </span>
                                    <span class="kt-userpic kt-userpic--sm kt-userpic--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Milano Esco">
	                                    <img src="{{ asset('assets/images/100_14.jpg') }}" alt="image">
	                                </span>
                                    <span class="kt-userpic kt-userpic--sm kt-userpic--circle" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Teresa Fox">
	                                    <img src="{{ asset('assets/images/100_4.jpg') }}" alt="image">
	                                </span>
                                </div>
                            </div>

                            <div class="kt-chat__right">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                    <i class="flaticon2-add-1"></i>
	                                </button>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(32px, 33px, 0px);">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Messaging
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-group"></i>
	                                                <span class="kt-nav__link-text">New Group</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
	                                                <span class="kt-nav__link-text">Contacts</span>
	                                                <span class="kt-nav__link-badge">
														<span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
	                                                </span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-bell-2"></i>
	                                                <span class="kt-nav__link-text">Calls</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-dashboard"></i>
	                                                <span class="kt-nav__link-text">Settings</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
	                                                <i class="kt-nav__link-icon flaticon2-protected"></i>
	                                                <span class="kt-nav__link-text">Help</span>
	                                            </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull ps ps--active-y" data-mobile-height="300" style="height: 145px; overflow: hidden;">
                            <div class="kt-chat__messages">
                                <div class="kt-chat__message">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/100_12.jpg') }}" alt="image">
	                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-success">
                                        How likely are you to recommend our company <br>to your friends and family?
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</a>
	                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/300_21.jpg') }}" alt="image">
	                                    </span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-brand">
                                        Hey there, we�re just writing to let you know <br>that you�ve been subscribed to a repository on GitHub.
                                    </div>
                                </div>
                                <div class="kt-chat__message">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/100_12.jpg') }}" alt="image">
	                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-success">
                                        Ok, Understood!
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/300_21.jpg') }}" alt="image">
	                                    </span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-brand">
                                        You�ll receive notifications for all issues, pull requests!
                                    </div>
                                </div>
                                <div class="kt-chat__message">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/100_12.jpg') }}" alt="image">
	                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</a>
                                        <span class="kt-chat__datetime">2 Hours</span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-success">
                                        You were automatically <b class="kt-font-brand">subscribed</b> <br>because you�ve been given access to the repository
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                        <a href="#" class="kt-chat__username">You</a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/300_21.jpg') }}" alt="image">
	                                    </span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-brand">
                                        You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link">https://github.com</a>
                                    </div>
                                </div>
                                <div class="kt-chat__message">
                                    <div class="kt-chat__user">
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/100_12.jpg') }}" alt="image">
	                                    </span>
                                        <a href="#" class="kt-chat__username">Jason Muller</a>
                                        <span class="kt-chat__datetime">30 Seconds</span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-success">
                                        Discover what students who viewed Learn Figma - UI/UX Design <br>Essential Training also viewed
                                    </div>
                                </div>
                                <div class="kt-chat__message kt-chat__message--right">
                                    <div class="kt-chat__user">
                                        <span class="kt-chat__datetime">Just Now</span>
                                        <a href="#" class="kt-chat__username">You</a>
                                        <span class="kt-userpic kt-userpic--circle kt-userpic--sm">
	                                        <img src="{{ asset('assets/images/300_21.jpg') }}" alt="image">
	                                    </span>
                                    </div>
                                    <div class="kt-chat__text kt-bg-light-brand">
                                        Most purchased Business courses during this sale!
                                    </div>
                                </div>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; height: 145px; right: -2px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 40px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea style="height: 50px" placeholder="Type here..."></textarea>
                            </div>
                            <div class="kt-chat__toolbar">
                                <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md btn-upper btn-bold kt-chat__reply">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End:: App Content-->
    </div>
    <!--End::App-->
</div>

@endsection

@section('scripts')
	<script src="{{ asset('assets/js/chat.js') }}" type="text/javascript"></script>
@endsection
