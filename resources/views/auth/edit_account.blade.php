@extends('master')
@section('title', 'Edit Account Details')
@section('content')
  <div class="card text-white bg-dark">
    <div class="card-body">
      <h2 class="text-center">MY ACCOUNT DETAILS</h2><br>
      <div class="row">
        <div class="col-8 offset-2">
          <form>
            <input type="text" class="form-control" name="first_name" value="John" required><br>
            <input type="text" class="form-control" name="last_name" value="Doe" required><br>
            <input type="email" class="form-control" name="email" value="john@doe.com" required><br>
            <input type="text" class="form-control" name="phone" value="08012345678" required><br>
            <div class="row">
              <div class="col-8 offset-2">
                <button type="submit" class="btn btn-primary btn-block" name="acct_save_button">Make Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
