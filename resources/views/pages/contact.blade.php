@extends('master')
@section('title', 'Contact Us')
@section('content')
  <div class="card text-white bg-dark">
    <div class="card-body">
      <h2 class="text-center">CONTACT US</h2><br>
      <div class="row">
        <div class="col-6 text-center">
          <h3>NMA Contact Details</h3><br>
          <i class="fas fa-2x fa-map-marker"></i><br><br>
          <h5>10, Some Cool Place</h5>
          <h5>Opp Another Awesome Building</h5>
          <h5>Jimeta, Adamawa</h5><br>
          <i class="fas fa-2x fa-phone-square"> 08012345678</i><br>
          <i class="fas fa-2x fa-envelope"> support@nma-portal.com</i>
        </div>
        <div class="col-6">
          <h3 class="text-center">Send Us A Message Here</h3><br>
          <form>
            <input type="text" name="name" class="form-control" placeholder="Enter Name Here"><br>
            <input type="text" name="email" class="form-control" placeholder="Enter Email Here"><br>
            <input type="text" name="subject" class="form-control" placeholder="Enter Subject Here"><br>
            <textarea name="message" rows="8" cols="71" placeholder="Compose Message ..."></textarea>
            <button type="button" name="submit_contact" class="btn btn-block btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
