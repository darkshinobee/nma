@extends('master')
@section('title', 'My Articles')

@section('content')

<div class="card text-white bg-dark">
    <div class="card-body">
      <div class="row">
        <div class="col-3">
          @if ($photo)
            <img class="img-fluid" src="{{ ($photo->path) }}" alt="{{ $user->first_name.' '.$user->last_name }}">
          @else
            <img src="/images/photos/no_img.png" alt="No Image Available">
          @endif
          <h5><span class="m-t-10 badge badge-light">{{ $user->first_name.' '.$user->last_name }}</span></h5>
          <h5><span class="badge badge-light">{{ $user->email }}</span></h5>
          <h5><span class="badge badge-light">{{ $user->phone }}</span></h5>
        </div>
        <div class="col-9">
          <h2 class="text-center">MY ARTICLES</h2><br>
            <table class="table table-hover table-borderless">
                <thead class="table-bordered">
                    <tr>
                        <th scope="col">TITLE</th>
                        <th scope="col">DATE POSTED</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                      <tr>
                        <td><a id="nav_text" href="{{ route('show_article', $post->id) }}" style="color:white">{{ $post->title }}</a></td>
                        <td>{{ date("F jS, Y", strtotime($post->created_at)) }}</td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>

    </div>
</div>

@stop
