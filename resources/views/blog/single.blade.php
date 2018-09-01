@extends('master')
@section('title', $blog->title)
@section('content')

<div class="card text-white bg-dark">
  <div class="card-body">
    <div class="content">
      <div class="date">
        <span>{{ date("M j", strtotime($blog->created_at)) }},</span>
        <span class="day">{{ date("Y", strtotime($blog->created_at)) }}</span>
      </div>
      <div class="article">
        <h2>{{ $blog->title }}</h2>
        <h3>Posted by <a href="{{ route('author_info', $blog->user_id) }}">{{ $blog->user->first_name.' '.$blog->user->last_name }}</a><span class="date-line"> on <span>{{ date("M j, Y") }}</span></span></h3>
        <div class="about_flow">
          <p>{{ $blog->content }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
