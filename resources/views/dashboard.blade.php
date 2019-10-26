@extends('layouts.app')

@section('styles')
	<link href="{{ asset('assets/css/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('subheader')
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">Dashboard</h3>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="kt-subheader__wrapper">
				<a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
					<span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
					<span class="kt-subheader__btn-daterange-date" id="kt_dashboard_daterangepicker_date">Aug 16</span>
					<i class="flaticon2-calendar-1"></i>
				</a>
			</div>
		</div>
	</div>
@endsection

@section('content')
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	    <div class="kt-portlet kt-portlet--mobile">
	        <div class="kt-portlet__head kt-portlet__head--lg">
	            <div class="kt-portlet__head-label">
	                <span class="kt-portlet__head-icon">
						<i class="kt-font-brand flaticon2-line-chart"></i>
					</span>
	                <h3 class="kt-portlet__head-title">
	                    Basic
	                </h3>
	            </div>
	            <div class="kt-portlet__head-toolbar">
	                <div class="kt-portlet__head-wrapper">
	                    <div class="kt-portlet__head-actions">
	                        <div class="dropdown dropdown-inline">
	                            <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="la la-download"></i> Export
								</button>
	                            <div class="dropdown-menu dropdown-menu-right">
	                                <ul class="kt-nav">
	                                    <li class="kt-nav__section kt-nav__section--first">
	                                        <span class="kt-nav__section-text">Choose an option</span>
	                                    </li>
	                                    <li class="kt-nav__item">
	                                        <a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-print"></i>
												<span class="kt-nav__link-text">Print</span>
											</a>
	                                    </li>
	                                    <li class="kt-nav__item">
	                                        <a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-copy"></i>
												<span class="kt-nav__link-text">Copy</span>
											</a>
	                                    </li>
	                                    <li class="kt-nav__item">
	                                        <a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-file-excel-o"></i>
												<span class="kt-nav__link-text">Excel</span>
											</a>
	                                    </li>
	                                    <li class="kt-nav__item">
	                                        <a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-file-text-o"></i>
												<span class="kt-nav__link-text">CSV</span>
											</a>
	                                    </li>
	                                    <li class="kt-nav__item">
	                                        <a href="#" class="kt-nav__link">
												<i class="kt-nav__link-icon la la-file-pdf-o"></i>
												<span class="kt-nav__link-text">PDF</span>
											</a>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                        &nbsp;
	                        <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
								<i class="la la-plus"></i>
								New Record
							</a>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="kt-portlet__body">
	            <!--begin: Datatable -->
	            <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
	                <thead>
	                    <tr>
	                        <th>Record ID</th>
	                        <th>Order ID</th>
	                        <th>Country</th>
	                        <th>Ship City</th>
	                        <th>Ship Address</th>
	                        <th>Company Agent</th>
	                        <th>Company Name</th>
	                        <th>Ship Date</th>
	                        <th>Status</th>
	                        <th>Type</th>
	                        <th>Actions</th>
	                    </tr>
	                </thead>

	                <tbody>
	                	@foreach(range(1,50) as $num)
		                    <tr>
		                        <td>{{ $num }}</td>
		                        <td>61715-075</td>
		                        <td>China</td>
		                        <td>Tieba</td>
		                        <td>746 Pine View Junction</td>
		                        <td>Nixie Sailor</td>
		                        <td>Gleichner, Ziemann and Gutkowski</td>
		                        <td>2/12/2018</td>
		                        <td>3</td>
		                        <td>2</td>
		                        <td nowrap="">
									<span class="dropdown">
										<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
	                              			<i class="la la-ellipsis-h"></i>
	                            		</a>
			                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-214px, 27px, 0px); top: 0px; left: 0px; will-change: transform;">
			                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
			                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
			                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
			                            </div>
	                        		</span>
	                        		<a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
	                          			<i class="la la-edit"></i>
	                        		</a>
								</td>
		                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	            <!--end: Datatable -->
	        </div>
	    </div>
	</div>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
		<div class="row">
		    <div class="col-lg-12">
		        <!--begin::Portlet-->
		        <div class="kt-portlet kt-portlet--tab">
		            <div class="kt-portlet__head">
		                <div class="kt-portlet__head-label">
		                    <span class="kt-portlet__head-icon kt-hidden">
		                        <i class="la la-gear"></i>
		                    </span>
		                    <h3 class="kt-portlet__head-title">
		                        Line Chart
		                    </h3>
		                </div>
		            </div>
		            <div class="kt-portlet__body">
		                <div id="kt_morris_1" style="height:500px;"></div>
		            </div>
		        </div>
		        <!--end::Portlet-->
		    </div>
		</div>

		<div class="row">
		    <div class="col-lg-12">
		        <!--begin::Portlet-->
		        <div class="kt-portlet kt-portlet--tab">
		            <div class="kt-portlet__head">
		                <div class="kt-portlet__head-label">
		                    <span class="kt-portlet__head-icon kt-hidden">
		                        <i class="la la-gear"></i>
		                    </span>
		                    <h3 class="kt-portlet__head-title">
		                        Area Chart
		                    </h3>
		                </div>
		            </div>
		            <div class="kt-portlet__body">
		                <div id="kt_morris_2" style="height:500px;"></div>
		            </div>
		        </div>
		        <!--end::Portlet-->
		    </div>
		</div>
	</div>

@endsection

@section('scripts')
	<script src="{{ asset('assets/js/datatables.bundle.js') }}"></script>
	<script src="{{ asset('assets/js/morris-charts.js') }}"></script>
	<script>
		jQuery(document).ready(function(){
			jQuery('.table').DataTable({
				responsive: true,

				// DOM Layout settings
				dom: `<'row'<'col-sm-12'tr>>
				<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

				lengthMenu: [5, 10, 25, 50],

				pageLength: 10,

				language: {
					'lengthMenu': 'Display _MENU_',
				},
			});
		});
	</script>
@endsection
