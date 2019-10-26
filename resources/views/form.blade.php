@extends('layouts.app')

@section('styles')

@endsection

@section('subheader')
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<h3 class="kt-subheader__title">Form</h3>
		</div>
	</div>
@endsection

@section('content')

	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	    <!--begin::Portlet-->
	    <div class="row">
	        <div class="col-lg-12">
	            <!--begin::Portlet-->
	            <div class="kt-portlet">
	                <div class="kt-portlet__head">
	                    <div class="kt-portlet__head-label">
	                        <h3 class="kt-portlet__head-title">
	                            Default Validation 1
	                        </h3>
	                    </div>
	                </div>
	                <!--begin::Form-->
	                <form class="kt-form kt-form--label-right" id="kt_form_1">
	                    <div class="kt-portlet__body">
	                        <div class="form-group form-group-last kt-hide">
	                            <div class="alert alert-danger" role="alert" id="kt_form_1_msg">
	                                <div class="alert-icon"><i class="flaticon-warning"></i>
                                	</div>
	                                <div class="alert-text">
	                                    Oh snap! Change a few things up and try submitting again.
	                                </div>
	                                <div class="alert-close">
	                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    	<span aria-hidden="true"><i class="la la-close"></i></span>
								  	</button>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Email *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <input type="text" class="form-control" name="email" placeholder="Enter your email">
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                        	<label class="col-form-label col-lg-2 col-sm-12">URL *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="input-group">
	                                    <input type="text" class="form-control" name="url" placeholder="Enter your url">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Digits</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="kt-input-icon">
	                                    <input type="text" class="form-control" name="digits" placeholder="Enter digits">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Credit Card</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="input-group">
	                                    <input type="text" class="form-control" name="creditcard" placeholder="Enter card number">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">US Phone</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="input-group">
	                                    <input type="text" class="form-control" name="phone" placeholder="Enter phone">
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Option *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12 form-group-sub">
	                                <select class="form-control" name="option">
										<option value="">Select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Options *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12 form-group-sub">
	                                <select class="form-control" name="options" multiple size="5">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Memo *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <textarea class="form-control" name="memo" placeholder="Enter a menu" rows="8"></textarea>
	                            </div>
	                        </div>

	                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-xl"></div>

	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Checkbox *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="kt-checkbox-inline">
	                                    <label class="kt-checkbox">
											<input type="checkbox" name="checkbox"> Tick me
											<span></span>
										</label>
	                                </div>
	                                <span class="form-text"></span>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Checkboxes *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="kt-checkbox-list">
	                                    <label class="kt-checkbox">
											<input type="checkbox" name="checkboxes"> Option 1
											<span></span>
										</label>
	                                    <label class="kt-checkbox">
											<input type="checkbox" name="checkboxes"> Option 2
											<span></span>
										</label>
	                                    <label class="kt-checkbox">
											<input type="checkbox" name="checkboxes"> Option 3
											<span></span>
										</label>
	                                </div>
	                                <span class="form-text"></span>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-form-label col-lg-2 col-sm-12">Radios *</label>
	                            <div class="col-lg-10 col-md-10 col-sm-12">
	                                <div class="kt-radio-inline">
	                                    <label class="kt-radio">
											<input type="checkbox" name="radio"> Option 1
											<span></span>
										</label>
	                                    <label class="kt-radio">
											<input type="checkbox" name="radio"> Option 2
											<span></span>
										</label>
	                                    <label class="kt-radio">
											<input type="radio" name="radio"> Option 3
											<span></span>
										</label>
	                                </div>
	                                <span class="form-text"></span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="kt-portlet__foot">
	                        <div class="kt-form__actions">
	                            <div class="row">
	                                <div class="col-lg-10 ml-lg-auto">
	                                    <button type="submit" class="btn btn-brand">Validate</button>
	                                    <button type="reset" class="btn btn-secondary">Cancel</button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </form>
	                <!--end::Form-->
	            </div>
	            <!--end::Portlet-->
	        </div>
	    </div>
	</div>

@endsection

@section('scripts')
	<script src="{{ asset('assets/js/form-controls.js') }}" type="text/javascript"></script>
@endsection
