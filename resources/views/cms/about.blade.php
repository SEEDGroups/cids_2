@extends('layouts.aMaster')
@section('pageTitle', 'About')
@section('mainContent')
@include('cms.components.notification')
@foreach($allData as $key=>$value)
	<div class="col-lg-12">
	    <div class="card card-outline-info">
	        <div class="card-body m-t-15">
	            <form action="{{url('/babout/'.$value->id)}}" class="form-horizontal form-bordered" method="post">
	            	@csrf
	            	@method('PATCH')
	                <div class="form-body">
	                	<!-- <div class="row"> -->
	                	<h3 class="box-title m-t-40">Organization Info</h3>
	                	<hr>
	                		<div class="form-group row">
		                        <label class="control-label text-right col-md-3">Email</label>
		                        <div class="col-md-9">
		                            <input required type="email" name="email" placeholder="Write the email of the center" required class="form-control" value="{{($value->email)? ucfirst($value->email) : ''}}">
		                        </div>
		                    </div>
		                    
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Office number</label>
		                        <div class="col-md-9">
		                            <input required type="text" placeholder="Please enter Office Number" class="form-control" name="oPhone" value="{{($value->oPhone)? ($value->oPhone) : ''}}">
		                        </div>
							</div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Addres</label>
		                        <div class="col-md-9">
		                            <input required type="text" class="form-control" placeholder="Please enter address" name="address"  value="{{($value->address)? ucfirst($value->address) : ''}}">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Fax</label>
		                        <div class="col-md-9">
		                            <input  type="text" class="form-control" name="fax" placeholder="Write the Fax number"  value="{{($value->fax)? ($value->fax) : ''}}">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Post Box</label>
		                        <div class="col-md-9">
		                            <input  type="text" class="form-control" value="{{($value->pobox)? ($value->pobox) : ''}}" name="pobox" placeholder="Write the Post Box number">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Postal Code</label>
		                        <div class="col-md-9">
		                            <input required type="text" class="form-control" name="postalCode" placeholder="Write the Postal Code of the city"  value="{{($value->postalCode)? ($value->postalCode) : ''}}">
		                        </div>
		                    </div>
	                	<!-- </div> -->
	                	<h3 class="box-title m-t-40">Social Links</h3>
	                	<hr>
	                	<!-- <div class="row"> -->
	                		<div class="form-group row">
		                        <label class="control-label text-right col-md-3">Facebook</label>
		                        <div class="col-md-9">
		                            <input  type="link" class="form-control" name="facebook" placeholder="Write the hyperlink of Facebook" value="{{($value->facebook)? ucfirst($value->facebook) : ''}}">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Twitter</label>
		                        <div class="col-md-9">
		                            <input  type="text" class="form-control" name="twitter" placeholder="Write the hyperlink of Twitter"  value="{{($value->twitter)? ucfirst($value->twitter) : ''}}">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Pinterest</label>
		                        <div class="col-md-9">
		                            <input  type="text" class="form-control" name="pinterest" placeholder="Write the hyperlink of Pinterest"  value="{{($value->pinterest)? ucfirst($value->pinterest) : ''}}">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Linkedin</label>
		                        <div class="col-md-9">
		                            <input  type="text" class="form-control" name="linkedin" placeholder="Write the hyperlink of Linkedin"  value="{{($value->linkedin)? ucfirst($value->linkedin) : ''}}">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="control-label text-right col-md-3">Google Plus</label>
		                        <div class="col-md-9">
		                            <input  type="text" class="form-control" name="googleplus" placeholder="Write the hyperlink of Google Plus" value="{{($value->googleplus)? ucfirst($value->googleplus) : ''}}">
		                        </div>
		                    </div>
	                	</div>
	               <!--  </div> -->
	                <div class="form-actions">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <div class="row">
	                                <div class="offset-sm-3 col-md-9">
	                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
	                                    <button type="button" class="btn btn-inverse">Cancel</button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
@endforeach     

@endsection