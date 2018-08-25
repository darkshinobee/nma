@extends('master')
@section('title', 'My Account')
@section('content')
<div class="card text-white bg-dark">
    <div class="card-body">
        <h2 class="text-center">MY ACCOUNT</h2><br>
        <div class="row">
            <div class="col-6">
                <a href="/my_articles">
                  <button type="button" class="btn btn-outline-success btn-block btn-lg">View My Articles</button>
                </a>
            </div>
            <div class="col-6">
                <a href="/edit_account">
                  <button type="button" class="btn btn-outline-warning btn-block btn-lg">Edit My Account</button>
                </a>
            </div>
        </div><br>
        <div class="row">
            <div class="col-8 offset-2">
              <a href="/">
                <button type="button" class="btn btn-primary btn-block btn-lg">Go To Homepage</button>
              </a>
            </div>
        </div>
    </div>
</div>
@stop
