@extends('master')
@section('title', 'Edit Account Details')
@section('content')
  <div class="card text-white bg-dark">
    <div class="card-body">
      <h2 class="text-center">MY ACCOUNT DETAILS</h2><br>
      <div class="row">
        <div class="col-8 offset-2">
            <form action="{{ route('update_account', $user->id) }}" method="post" id="form1">
              {{ csrf_field() }}
              @method('PUT')
            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required><br>
            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required><br>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required><br>
            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required><br>
            <div class="row">
              <div class="col-8 offset-2">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#confirm_modal">Make Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal --}}
  <div class="modal" id="confirm_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" form="form1" value="Save Changes">
      </div>
    </div>
  </div>
</div>
@stop
