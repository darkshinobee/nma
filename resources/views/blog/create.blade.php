@extends('master')
@section('title', 'Post Article')
@section('content')

<div class="card text-white bg-dark">
  <div class="card-body">
    <h2 class="text-center">Post Article</h2>
      <div class="row" id="app">
        <div class="col-8 offset-2">
          <form action="{{ route('store_article') }}" method="post">
            {{ csrf_field() }}

            <input type="text" name="title" class="form-control" placeholder="Enter Title Here" required><br>
            <textarea name="content" class="form-control" rows="8" cols="80" placeholder="Compose / Paste Article Here" required></textarea>
            <br>
            <div class="row">
              <div class="col-8">
                <button type="submit" name="submit_create" class="btn btn-block btn-primary">POST</button>
              </div>
              <div class="col-4">
                <h5 class=""><span class="badge badge-light">Author: {{ $user->first_name }}</span></h5>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<script>
var app = new Vue({
    el: '#app',
    data: {
      vindu: 'one',
    },
  });
</script> --}}
@stop
