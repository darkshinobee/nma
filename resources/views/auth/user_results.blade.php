@extends('master')
@section('title', 'Search')

@section('content')

<div class="card text-white bg-dark">
    <div class="card-body">
      <h2 class="text-center">SEARCH RESULTS</h2><br>
      @if ($posts->Count())
        <table class="table table-hover table-borderless">
            <thead class="table-bordered">
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                  <tr>
                    <td></td>
                    <td class="text-center"><img src="{{ $post->path }}" style="border-radius:50%; height:45px" class="m-r-15"><a id="nav_text" href="{{ route('author_info', $post->user_id) }}">{{ $post->first_name. ' ' .$post->last_name }}</a></td>
                    <td></td>
                  </tr>
                @endforeach
            </tbody>
        </table>
        @else
          <h5 class="text-center">No Match Found</h5><br>
      @endif
    </div>
</div>

@stop
