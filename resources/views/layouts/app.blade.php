<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
			<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
			<script>
		            WebFont.load({
		                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
		                active: function() {
		                    sessionStorage.fonts = true;
		                }
		            });
			</script>
		<!--end::Fonts -->


		<!--begin::Global Theme Styles(used by all pages) -->
			<link href="{{ asset('assets/fonts/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('assets/fonts/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('assets/fonts/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('assets/fonts/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css" />

			<link href="{{ asset('assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('assets/plugins/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" />

			<link href="{{ asset('assets/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
			<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

		@yield('styles')
	</head>
<!-- end::Head -->

<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">
		<!-- begin:: Page -->

			<!-- begin:: Header Mobile -->
				@include('layouts.mobile_header')
			<!-- end:: Header Mobile -->

			<div class="kt-grid kt-grid--hor kt-grid--root">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
					<!-- begin:: Aside -->
						@include('layouts.side_menu')
					<!-- end:: Aside -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
						<!-- begin:: Header -->
							@include('layouts.header')
						<!-- end:: Header -->

						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
							<!-- begin:: Subheader -->
								@yield('subheader')
							<!-- end:: Subheader -->

							<!-- begin:: Content -->
								@yield('content')
							<!-- end:: Content -->
						</div>

						<!-- begin:: Footer -->
							@include('layouts.footer')
						<!-- end:: Footer -->
					</div>
				</div>
			</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
			<div id="kt_scrolltop" class="kt-scrolltop">
				<i class="fa fa-arrow-up"></i>
			</div>
		<!-- end::Scrolltop -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
			<script>
		            var KTAppOptions = {"colors":{"state":{"brand":"#22b9ff","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
		        </script>
			<!-- end::Global Config -->

			<!--begin::Global Theme Bundle(used by all pages) -->
			<script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/plugins/cookie/js.cookie.js') }}" type="text/javascript"></script>

			<script src="{{ asset('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/plugins/bootstrap-datetime-picker/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

			<script src="{{ asset('assets/js/vendors.bundle.js') }}" type="text/javascript"></script>
			<script src="{{ asset('assets/js/scripts.bundle.js') }}" type="text/javascript"></script>
			<!--end::Global Theme Bundle -->

			<!--begin::Page Scripts(used by this page) -->
			<script src="{{ asset('assets/scripts/dashboard.js') }}" type="text/javascript"></script>

			@yield('scripts')

		<!--end::Page Scripts -->
	</body>
<!-- end::Body -->
</html>