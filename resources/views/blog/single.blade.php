@extends('master')
@section('title', 'Single Article')
@section('content')

<div class="card text-white bg-dark">
  <div class="card-body">
    <div class="content">
      <div class="date">
        <span>{{ date("M j") }},</span>
        <span class="day">{{ date("Y") }}</span>
      </div>
      <div class="article">
        <h2>Prologue</h2>
        <h3>Posted by <a href="#">Dr. Adam</a><span class="date-line"> on <span>{{ date("M j, Y") }}</span></span></h3>
        <p class="firstpara"><span class="firstcharacter">P</span>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        <p >Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      </div>
    </div>
  </div>
</div>
@stop
