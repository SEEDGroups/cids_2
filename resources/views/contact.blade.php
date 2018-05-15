@extends('layouts.fmaster')
@section('pageTitle', 'Contact Us | ')
@section('mainContent')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ###############################################################################-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.1476691686044!2d85.31656441550821!3d27.68183048280262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1942771df6b9%3A0xc974761747014cf4!2sCentre+for+Infrastructure+Development+Studies!5e0!3m2!1sen!2snp!4v1525755336889" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
    <!-- <div class="jumbotron mb-0">
      <div class="container jumbotron-controller text-center">
        <h1 class="display-4">Do you want to do something MindBlowing?</h1>
        <p class="lead">Research is to see what everybody else has seen, and to think what nobody else has thought.</p>
      </div>
    </div> -->
    <div class="jumbotron jtext mt-0 mb-0">
      <table>
        <tbody>
          <td class="text-center"><h1> We'd Love To Hear From You!!</h1>
          <p>Need to get in touch? Please fill out our form below or just dial the number. We will contact you as soon as possible.</p>
          </td>
        </tbody>
      </table>      
    </div>
    <div class="row mt-5 justify-content-center align-items-center">
      <div class="col-md-6 col-xs-12" id="contactInfo">
        <form class="form pt-5 pb-5">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="staticEmail" placeholder="Your Good Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="staticEmail" placeholder="Your Email ID">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPhone" class="col-sm-3 col-form-label">Phone no.</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="inputPhone" placeholder="Your Phone Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Knew us?</label>
            <div class="col-sm-9"><input type="text" class="form-control" placeholder="How did you hear about us?"></div>
          </div>
          <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label">Message for us</label>
            <div class="col-sm-9"><textarea class="form-control" rows="3" style="resize: vertical;" placeholder="Write your message!"></textarea></div>
          </div>
          <div class="form-group row">
            <div class="offset-3 col-3">
              <input type="Submit" class="btn inverse">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4 col-xs-12">
        <h1>OFFICE INFORMATION</h1>
        <p><i class="fa fa-map-marker pr-3"></i>Street Name & Number 
          <p><i class="fa fa-map pr-3"></i>Town, Postcode/Zip</p>
        <p><i class="fa fa-mobile pr-3"></i>Mobile: </p>
        <p><i class="fa fa-phone pr-3"></i>Office: </p>
        <p><i class="fa fa-envelope pr-3"></i>Email: info@cidsioe.com</p>
        <p><i class="fa fa-fax pr-3"></i>Fax: 123456</p>
        <p><i class="fa fa-archive pr-3"></i>Pobox: 26309</p>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection